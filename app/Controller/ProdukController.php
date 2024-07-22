<?php
    namespace ECommerce\Shoping\Controller;

    use ECommerce\Shoping\App\View;
    use ECommerce\Shoping\Models\ProdukModel;

    class ProdukController {
        // interface
        function index() {
            $produkModel = new ProdukModel();
            $data = $produkModel->getAllData();
            
            $model = [
                'title' => 'Produk | KAMI Digital Printing & Advertising',
                'produk' => $data['produk'],
                'ads_banner' => $data['ads_banner']
            ];

            View::render('interface/produk', $model);
        }

        function pesan(string $productId) {
            $produkModel = new ProdukModel();
            $data = $produkModel->getAllData();
            $productDetail = $produkModel->getProductBySlug($productId);
            
            $model = [
                'produk' => $productId,
                'detail' => $productDetail,
                'ads_banner' => $data['ads_banner'],
            ];

            View::render('interface/pesan', $model);
        }

        // Baru
        public function search() {
            $keyword = $_GET['keyword'] ?? '';
            $produkModel = new ProdukModel();
            $result = $produkModel->searchProducts($keyword);
            $data = $produkModel->getAllData();
    
            $model = [
                'title' => 'Pencarian Produk | KAMI Digital Printing & Advertising',
                'produk' => $result,
                'ads_banner' => $data['ads_banner'],
                'not_found' => empty($result) // Tambahkan flag jika tidak ada produk yang ditemukan
            ];
    
            View::render('interface/produk', $model);
        }

        // WhatsApp
        public function handlePesan() {
            // if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //     // Ambil data dari form
            //     $nama = $_POST['nama'];
            //     $noHp = $_POST['no_hp'];
            //     $alamat = $_POST['alamat'];
            //     $kelurahan = $_POST['kelurahan'];
            //     $kecamatan = $_POST['kecamatan'];
            //     $kotKab = $_POST['kota_kab'];
            //     $kodePos = $_POST['kode_pos'];
            //     $level = $_POST['level_design'];
            //     $revisi = $_POST['revisi'];
            //     $pengerjaan = $_POST['pengerjaan'];
            //     $deskripsi = $_POST['deskripsi'];
    
            //     // Konstruksi pesan untuk dikirim ke WhatsApp
            //     $space = "%20";
            //     $enter = "%0A";
    
            //     $url = "https://api.whatsapp.com/send?phone=6281359254021&text=";
    
            //     // Isi pesan WhatsApp
            //     $pesan = "Halo KAMI DIGITAL PRINTING SURABAYA," . $enter .
            //              "Saya ingin memesan produk dengan detail sebagai berikut:" . $enter . $enter .
            //              "Nama Pemesan: " . $nama . $enter .
            //              "No. HP: " . $noHp . $enter .
            //              "Alamat: " . $alamat . $enter .
            //              "Kelurahan: " . $kelurahan . $enter .
            //              "Kecamatan: " . $kecamatan . $enter .
            //              "Kota/Kabupaten: " . $kotKab . $enter .
            //              "Kode Pos: " . $kodePos . $enter . $enter .
            //              "Level Design: " . $level . $enter .
            //              "Jumlah Revisi: " . $revisi . $enter .
            //              "Jenis Pengerjaan: " . $pengerjaan . $enter . $enter .
            //              "Deskripsi: " . $deskripsi . $enter . $enter .
            //              "Silakan segera proses pesanan ini.";
    
            //     // Encode pesan agar sesuai format URL
            //     $pesan_encoded = urlencode($pesan);
    
            //     // Redirect ke URL WhatsApp untuk mengirim pesan
            //     header("Location: " . $url . $pesan_encoded);
            //     exit();
            // }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // ... (Bagian yang sama seperti sebelumnya)    $nama = $_POST['nama'];                
                $title = $_POST['title'];
                $slug = $_POST['slug'];
                $harga = $_POST['harga'];
                $nama = $_POST['nama'];
                $noHp = $_POST['no_hp'];
                $alamat = $_POST['alamat'];
                $kelurahan = $_POST['kelurahan'];
                $kecamatan = $_POST['kecamatan'];
                $kotKab = $_POST['kota_kab'];
                $kodePos = $_POST['kode_pos'];
                $level = $_POST['level_design'];
                $revisi = $_POST['revisi'];
                $pengerjaan = $_POST['pengerjaan'];
                $deskripsi = $_POST['deskripsi'];

                // Mengambil nilai harga_produk dari database (asumsi tipe data di database adalah varchar)
                $harga_produk = $harga;
                // Menghilangkan karakter selain angka dari harga_produk
                $harga_produk_angka = (int)preg_replace('/[^0-9]/', '', $harga_produk);

                // Mengambil nilai dari lvl_design
                $lvl_design_value = $level;
                // Menghilangkan karakter selain angka dari lvl_design_value
                $lvl_design_angka = (int)preg_replace('/[^0-9]/', '', $lvl_design_value);

                // Mengambil nilai dari pengerjaan
                $pengerjaan_value = $pengerjaan;
                // Menghilangkan karakter selain angka dari pengerjaan_value
                $pengerjaan_angka = (int)preg_replace('/[^0-9]/', '', $pengerjaan_value);

                // Menjumlahkan ketiga nilai
                $total = $harga_produk_angka + $lvl_design_angka + $pengerjaan_angka;
                $total_formatted = number_format($total, 0, ',', '.');

                // ... (Bagian yang sama seperti sebelumnya)
                $space = "%20";
                $enter = "%0A";

                // $url = "https://api.whatsapp.com/send?phone=6281359254021&text=";
                
                $url = "https://api.whatsapp.com/send?phone=6285730676143&text=";

                // Info-Salam
                $infoSalam = "Halo" . $enter . "*KAMI DIGITAL PRINTING SURABAYA*,";

                // Info-Produk
                $infoProduk = "==========" . $enter . "Saya ingin Memesan Produk Berikut : " . $enter . "Nama Produk : " . $title . $enter . "Harga Produk : " . $harga_produk . $enter . "==========";

                // Info-Pemesan
                $infoPemesan = "==========" . $enter . "Nama Pemesan : " . $nama . $enter . "No Hp/WA : " . $noHp . $enter . "Alamat : " . $alamat . $enter . "Kelurahan : " . $kelurahan . $enter . "Kecamatan : " . $kecamatan . $enter . "Kota/Kab : " . $kotKab . $enter . "Kode Pos : " . $kodePos . $enter . "==========";

                // Info-Request
                $infoRequest = "==========" . $enter . "Request Produk :" . $enter . "Level Design : " . $level . $enter . "Pengerjaan : " . $pengerjaan . $enter . "Revisi : " . $revisi . $enter . "Deskripsi : " . $enter . $deskripsi . $enter . "==========";

                // Invoice
                $invoice = "==========" . $enter . "*INVOICE*" . $enter . "Total Pembayaran Rp "  . "*" . $total_formatted . "*,-" . $enter . $enter . "Mohon Untuk Segera Membayar" . $enter . "Bank : *BCA*" . $enter . "Via TF: *0882315205*" . $enter . "A/N : *Abdul Hafid*" . $enter . "==========";;

                // InfoFoto
                $infoFoto = "Link Produk :" . $enter . BASE_URL . "/produk/pesan/" . $slug;


                $api_url = $url . $space . $infoSalam . $enter . $enter . $infoProduk . $enter . $enter . $infoPemesan . $enter . $enter . $infoRequest . $enter . $enter . $invoice . $enter . $enter . $infoFoto;

                // Redirect ke URL WhatsApp
                header("Location: $api_url");
                exit();
            }
        }


        // dashboard
        function dashboardProduk() {
            $produkModel = new ProdukModel();
            $data = $produkModel->getAllData();
            $statusMailbox = $produkModel->getStatusMailbox();
            
            $model = [
                'title' => 'Produk | KAMI Digital Printing & Advertising',
                'totalProduk' => $data['produk'],
                'statusMailbox' => $statusMailbox['unread_count']
            ];

            View::render('dashboard/produk', $model);
        }

        public function create() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addProduk'])) {
                $produkModel = new ProdukModel();
                
                $photo_produk = $_FILES['photo_produk'];
                $title_produk = $_POST['title_produk'];
                $rating_produk = $_POST['rating_produk'];
                $kota_produk = $_POST['kota_produk'];
                $harga_produk = $_POST['harga_produk'];
                $slug_produk = $_POST['slug_produk'];
                $deskripsi_produk = $_POST['deskripsi_produk'];
                $status_produk = $_POST['status_produk'];
        
                // Validasi jika title_produk sudah ada di database
                if ($produkModel->checkTitleExistence($title_produk)) {
                    header('Location: ' . BASE_URL . '/dashboard/produk?name-found=failed');
                    exit();
                }
        
                // Tentukan direktori tujuan untuk menyimpan file
                $targetDir = "../public/assets/img/eksternal/produk/";
                $targetFile = $targetDir . basename($_FILES["photo_produk"]["name"]);
        
                // Cek jenis file yang diizinkan
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                if ($fileType != "jpg" && $fileType != "png") {
                    header('Location: ' . BASE_URL . '/dashboard/produk?required-photo=failed');
                    exit();
                }
        
                // Batasi ukuran file
                if ($_FILES["photo_produk"]["size"] > 1000000) { // 1MB
                    //echo "File terlalu besar. Maksimal 1MB.";
                    header('Location: ' . BASE_URL . '/dashboard/produk?size-file=failed');
                    exit();
                }
        
                // Generate nama file baru dengan nama random
                $newFileName = uniqid() . '.' . $fileType;
                $targetFilePath = $targetDir . $newFileName;
        
                // Pindahkan file yang diupload ke direktori tujuan
                if (move_uploaded_file($_FILES["photo_produk"]["tmp_name"], $targetFilePath)) {
                    // Panggil method insertProduk dari model
                    $success = $produkModel->insertProduk(
                        $newFileName, // Gunakan nama file baru
                        $title_produk,
                        $rating_produk,
                        $kota_produk,
                        $harga_produk,
                        $slug_produk,
                        $deskripsi_produk,
                        $status_produk
                    );
        
                    if ($success) {
                        // Redirect atau response sukses
                        header('Location: ' . BASE_URL . '/dashboard/produk?status-addproduk=success');
                        exit();
                    } else {
                        // Handle jika gagal menyimpan ke database
                        header('Location: ' . BASE_URL . '/dashboard/produk?status-addproduk=failed');
                        exit();
                    }
                } else {
                    // Handle jika gagal memindahkan file
                    header('Location: ' . BASE_URL . '/dashboard/produk?upload-photo=failed');
                    exit();
                }
            }
        }

        public function update() {
            if (isset($_POST['submit_upProduk'])) {
                $produkModel = new ProdukModel();
        
                $id_produk = $_POST['id_produk'];
                $title_produk = $_POST['title_produk'];
                $rating_produk = $_POST['rating_produk'];
                $kota_produk = $_POST['kota_produk'];
                $harga_produk = $_POST['harga_produk'];
                $slug_produk = $_POST['slug_produk'];
                $deskripsi_produk = $_POST['deskripsi_produk'];
                $status_produk = $_POST['status_produk'];
                $photo_produk = $_FILES['photo_produk'];
        
                // Mendapatkan data produk lama
                $oldProduk = $produkModel->getProdukById($id_produk);
        
                // Validasi jika title_produk sudah ada di database (kecuali untuk produk yang sedang diupdate)
                if ($produkModel->checkUpdateTitleExistence($title_produk, $id_produk)) {
                    header('Location: ' . BASE_URL . '/dashboard/produk?status-update-name=failed');
                    exit();
                }
        
                $newFileName = $oldProduk['photo_produk']; // Gunakan file lama sebagai default
        
                // Mengecek apakah ada file gambar yang diupload
                if (isset($_FILES['photo_produk']) && $_FILES['photo_produk']['error'] != UPLOAD_ERR_NO_FILE) {
                    $photo_produk = $_FILES['photo_produk'];
                    
                    // Tentukan direktori tujuan untuk menyimpan file
                    $targetDir = "../public/assets/img/eksternal/produk/";
                    $fileType = strtolower(pathinfo($photo_produk['name'], PATHINFO_EXTENSION));
        
                    // Cek jenis file yang diizinkan
                    $allowedFileTypes = ["jpg", "jpeg", "png"];
                    if (!in_array($fileType, $allowedFileTypes)) {
                        header('Location: ' . BASE_URL . '/dashboard/produk?status-update-photo-extension=failed');
                        exit();
                    }
        
                    // Batasi ukuran file
                    if ($photo_produk["size"] > 1000000) { // 1MB
                        header('Location: ' . BASE_URL . '/dashboard/produk?status-update-photo-size=failed');
                        exit();
                    }
        
                    // Generate nama file baru dengan nama random
                    $randomFileName = uniqid() . '.' . $fileType;
                    $targetFile = $targetDir . $randomFileName;
                    $photoPath = $randomFileName; // hanya menyimpan nama file
        
                    // Memindahkan file yang diupload ke direktori tujuan di server
                    if (move_uploaded_file($photo_produk["tmp_name"], $targetFile)) {
                        // Menghapus file gambar lama
                        if (file_exists($targetDir . $oldProduk['photo_produk'])) {
                            unlink($targetDir . $oldProduk['photo_produk']);
                        }
        
                        // Update informasi produk dengan gambar baru
                        $produkModel->updateProduk($id_produk, $photoPath, $title_produk, $rating_produk, $kota_produk, $harga_produk, $slug_produk, $deskripsi_produk, $status_produk);
                        header('Location: ' . BASE_URL . '/dashboard/produk?status-update=success');
                        exit();
                    } else {
                        echo "Gagal mengupload file";
                    }
                } else {
                    // Update informasi produk tanpa mengganti gambar
                    $produkModel->updateProduk($id_produk, $oldProduk['photo_produk'], $title_produk, $rating_produk, $kota_produk, $harga_produk, $slug_produk, $deskripsi_produk, $status_produk);
                    header('Location: ' . BASE_URL . '/dashboard/produk?status-update=success');
                    exit();
                }
            } else {
                header('Location: ' . BASE_URL . '/dashboard/produk?status-update=failed');
                exit();
            }
        }

        public function delete() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deleteProduk'])) {
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $produkModel = new ProdukModel();
                    $success = $produkModel->deleteProdukById($id);
                    
                    if ($success) {
                        // Redirect atau response success
                        header('Location: ' . BASE_URL . '/dashboard/produk?status-deleted=success');
                        exit();
                    } else {
                        // Handle jika gagal menghapus
                        header('Location: ' . BASE_URL . '/dashboard/produk?status-deleted=failed');
                        exit();
                    }
                }
            }
        }
    }