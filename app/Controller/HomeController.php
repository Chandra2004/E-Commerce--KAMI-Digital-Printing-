<?php
    namespace ECommerce\Shoping\Controller;

    use ECommerce\Shoping\App\View;
    use ECommerce\Shoping\Models\HomeModel;

    class HomeController {
        function index() {
            $homeModel = new HomeModel();
            $data = $homeModel->getAllData();
            
            $model = [
                'title' => 'KAMI Digital Printing & Advertising | Surabaya',
                'produk' => $data['produk'],
                'ads_banner' => $data['ads_banner']
            ];
            
            View::render('interface/home', $model);
        }
    }