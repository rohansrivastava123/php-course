<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'Rohan');
define('DB_PASS', 'rohanchocobar');
define('DB_NAME', 'php_dev');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

// echo 'Connected successfully';
