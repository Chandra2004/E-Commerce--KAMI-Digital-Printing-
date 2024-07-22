<?php
// app/Models/HomeModel.php

namespace ECommerce\Shoping\Models;

use ECommerce\Shoping\App\Database;

class HomeModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllData() {
        // Query untuk mengambil data Banner
        $this->db->query("SELECT * FROM ads_banner");
        $data['ads_banner'] = $this->db->resultSet();

        // Query untuk mengambil data produk
        $this->db->query("SELECT * FROM produk ORDER BY timestamp DESC");
        $data['produk'] = $this->db->resultSet();

        // Query untuk mengambil data Milestone
        $this->db->query("SELECT * FROM milestone ORDER BY timestamp DESC");
        $data['milestone'] = $this->db->resultSet();

        return $data;
    }

    public function getProductBySlug($productId) {
        // Query database untuk mengambil produk berdasarkan slug
        $query = "SELECT * FROM produk WHERE slug_produk = :slug";
        $this->db->query($query);
        $this->db->bind(':slug', $productId);
        return $this->db->single();
    }
}