<?php
    namespace ECommerce\Shoping\Controller;

    use ECommerce\Shoping\App\View;
    use ECommerce\Shoping\Models\MailboxModel;

    class MailboxController {
        function index() {
            $mailboxModel = new MailboxModel();
            $totalMailbox = $mailboxModel->getTotalMailbox();
            $statusMailbox = $mailboxModel->getStatusMailbox();

            $model = [
                'title' => 'Mailbox | KAMI Digital Printing & Advertising | Surabaya',
                'totalMailbox' => $totalMailbox['mailbox'],
                'statusMailbox' => $statusMailbox['unread_count']
            ];
            
            View::render('dashboard/mailbox', $model);
        }

        public function createMailKarir() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_karir'])) {
                $tipe_mail = $_POST['tipe-mail'];
                $email_mail = $_POST['email'];
                $subjek_mail = $_POST['subject_career'];
                $nama_mail = $_POST['full-name'];
                $nomor_mail = $_POST['phone'];
                $posisi_mail = $_POST['position'];
                // Validasi input jika diperlukan
        
                $mailboxModel = new MailboxModel();
                $success = $mailboxModel->insertMailKarir(
                    $tipe_mail,
                    $email_mail,
                    $subjek_mail,
                    $nama_mail,
                    $nomor_mail,
                    $posisi_mail
                );
                if ($success) {
                    // Redirect atau response sukses
                    header('Location: ' . BASE_URL . '/karir?status-karir=success'); // Ganti dengan halaman yang sesuai
                    exit();
                } else {
                    // Handle jika gagal menyimpan
                    header('Location: ' . BASE_URL . '/karir?status-karir=failed');
                    exit();
                }
            }
        }   

        public function createMailKerjaSama() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_kerjaSama'])) {
                $tipe_mail = $_POST['tipe-mail'];
                $email_mail = $_POST['email'];
                $subjek_mail = $_POST['subject_join'];
                $nama_mail = $_POST['company-name'];
                $nomor_mail = $_POST['phone'];
                $pesan_mail = $_POST['message'];
                // Validasi input jika diperlukan
        
                $mailboxModel = new MailboxModel();
                $success = $mailboxModel->insertMailKerjaSama(
                    $tipe_mail,
                    $email_mail,
                    $subjek_mail,
                    $nama_mail,
                    $nomor_mail,
                    $pesan_mail
                );
                if ($success) {
                    // Redirect atau response sukses
                    header('Location: ' . BASE_URL . '/kerja-sama?status-kerja-sama=success'); // Ganti dengan halaman yang sesuai
                    exit();
                } else {
                    // Handle jika gagal menyimpan
                    header('Location: ' . BASE_URL . '/kerja-sama?status-kerja-sama=failed');
                    exit();
                }
            }
        } 
        
        public function updateStatus() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
                $id = $_POST['id'];
                $mailboxModel = new MailboxModel();
                $success = $mailboxModel->updateMailStatus($id);
        
                if ($success) {
                    // Redirect dengan status sukses
                    header('Location: ' . BASE_URL . '/dashboard/mailbox');
                    exit();
                } else {
                    // Redirect dengan status gagal
                    header('Location: ' . BASE_URL . '/dashboard/mailbox');
                    exit();
                }
            }
        }

        public function delete() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $mailboxModel = new MailboxModel();
                    $success = $mailboxModel->deleteMailById($id);
                    
                    if ($success) {
                        // Redirect atau response success
                        header('Location: ' . BASE_URL . '/dashboard/mailbox?status-delete=success'); // Ganti dengan halaman yang sesuai
                        exit();
                    } else {
                        // Handle jika gagal menghapus
                        header('Location: ' . BASE_URL . '/dashboard/mailbox?status-delete=failed');
                        exit();
                    }
                }
            }
        }
    }