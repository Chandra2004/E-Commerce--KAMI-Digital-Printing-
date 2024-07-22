<?php
    namespace ECommerce\Shoping\Controller;

    use ECommerce\Shoping\App\View;
    use ECommerce\Shoping\Models\UserModel;

    class LoginController {
        function index() {

            $model = [
                'title' => 'Login | KAMI Digital Printing & Advertising | Surabaya'
            ];
            
            View::render('dashboard/login', $model);
        }

        public function login() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $identifier = $_POST['identifier'];
                $password = $_POST['password'];
                $userModel = new UserModel();
                $user = $userModel->getUserByIdentifier($identifier);
    
                if ($user && password_verify($password, $user['password_user'])) {
                    session_start();
                    $_SESSION['user_id'] = $user['id_user'];
                    $_SESSION['role'] = $user['role_user'];
                    header('Location: ' . BASE_URL . '/dashboard');
                    exit();
                } else {
                    header('Location: ' . BASE_URL . '/login?status-login=failed');
                    exit();
                }
            }
        }

        public function logout() {
            session_start();
            session_unset();
            session_destroy();
            header('Location: ' . BASE_URL . '/login');
            exit();
        }
    }