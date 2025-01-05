<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = 'myshop';


        try {
            $dsn = "mysql:host=$servername;dbname=$database;charset=utf8mb4";
           $conn = new PDO($dsn, $username, $password, $options);

        $sqlQueries = [
           "INSERT INTO users (username, email, password, is_admin, is_active) VALUES
            ('john_doe', 'john.doe@example.com', 'password123', FALSE, TRUE),
            ('jane_smith', 'jane.smith@example.com', 'securePass', FALSE, TRUE),
           ('admin_user', 'admin@example.com', 'adminPass', TRUE, TRUE),
            ('sarah_jones', 'sarah.jones@example.com', 'pass456', FALSE, TRUE),
            ('peter_pan', 'peter.pan@example.com', 'neverland', FALSE, FALSE),
            ('lisa_simpson', 'lisa.simpson@example.com', 'smartKid', FALSE, TRUE),
            ('bart_simpson', 'bart.simpson@example.com', 'eatMyShorts', FALSE, FALSE),
           ('maggie_simpson', 'maggie.simpson@example.com', 'pacifier', FALSE, TRUE),
            ('homer_simpson', 'homer.simpson@example.com', 'donuts', TRUE, TRUE),
            ('marge_simpson', 'marge.simpson@example.com', 'blueHair', FALSE, TRUE);"
        ];

            foreach($sqlQueries as $query){
                 $conn->exec($query);
            }

            $conn = null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }