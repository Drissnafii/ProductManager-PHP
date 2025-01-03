<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$database = 'myshop';


try {
    $dsn = "mysql:host=$servername;charset=utf8mb4";
    $conn = new PDO($dsn, $username, $password);

    $sqlQueries = [
    "CREATE DATABASE IF NOT EXISTS `$database`;",
    "USE `$database`;",
    "CREATE TABLE IF NOT EXISTS `users` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `username` VARCHAR(255) NOT NULL UNIQUE,
        `email` VARCHAR(255) NOT NULL UNIQUE,
        `password` VARCHAR(255) NOT NULL,
        `is_admin` BOOLEAN DEFAULT FALSE,
        `is_active` BOOLEAN DEFAULT TRUE,
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );",

    "CREATE TABLE IF NOT EXISTS `products` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `name` VARCHAR(255) NOT NULL,
        `description` TEXT,
        `price` DECIMAL(10, 2) NOT NULL,
        `image` VARCHAR(255),
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );",

    "CREATE TABLE IF NOT EXISTS `orders` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `user_id` INT NOT NULL,
        `order_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        `total_amount` DECIMAL(10, 2) NOT NULL,
        FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
        );",

    "CREATE TABLE IF NOT EXISTS `order_items` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `order_id` INT NOT NULL,
        `product_id` INT NOT NULL,
        `quantity` INT NOT NULL,
        `price` DECIMAL(10, 2) NOT NULL,
        FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`),
        FOREIGN KEY (`product_id`) REFERENCES `products`(`id`)
        );",
];


    foreach($sqlQueries as $query){
        $conn->exec($query);
    }
    // echo "Queries are executed successfully<br/>";

    $conn = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>