<?php
// app/Models/DashboardModel.php

namespace ECommerce\Shoping\Models;

use ECommerce\Shoping\App\Database;

class DashboardModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getTotalMailbox() {
        // Query untuk mengambil Total Mailbox
        $this->db->query("SELECT COUNT(*) as total_mailbox FROM mailbox");
        $data = $this->db->single();
        return $data;
    }

    public function getStatusMailbox() {
        // Query untuk mengambil Total Mailbox
        $this->db->query("SELECT COUNT(*) AS unread_count FROM mailbox WHERE status_mail = 'unread'");
        $data = $this->db->single();
        return $data;
    }

    public function getTotalMilestone() {
        // Query untuk mengambil Total Milestone
        $this->db->query("SELECT COUNT(*) as total_milestone FROM milestone");
        $data = $this->db->single();
        return $data;
    }

    public function getTotalProduk() {
        // Query untuk mengambil Total Produk
        $this->db->query("SELECT COUNT(*) as total_produk FROM produk");
        $data = $this->db->single();
        return $data;
    }

    public function getTotalUser() {
        // Query untuk mengambil Total Users
        $this->db->query("SELECT COUNT(*) as total_users FROM users");
        $data = $this->db->single();
        return $data;
    }
}