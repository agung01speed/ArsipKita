<?php

require_once '../app/core/database.php';

class user{
    private $db;

    public function __construct(){
        $this->db = new database();
    }

    public function all(){
        $query = $this->db->conn->query("SELECT * FROM users");
        return $query->fetch_all(MYSQLI_ASSOC);
    }
}