<?php
    namespace ECommerce\Shoping\Controller;

    use ECommerce\Shoping\App\View;
    use ECommerce\Shoping\Models\MilestoneModel;

    class MilestoneController {
        function index() {
            $milestoneModel = new MilestoneModel();
            $totalMilestone = $milestoneModel->getTotalMilestone();
            $statusMailbox = $milestoneModel->getStatusMailbox();

            $model = [
                'title' => 'Milestone | KAMI Digital Printing & Advertising | Surabaya',
                'totalMilestone' => $totalMilestone['milestone'],
                'statusMailbox' => $statusMailbox['unread_count']
            ];
            
            View::render('dashboard/milestone', $model);
        }

        public function create() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['newMilestone'])) {
                $name_milestone = $_POST['name_milestone'];
                $date_mailstone = $_POST['date_milestone'];
                $description_milestone = $_POST['description_milestone'];
                // Validasi input jika diperlukan
        
                $mailboxModel = new MilestoneModel();
                $success = $mailboxModel->insertMilestone(
                    $name_milestone,
                    $date_mailstone,
                    $description_milestone
                );
                if ($success) {
                    // Redirect atau response sukses
                    header('Location: ' . BASE_URL . '/dashboard/milestone?status-created=success'); // Ganti dengan halaman yang sesuai
                    exit();
                } else {
                    // Handle jika gagal menyimpan
                    header('Location: ' . BASE_URL . '/dashboard/milestone?status-created=failed');
                    exit();
                }
            }
        }

        public function update() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_milestone'])) {
                $id_upMilestone = $_POST['id_upmilestone'];
                $name_upMilestone = $_POST['name_upmilestone'];
                $date_upMilestone = $_POST['date_upmilestone'];
                $description_upMilestone = $_POST['description_upmilestone'];
                // Validasi input jika diperlukan
        
                $mailboxModel = new MilestoneModel();
                $success = $mailboxModel->updateMilestone(
                    $id_upMilestone,
                    $name_upMilestone,
                    $date_upMilestone,
                    $description_upMilestone
                );
                if ($success) {
                    // Redirect atau response sukses
                    header('Location: ' . BASE_URL . '/dashboard/milestone?status-update=success'); // Ganti dengan halaman yang sesuai
                    exit();
                } else {
                    // Handle jika gagal menyimpan
                    header('Location: ' . BASE_URL . '/dashboard/milestone?status-update=failed');
                    exit();
                }
            }
        }

        public function delete() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $milestoneModel = new MilestoneModel();
                    $success = $milestoneModel->deleteMilestoneById($id);
                    
                    if ($success) {
                        // Redirect atau response success
                        header('Location: ' . BASE_URL . '/dashboard/milestone?status-delete=success'); // Ganti dengan halaman yang sesuai
                        exit();
                    } else {
                        // Handle jika gagal menghapus
                        header('Location: ' . BASE_URL . '/dashboard/milestone?status-delete=failed');
                        exit();
                    }
                }
            }
        }
    }