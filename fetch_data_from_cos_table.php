<?php
include 'C:\xampp\htdocs\TARP\TARP\fetch_data_from_ESP.php';
$conn1 = new mysqli($servername, $username, $password, $dbname);
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}

 ?>
