<?php
//         $servername = "localhost";
//         $username = "root";
//         $password = "";
//         $database = 'myshop';


//         try {
//             $dsn = "mysql:host=$servername;dbname=$database;charset=utf8mb4";
//            $conn = new PDO($dsn, $username, $password);

//         $sqlQueries = [
//             "INSERT INTO products (name, description, price, image) VALUES
// ('Laptop', 'High-performance laptop for professional use.', 1299.99, 'laptop.jpg'),
// ('Office Chair', 'Ergonomic office chair for comfortable work.', 249.50, 'chair.jpg'),
// ('Wireless Mouse', 'Comfortable and precise wireless mouse.', 25.00, 'mouse.jpg'),
// ('Monitor', 'High-resolution monitor for better display.', 399.99, 'monitor.jpg'),
// ('Keyboard', 'Mechanical keyboard for a better typing experience.', 99.99, 'keyboard.jpg'),
// ('Coffee Maker', 'Automatic coffee maker with various settings.', 79.99, 'coffee_maker.jpg'),
// ('Notebook', 'Premium notebook for writing and journaling.', 14.99, 'notebook.jpg'),
// ('Desk Lamp', 'LED desk lamp with adjustable brightness.', 34.50, 'desk_lamp.jpg'),
// ('Backpack', 'Durable backpack with padded compartments.', 59.99, 'backpack.jpg'),
// ('Water Bottle', 'Reusable water bottle to keep hydrated.', 12.00, 'water_bottle.jpg');"
//         ];

//             foreach($sqlQueries as $query){
//                  $conn->exec($query);
//             }

//             $conn = null;
//         } catch (PDOException $e) {
//             echo "Error: " . $e->getMessage();
//         }


//         -- Inserting 10 sample products into the 'products' table
// INSERT INTO products (name, description, price, image) VALUES
// ('Laptop', 'High-performance laptop for professional use.', 1299.99, 'laptop.jpg'),
// ('Office Chair', 'Ergonomic office chair for comfortable work.', 249.50, 'chair.jpg'),
// ('Wireless Mouse', 'Comfortable and precise wireless mouse.', 25.00, 'mouse.jpg'),
// ('Monitor', 'High-resolution monitor for better display.', 399.99, 'monitor.jpg'),
// ('Keyboard', 'Mechanical keyboard for a better typing experience.', 99.99, 'keyboard.jpg'),
// ('Coffee Maker', 'Automatic coffee maker with various settings.', 79.99, 'coffee_maker.jpg'),
// ('Notebook', 'Premium notebook for writing and journaling.', 14.99, 'notebook.jpg'),
// ('Desk Lamp', 'LED desk lamp with adjustable brightness.', 34.50, 'desk_lamp.jpg'),
// ('Backpack', 'Durable backpack with padded compartments.', 59.99, 'backpack.jpg'),
// ('Water Bottle', 'Reusable water bottle to keep hydrated.', 12.00, 'water_bottle.jpg');