<?php
    namespace ECommerce\Shoping\Controller;

    use ECommerce\Shoping\App\View;
    use ECommerce\Shoping\Models\DashboardModel;

    class DashboardController {
        function index() {
            $dashboardModel = new DashboardModel();
            $totalMailbox = $dashboardModel->getTotalMailbox();
            $statusMailbox = $dashboardModel->getStatusMailbox();
            $totalMilestone = $dashboardModel->getTotalMilestone();
            $totalProduk = $dashboardModel->getTotalProduk();
            $totalUsers = $dashboardModel->getTotalUser();

            $model = [
                'title' => 'Dashboard | KAMI Digital Printing & Advertising | Surabaya',
                'totalMailbox' => $totalMailbox['total_mailbox'],
                'statusMailbox' => $statusMailbox['unread_count'],
                'totalMilestone' => $totalMilestone['total_milestone'],
                'totalProduk' => $totalProduk['total_produk'],
                'totalUser' => $totalUsers['total_users']
            ];
            
            View::render('dashboard/home', $model);
        }
    }