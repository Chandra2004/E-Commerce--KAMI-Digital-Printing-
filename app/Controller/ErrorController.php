<?php
    namespace ECommerce\Shoping\Controller;

    use ECommerce\Shoping\App\View;

    class ErrorController {
        function notFound() {
            $model = [
                'title' => '404 | Halaman Tidak Ditemukan'
            ];
            
            View::render('err/404', $model);
        }

        function device() {
            $model = [
                'title' => 'Tolong Gunakan Smartphone atau Tablet'
            ];
            
            View::render('err/unable-device', $model);
        }
    }