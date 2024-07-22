<?php
    namespace ECommerce\Shoping\Controller;

    use ECommerce\Shoping\App\View;
    use ECommerce\Shoping\Models\UserModel;

    class UserController {
        function index() {
            $userModel = new UserModel();
            $totalUser = $userModel->getTotalUser();

            $model = [
                'title' => 'User | KAMI Digital Printing & Advertising | Surabaya',
                'totalUser' => $totalUser['users']
            ];
            
            View::render('dashboard/user', $model);
        }

        public function register() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Validate password match
                if ($_POST['password'] !== $_POST['confirm_password']) {
                    header('Location: ' . BASE_URL . '/dashboard/user?status-password=failed');
                    return;
                }
    
                // Sanitize input
                $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                $password = $_POST['password'];
                $role = $_POST['role'];
    
                // Instantiate UserModel
                $userModel = new UserModel();
    
                // Register user
                $result = $userModel->register($username, $email, $password, $role);
    
                // Handle result
                switch ($result) {
                    case 'success':
                        header('Location: ' . BASE_URL . '/dashboard/user?status-created=success');
                        break;
                    case 'email_exists':
                        header('Location: ' . BASE_URL . '/dashboard/user?status-email=failed');
                        break;
                    default:
                        echo "Terjadi kesalahan saat registrasi";
                }
            }
        }
    }