<?php
    namespace ECommerce\Shoping\Controller;

    use ECommerce\Shoping\App\View;
    use ECommerce\Shoping\Models\HomeModel;

    class InfoController {
        function kerjaSama() {
            $model = [
                'title' => 'Kerja Sama - KAMI Digital Printing'
            ];
            
            View::render('interface/kerja-sama', $model);
        }

        function karir() {
            $model = [
                'title' => 'Karir - KAMI Digital Printing'
            ];
            
            View::render('interface/karir', $model);
        }

        function tentang() {
            $homeModel = new HomeModel();
            $data = $homeModel->getAllData();

            $model = [
                'title' => 'Tentang - KAMI Digital Printing',
                'milestone' => $data['milestone']
            ];
            
            View::render('interface/tentang', $model);
        }

        function kontak() {
            $model = [
                'title' => 'Kontak - KAMI Digital Printing'
            ];
            
            View::render('interface/kontak', $model);
        }

        function pusatBantuan() {
            $model = [
                'title' => 'Pusat Bantuan - KAMI Digital Printing'
            ];
            
            View::render('interface/pusat-bantuan', $model);
        }

        function syaratKetentuan() {
            $model = [
                'title' => 'Syarat Dan Ketentuan - KAMI Digital Printing'
            ];
            
            View::render('interface/syarat-ketentuan', $model);
        }
    }