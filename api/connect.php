<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting";

$conn = new mysqli($servername, $username, $password);


$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL AUTO_INCREMENT,
    name TEXT NOT NULL,
    mobile INT(10) NOT NULL,
    password TEXT NOT NULL,
    address TEXT NOT NULL,
    photo INT NOT NULL,
    role INT(1) NOT NULL,
    status INT(1) NOT NULL,
    votes INT NOT NULL,
    PRIMARY KEY (id)
) ENGINE = InnoDB";
if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>