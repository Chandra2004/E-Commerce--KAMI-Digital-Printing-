<?php
// app/Models/UserModel.php

namespace ECommerce\Shoping\Models;

use ECommerce\Shoping\App\Database;
use \PDOException;

class UserModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getTotalUser() {
        $this->db->query("SELECT * FROM users");
        $data['users'] = $this->db->resultSet();
        return $data;
    }

    public function register($username, $email, $password, $role) {
        try {
            // Query untuk memeriksa apakah email sudah terdaftar
            $this->db->query("SELECT * FROM users WHERE email_user = :email");
            $this->db->bind(':email', $email);
            $result_email = $this->db->single();
            
            // Periksa jika email sudah terdaftar
            if ($result_email) {
                header('Location: ' . BASE_URL . '/dashboard/user?status-email=failed');
                return false;
            }
    
            // Query untuk memeriksa apakah username sudah terdaftar
            $this->db->query("SELECT * FROM users WHERE username_user = :username");
            $this->db->bind(':username', $username);
            $result_username = $this->db->single();
    
            // Periksa jika username sudah terdaftar
            if ($result_username) {
                header('Location: ' . BASE_URL . '/dashboard/user?status-username=failed');
                return false;
            }
            
            // Query untuk insert user baru
            $this->db->query("INSERT INTO users (role_user, username_user, email_user, password_user) VALUES (:role, :username, :email, :password)");
            $this->db->bind(':role', $role);
            $this->db->bind(':username', $username);
            $this->db->bind(':email', $email);
            
            // Lakukan hash terhadap password sebelum disimpan
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $this->db->bind(':password', $hashed_password);
            
            // Eksekusi query untuk registrasi user baru
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    // Login
    public function getUserByIdentifier($identifier) {
        $this->db->query("SELECT * FROM users WHERE username_user = :identifier OR email_user = :identifier LIMIT 1");
        $this->db->bind(':identifier', $identifier);
        return $this->db->single();
    }
}