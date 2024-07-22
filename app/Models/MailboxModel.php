<?php
// app/Models/MailboxModel.php

namespace ECommerce\Shoping\Models;

use ECommerce\Shoping\App\Database;

class MailboxModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getTotalMailbox() {
        $this->db->query("SELECT * FROM mailbox");
        $data['mailbox'] = $this->db->resultSet();

        return $data;
    }

    public function getStatusMailbox() {
        $this->db->query("SELECT COUNT(*) AS unread_count FROM mailbox WHERE status_mail = 'unread'");
        $data = $this->db->single();
        return $data;
    }

    // Karir Mailbox
    public function insertMailKarir($tipe_mail, $email_mail, $subjek_mail, $nama_mail, $nomor_mail, $posisi_mail) {
        $this->db->query("INSERT INTO mailbox 
        (id_mail, tipe_mail, email_mail, subjek_mail, nama_mail, nomor_mail, posisi_mail, status_mail, timestamp) 
        VALUES 
        (NULL, :tipe_mail, :email_mail, :subjek_mail, :nama_mail, :nomor_mail, :posisi_mail, 'unread', CURRENT_TIMESTAMP())");
        $this->db->bind(':tipe_mail', $tipe_mail);
        $this->db->bind(':email_mail', $email_mail);
        $this->db->bind(':subjek_mail', $subjek_mail);
        $this->db->bind(':nama_mail', $nama_mail);
        $this->db->bind(':nomor_mail', $nomor_mail);
        $this->db->bind(':posisi_mail', $posisi_mail);
        return $this->db->execute();
    }

    // Kerja-sama Mailbox
    public function insertMailKerjaSama($tipe_mail, $email_mail, $subjek_mail, $nama_mail, $nomor_mail, $pesan_mail) {
        $this->db->query("INSERT INTO mailbox 
        (id_mail, tipe_mail, email_mail, subjek_mail, nama_mail, nomor_mail, pesan_mail, status_mail, timestamp) 
        VALUES 
        (NULL, :tipe_mail, :email_mail, :subjek_mail, :nama_mail, :nomor_mail, :pesan_mail, 'unread', CURRENT_TIMESTAMP())");
        $this->db->bind(':tipe_mail', $tipe_mail);
        $this->db->bind(':email_mail', $email_mail);
        $this->db->bind(':subjek_mail', $subjek_mail);
        $this->db->bind(':nama_mail', $nama_mail);
        $this->db->bind(':nomor_mail', $nomor_mail);
        $this->db->bind(':pesan_mail', $pesan_mail);
        return $this->db->execute();
    }

    // read status
    public function updateMailStatus($id) {
        $this->db->query("UPDATE mailbox SET status_mail = 'read' WHERE id_mail = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }   

    // Delete Mailbox
    public function deleteMailById($id) {
        $this->db->query("DELETE FROM mailbox WHERE id_mail = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
}