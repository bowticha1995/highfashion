<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentdb";
require_once('/vendor/autoload.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$config = Factiry::fromFile('/vendor/zendframework/zend-config')
?>