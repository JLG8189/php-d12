<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "php-d12";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            echo "connection failed: " . $e->getMessage();
        }
?>