<?php
//$username = "root";
//$password = "";
//$dbname = "smarttrolley";
//$servername = "localhost";


$username = "dcgNbHB57Z";
$password = "TSpAmk2kf6";
$dbname = "dcgNbHB57Z";
$servername = "remotemysql.com";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
