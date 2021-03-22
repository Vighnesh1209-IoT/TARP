<?php

//Server details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smarttrolley";

$key = "77289";
$api_key_value = "dd";

//Getting value form Nodemcu
$api_key = $RFID_ID = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $api_key = test_input($_POST["api_key"]);
  if($api_key == $api_key_value){
    $RFID_ID = test_input($_POST["RFIDtag"]);
  }
}

//database Connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//fetching data from default_products for one specific RFIDtag
$sql = "SELECT RFID, NAME, TYPE, PRICE FROM default_products WHERE RFID = $key";

if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $sensor = $row["RFID"];
        $location = $row["NAME"];
        $value1 = $row["TYPE"];
        $value2 = $row["PRICE"];

        //send the fetched data to coustumer product
        $query1 = "SELECT * FROM coustumer_products WHERE RFID = '$key'";
        $result1 = mysql_query($query);
        if ($result1) {
          if (mysql_num_rows($result1) > 0) {
            echo 'found!';
          } else {
            echo 'not found';
          }
        } else {
          echo 'Error: '.mysql_error();
        }
      }
    $result->free();

}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$conn->close();
?>
