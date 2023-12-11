<?php
// Assuming $conn is your database connection object

// SQL to create the database
$createDatabaseSql = "CREATE DATABASE IF NOT EXISTS $dbname";

if ($conn->query($createDatabaseSql) === FALSE) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Select the database
    $conn->select_db($dbname);
}

// SQL to create the users table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    middlename VARCHAR(50),
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'cashier', 'scholar') NOT NULL
)";

if ($conn->query($sql) === FALSE) {
    echo "Error creating table 'users': " . $conn->error;
}

// $conn->close();
