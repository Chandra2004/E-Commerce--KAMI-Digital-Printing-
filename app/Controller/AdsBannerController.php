<?php
    namespace ECommerce\Shoping\Controller;

    use ECommerce\Shoping\App\View;
    use ECommerce\Shoping\Models\AdsBannerModel;

    class AdsBannerController {
        function index() {
            $adsBannerModel = new AdsBannerModel();
            $totalBanner = $adsBannerModel->getTotalBanner();
            $statusMailbox = $adsBannerModel->getStatusMailbox();
            
            $model = [
                'title' => 'Ads Banner | KAMI Digital Printing & Advertising | Surabaya',
                'totalBanner' => $totalBanner['ads_banner'],
                'statusMailbox' => $statusMailbox['unread_count']
            ];
            
            View::render('dashboard/adsBanner', $model);
        }

        public function upload() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload_banner'])) {
                $adsBannerModel = new AdsBannerModel();
                
                $nama = $_POST['nama_banner'];
                $link = $_POST['link_banner'];
                $posisi = $_POST['posisi_banner'];
                $expired = $_POST['expired_banner'];
                $image = $_FILES['image_banner'];
            
                // Mengecek apakah posisi sudah terisi
                if ($adsBannerModel->isPositionTaken($posisi)) {
                    header('Location: ' . BASE_URL . '/dashboard/ads-banner?status-created=position-taken');
                    exit();
                } 
            
                // Validasi file gambar
                $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
                if (!in_array($image['type'], $allowedTypes)) {
                    header('Location: ' . BASE_URL . '/dashboard/ads-banner?status-banner=invalid-file-type');
                    exit();
                }
            
                // Mendapatkan path dan nama file yang diupload
                $targetDir = "../public/assets/img/eksternal/banner-ads/";
                $randomFileName = uniqid() . '.' . pathinfo($image["name"], PATHINFO_EXTENSION);
                $targetFile = $targetDir . $randomFileName;
                $imagePath = $randomFileName; // hanya menyimpan nama file
            
                // Memindahkan file yang diupload ke direktori tujuan di server
                if (move_uploaded_file($image["tmp_name"], $targetFile)) {
                    // Menyimpan informasi banner ke database
                    $success = $adsBannerModel->saveBanner($nama, $link, $imagePath, $posisi, $expired);
                    if ($success) {
                        header('Location: ' . BASE_URL . '/dashboard/ads-banner?status-banner=success');
                        exit();
                    } else {
                        header('Location: ' . BASE_URL . '/dashboard/ads-banner?status-banner=failed');
                        exit();
                    }
                } else {
                    header('Location: ' . BASE_URL . '/dashboard/ads-banner?status-banner=upload-failed');
                    exit();
                }
            }
        }

        public function delete() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_banner'])) {
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $adsBannerModel = new AdsBannerModel();
                    $success = $adsBannerModel->deleteBannerById($id);
                    
                    if ($success) {
                        // Redirect atau response success
                        header('Location: ' . BASE_URL . '/dashboard/ads-banner?status-deleted=success');
                        exit();
                    } else {
                        // Handle jika gagal menghapus
                        header('Location: ' . BASE_URL . '/dashboard/ads-banner?status-deleted=failed');
                        exit();
                    }
                }
            }
        }

        public function update() {
            if (isset($_POST['update_banner'])) {
                $adsBannerModel = new AdsBannerModel();
            
                $id = $_POST['id_UpBanner'];
                $nama = $_POST['name_upBanner'];
                $link = $_POST['link_upBanner'];
                $expired = $_POST['expired_upBanner'];
                $image = $_FILES['image_upBanner'];
    
                // Mendapatkan data banner lama
                $oldBanner = $adsBannerModel->getBannerById($id);
            
                // Mengecek apakah ada file gambar yang diupload
                if ($image['error'] == 0) {
                    // Mendapatkan path dan nama file yang diupload
                    $targetDir = "../public/assets/img/eksternal/banner-ads/";
                    $randomFileName = uniqid() . '.' . pathinfo($image["name"], PATHINFO_EXTENSION);
                    $targetFile = $targetDir . $randomFileName;
                    $imagePath = $randomFileName; // hanya menyimpan nama file
    
                    // Memindahkan file yang diupload ke direktori tujuan di server
                    if (move_uploaded_file($image["tmp_name"], $targetFile)) {
                        // Menghapus file gambar lama
                        if (file_exists($targetDir . $oldBanner['image_banner'])) {
                            unlink($targetDir . $oldBanner['image_banner']);
                        }
    
                        // Update informasi banner dengan gambar baru
                        $adsBannerModel->updateBanner($id, $nama, $link, $imagePath, $expired);
                        header('Location: ' . BASE_URL . '/dashboard/ads-banner?status-updated=success');
                        exit();
                    } else {
                        echo "Gagal mengupload file";
                    }
                } else {
                    // Update informasi banner tanpa mengganti gambar
                    $adsBannerModel->updateBanner($id, $nama, $link, $oldBanner['image_banner'], $expired);
                    header('Location: ' . BASE_URL . '/dashboard/ads-banner?status-updated=success');
                    exit();
                }
            } else {
                header('Location: ' . BASE_URL . '/dashboard/ads-banner?status-updated=failed');
                exit();
            }
        }

        // To WEBP
        // public function upload() {
        //     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload_banner'])) {
        //         $adsBannerModel = new AdsBannerModel();
        
        //         $nama = $_POST['nama_banner'];
        //         $link = $_POST['link_banner'];
        //         $posisi = $_POST['posisi_banner'];
        //         $expired = $_POST['expired_banner'];
        //         $image = $_FILES['image_banner'];
        
        //         // Mengecek apakah posisi sudah terisi
        //         if ($adsBannerModel->isPositionTaken($posisi)) {
        //             header('Location: ' . BASE_URL . '/dashboard/ads-banner?status-created=position-taken');
        //             exit();
        //         }
        
        //         // Validasi file gambar
        //         $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        //         if (!in_array($image['type'], $allowedTypes)) {
        //             header('Location: ' . BASE_URL . '/dashboard/ads-banner?status-banner=invalid-file-type');
        //             exit();
        //         }
        
        //         // Mendapatkan path dan nama file yang diupload
        //         $targetDir = "../public/assets/img/eksternal/banner-ads/";
        //         $randomFileName = uniqid() . '.webp';
        //         $targetFile = $targetDir . $randomFileName;
        //         $imagePath = $randomFileName; // hanya menyimpan nama file
        
        //         // Mengonversi gambar ke format WebP
        //         $imageResource = null;
        //         switch ($image['type']) {
        //             case 'image/jpeg':
        //                 $imageResource = imagecreatefromjpeg($image['tmp_name']);
        //                 break;
        //             case 'image/png':
        //                 $imageResource = imagecreatefrompng($image['tmp_name']);
        //                 break;
        //             case 'image/gif':
        //                 $imageResource = imagecreatefromgif($image['tmp_name']);
        //                 break;
        //         }
        
        //         if ($imageResource && imagewebp($imageResource, $targetFile)) {
        //             imagedestroy($imageResource);
        
        //             // Membaca file WebP dan mengkonversi ke format BLOB untuk disimpan ke database
        //             $webpData = file_get_contents($targetFile);
        
        //             // Menyimpan informasi banner ke database
        //             $success = $adsBannerModel->saveBanner($nama, $link, $webpData, $posisi, $expired);
        //             if ($success) {
        //                 header('Location: ' . BASE_URL . '/dashboard/ads-banner?status-banner=success');
        //                 exit();
        //             } else {
        //                 header('Location: ' . BASE_URL . '/dashboard/ads-banner?status-banner=failed');
        //                 exit();
        //             }
        //         } else {
        //             header('Location: ' . BASE_URL . '/dashboard/ads-banner?status-banner=upload-failed');
        //             exit();
        //         }
        //     }
        // }
        
        
    }