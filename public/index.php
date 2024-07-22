<?php
    // ini file public/index.php

    require_once __DIR__ . '/../vendor/autoload.php';
    
    use ECommerce\Shoping\App\Router;
    use ECommerce\Shoping\Middleware\AuthMiddleware;

    use ECommerce\Shoping\Controller\ErrorController;
    use ECommerce\Shoping\Controller\HomeController;
    use ECommerce\Shoping\Controller\ProdukController;
    use ECommerce\Shoping\Controller\InfoController;

    use ECommerce\Shoping\Controller\DashboardController;
    use ECommerce\Shoping\Controller\AdsBannerController;
    use ECommerce\Shoping\Controller\MailboxController;
    use ECommerce\Shoping\Controller\MilestoneController;
    use ECommerce\Shoping\Controller\UserController;
    use ECommerce\Shoping\Controller\LoginController;


    Router::add('GET', '/404', ErrorController::class, 'notFound');
    Router::add('GET', '/unable-device', ErrorController::class, 'device');

    Router::add('GET', '/', HomeController::class, 'index');

    Router::add('GET', '/produk', ProdukController::class, 'index');
    Router::add('GET', '/produk/pesan/([0-9a-zA-Z-]*)', ProdukController::class, 'pesan');
    Router::add('GET', '/produk/search', ProdukController::class, 'search');
    Router::add('POST', '/produk/pesan', ProdukController::class, 'handlePesan');


    Router::add('GET', '/kerja-sama', InfoController::class, 'kerjaSama');
    Router::add('POST', '/send/kerja-sama', MailboxController::class, 'createMailKerjaSama');
    Router::add('GET', '/karir', InfoController::class, 'karir');
    Router::add('POST', '/send/karir', MailboxController::class, 'createMailKarir');

    Router::add('GET', '/kontak', InfoController::class, 'kontak');
    Router::add('GET', '/tentang', InfoController::class, 'tentang');
    Router::add('GET', '/pusat-bantuan', InfoController::class, 'pusatBantuan');
    Router::add('GET', '/syarat-ketentuan', InfoController::class, 'syaratKetentuan');

    Router::add('GET', '/dashboard', DashboardController::class, 'index', [AuthMiddleware::class]);

    Router::add('GET', '/dashboard/ads-banner', AdsBannerController::class, 'index', [AuthMiddleware::class]);
    Router::add('POST', '/dashboard/ads-banner/upload', AdsBannerController::class, 'upload');
    Router::add('POST', '/dashboard/ads-banner/delete', AdsBannerController::class, 'delete');
    Router::add('POST', '/dashboard/ads-banner/update', AdsBannerController::class, 'update');

    Router::add('GET', '/dashboard/mailbox', MailboxController::class, 'index', [AuthMiddleware::class]);
    Router::add('POST', '/dashboard/mailbox/delete', MailboxController::class, 'delete');
    Router::add('POST', '/dashboard/mailbox/status', MailboxController::class, 'updateStatus');

    Router::add('GET', '/dashboard/milestone', MilestoneController::class, 'index', [AuthMiddleware::class]);
    Router::add('POST', '/dashboard/milestone/create', MilestoneController::class, 'create');
    Router::add('POST', '/dashboard/milestone/update', MilestoneController::class, 'update');
    Router::add('POST', '/dashboard/milestone/delete', MilestoneController::class, 'delete');
    
    Router::add('GET', '/dashboard/produk', ProdukController::class, 'dashboardProduk', [AuthMiddleware::class]);
    Router::add('POST', '/dashboard/produk/create', ProdukController::class, 'create');
    Router::add('POST', '/dashboard/produk/update', ProdukController::class, 'update');
    Router::add('POST', '/dashboard/produk/delete', ProdukController::class, 'delete');

    Router::add('GET', '/dashboard/user', UserController::class, 'index', [AuthMiddleware::class]);
    Router::add('POST', '/dashboard/user/register', UserController::class, 'register');

    Router::add('GET', '/login', LoginController::class, 'index');
    Router::add('POST', '/login/process', LoginController::class, 'login');
    Router::add('GET', '/logout', LoginController::class, 'logout');

    Router::run();