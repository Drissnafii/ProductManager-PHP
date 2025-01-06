<?php
require __DIR__ . '/Models/config/dbcreator.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // username, email, password, is_admin, is_active 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $is_admin = $_POST['is_admin'];
    $is_active = $_POST['is_active'];
    if (!empty($username) && !empty($email) && !empty($password)) {
        $stmt = $conn->prepare("INSERT INTO users (username, email, password, is_admin, is_active) 
        values(?, ?, ?, ?, ?) ");
        $stmt->bind_param('s', 's', 's', '?', '?');
        $stmt->exec();
        $stmt->close();
    }
}




