<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $pass = "";
    private $db = "myshop";
    public $pdo;
    public function __construct() {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->db;";
            $this->pdo = new PDO($dsn, $this->username, $this->pass);
        } catch (PDOException $e) {
            die("db connection error ==>  " . $e->getMessage());
        }
    }
    public function getPDO() {
        return $this->pdo;
    }
    
}
?>