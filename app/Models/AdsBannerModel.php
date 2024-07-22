<?php
// app/Models/AdsBannerModel.php

namespace ECommerce\Shoping\Models;

use ECommerce\Shoping\App\Database;

class AdsBannerModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getTotalBanner() {
        // Query untuk mengambil data Banner
        $this->db->query("SELECT * FROM ads_banner");
        $data['ads_banner'] = $this->db->resultSet();

        return $data;
    }

    public function getStatusMailbox() {
        $this->db->query("SELECT COUNT(*) AS unread_count FROM mailbox WHERE status_mail = 'unread'");
        $data = $this->db->single();
        return $data;
    }

    // Mengecek apakah posisi banner sudah terisi
    public function isPositionTaken($posisi) {
        $this->db->query("SELECT COUNT(*) as total FROM ads_banner WHERE posisi_banner = :posisi");
        $this->db->bind(':posisi', $posisi);
        $data = $this->db->single();
        return $data['total'] > 0;
    }

    // Menyimpan banner iklan baru
    public function saveBanner($nama, $link, $imagePath, $posisi, $expired) {
        $this->db->query("INSERT INTO ads_banner (nama_banner, link_banner, image_banner, posisi_banner, expired_banner) VALUES (:nama, :link, :image, :posisi, :expired)");
        $this->db->bind(':nama', $nama);
        $this->db->bind(':link', $link);
        $this->db->bind(':image', $imagePath);
        $this->db->bind(':posisi', $posisi);
        $this->db->bind(':expired', $expired);
        return $this->db->execute();
    }

    public function getBannerById($id) {
        $this->db->query("SELECT * FROM ads_banner WHERE id_banner = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function deleteBannerById($id) {
        // Ambil informasi banner berdasarkan ID
        $banner = $this->getBannerById($id);
    
        // Hapus file gambar dari direktori jika ada
        $imagePath = "../public/assets/img/eksternal/banner-ads/" . $banner['image_banner'];
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    
        // Hapus data banner dari database
        $this->db->query("DELETE FROM ads_banner WHERE id_banner = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }

    public function updateBanner($id, $nama, $link, $image, $expired) {
        $this->db->query("UPDATE ads_banner SET nama_banner = :nama, link_banner = :link, image_banner = :image, expired_banner = :expired WHERE id_banner = :id");
        $this->db->bind(':id', $id);
        $this->db->bind(':nama', $nama);
        $this->db->bind(':link', $link);
        $this->db->bind(':image', $image);
        $this->db->bind(':expired', $expired);
        $this->db->execute();
    }
}