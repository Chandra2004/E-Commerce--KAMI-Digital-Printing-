<?php
// app/Models/MilestoneModel.php

namespace ECommerce\Shoping\Models;

use ECommerce\Shoping\App\Database;

class MilestoneModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getTotalMilestone() {
        // Query untuk mengambil data 
        $this->db->query("SELECT * FROM milestone ORDER BY timestamp DESC");
        $data['milestone'] = $this->db->resultSet();
        return $data;
    }

    public function getStatusMailbox() {
        $this->db->query("SELECT COUNT(*) AS unread_count FROM mailbox WHERE status_mail = 'unread'");
        $data = $this->db->single();
        return $data;
    }

    // insert Milestone
    public function insertMilestone( $name_milestone, $date_mailstone, $description_milestone) {
        $this->db->query("INSERT INTO milestone 
        (id, name_milestone, date_milestone, description_milestone, timestamp) 
        VALUES 
        (NULL, :name_milestone, :date_milestone, :description_milestone, CURRENT_TIMESTAMP())");
        $this->db->bind(':name_milestone', $name_milestone);
        $this->db->bind(':date_milestone', $date_mailstone);
        $this->db->bind(':description_milestone', $description_milestone);
        return $this->db->execute();
    }

    // update milestone
    public function updateMilestone($id_upMilestone, $name_upMilestone, $date_upMilestone, $description_upMilestone) {
        $this->db->query("UPDATE milestone SET 
            name_milestone = :name_milestone, 
            date_milestone = :date_milestone, 
            description_milestone = :description_milestone, 
            timestamp = CURRENT_TIMESTAMP()
            WHERE id = :id");
        $this->db->bind(':id', $id_upMilestone);
        $this->db->bind(':name_milestone', $name_upMilestone);
        $this->db->bind(':date_milestone', $date_upMilestone);
        $this->db->bind(':description_milestone', $description_upMilestone);
        return $this->db->execute();
    }

    // Delete milestone
    public function deleteMilestoneById($id) {
        $this->db->query("DELETE FROM milestone WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
}