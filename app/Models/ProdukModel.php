<?php
// app/Models/ProdukModel.php

namespace ECommerce\Shoping\Models;

use ECommerce\Shoping\App\Database;

class ProdukModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllData() {
        // Query untuk mengambil data Banner
        $this->db->query("SELECT * FROM ads_banner");
        $data['ads_banner'] = $this->db->resultSet();

        // Query untuk mengambil data produk//
        $this->db->query("SELECT * FROM produk ORDER BY RAND()");
        $data['produk'] = $this->db->resultSet();

        return $data;
    }

    public function getStatusMailbox() {
        $this->db->query("SELECT COUNT(*) AS unread_count FROM mailbox WHERE status_mail = 'unread'");
        $data = $this->db->single();
        return $data;
    }

    public function getProductBySlug($productId) {
        // Query database untuk mengambil produk berdasarkan slug
        $query = "SELECT * FROM produk WHERE slug_produk = :slug";
        $this->db->query($query);
        $this->db->bind(':slug', $productId);
        return $this->db->single();
    }

    public function searchProducts($keyword) {
        // Query untuk mencari produk berdasarkan keyword
        $query = "SELECT * FROM produk WHERE title_produk LIKE :keyword OR deskripsi_produk LIKE :keyword";
        $this->db->query($query);
        $this->db->bind(':keyword', '%' . $keyword . '%');
        return $this->db->resultSet();
    }

    // dashboard
    public function insertProduk($photo_produk, $title_produk, $rating_produk, $kota_produk, $harga_produk, $slug_produk, $deskripsi_produk, $status_produk) {
        $this->db->query("INSERT INTO produk (photo_produk, title_produk, rating_produk, kota_produk, harga_produk, slug_produk, deskripsi_produk, status_produk, timestamp) 
                          VALUES (:photo_produk, :title_produk, :rating_produk, :kota_produk, :harga_produk, :slug_produk, :deskripsi_produk, :status_produk, CURRENT_TIMESTAMP())");
        
        $this->db->bind(':photo_produk', $photo_produk);
        $this->db->bind(':title_produk', $title_produk);
        $this->db->bind(':rating_produk', $rating_produk);
        $this->db->bind(':kota_produk', $kota_produk);
        $this->db->bind(':harga_produk', $harga_produk);
        $this->db->bind(':slug_produk', $slug_produk);
        $this->db->bind(':deskripsi_produk', $deskripsi_produk);
        $this->db->bind(':status_produk', $status_produk);
    
        return $this->db->execute();
    }

    public function checkTitleExistence($title_produk) {
        $this->db->query("SELECT COUNT(*) as total FROM produk WHERE title_produk = :title_produk");
        $this->db->bind(':title_produk', $title_produk);
        $result = $this->db->single();
        return $result['total'] > 0;
    }

    public function getProdukById($id) {
        $this->db->query("SELECT * FROM produk WHERE id_produk = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function checkUpdateTitleExistence($title_produk, $id_produk = null) {
        if ($id_produk) {
            $this->db->query("SELECT COUNT(*) AS count FROM produk WHERE title_produk = :title_produk AND id_produk != :id_produk");
            $this->db->bind(':title_produk', $title_produk);
            $this->db->bind(':id_produk', $id_produk);
        } else {
            $this->db->query("SELECT COUNT(*) AS count FROM produk WHERE title_produk = :title_produk");
            $this->db->bind(':title_produk', $title_produk);
        }
        $this->db->execute();
        $result = $this->db->single();
        return $result['count'] > 0;
    }

    public function updateProduk($id_produk, $photo_produk, $title_produk, $rating_produk, $kota_produk, $harga_produk, $slug_produk, $deskripsi_produk, $status_produk) {
        $this->db->query("UPDATE produk SET 
            photo_produk = :photo_produk,
            title_produk = :title_produk,
            rating_produk = :rating_produk,
            kota_produk = :kota_produk,
            harga_produk = :harga_produk,
            slug_produk = :slug_produk,
            deskripsi_produk = :deskripsi_produk,
            status_produk = :status_produk,
            timestamp = CURRENT_TIMESTAMP()
            WHERE id_produk = :id_produk");
    
        $this->db->bind(':id_produk', $id_produk);
        $this->db->bind(':photo_produk', $photo_produk);
        $this->db->bind(':title_produk', $title_produk);
        $this->db->bind(':rating_produk', $rating_produk);
        $this->db->bind(':kota_produk', $kota_produk);
        $this->db->bind(':harga_produk', $harga_produk);
        $this->db->bind(':slug_produk', $slug_produk);
        $this->db->bind(':deskripsi_produk', $deskripsi_produk);
        $this->db->bind(':status_produk', $status_produk);
    
        return $this->db->execute();
    }

    public function deleteProdukById($id) {
        // Ambil informasi produk berdasarkan ID
        $produk = $this->getProdukById($id);
    
        // Hapus file gambar dari direktori jika ada
        $imagePath = "../public/assets/img/eksternal/produk/" . $produk['photo_produk'];
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    
        // Hapus data banner dari database
        $this->db->query("DELETE FROM produk WHERE id_produk = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
}