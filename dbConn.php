<?php
//$username = "root";
//$password = "";
//$dbname = "smarttrolley";
//$servername = "localhost";


$username = "pc9gdJUd4g";
$password = "iHlzW9PAfa";
$dbname = "pc9gdJUd4g";
$servername = "remotemysql.com";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
