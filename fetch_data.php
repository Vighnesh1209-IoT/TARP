<?php
$key = "782902";
$api_key_value = "dd";

//Getting value form Nodemcu
$api_key = $RFID_ID = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $api_key = test_input($_POST["api_key"]);
  if($api_key == $api_key_value){
    $RFID_ID = test_input($_POST["RFIDtag"]);

  }
}

include 'C:\xampp\htdocs\TARP\TARP\dbConn.php';

//fetching data from default_products for one specific RFIDtag
$sql = "SELECT RFID, NAME, TYPE, PRICE FROM default_products WHERE RFID = $key";

if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $sensor = $row["RFID"];
        $location = $row["NAME"];
        $value1 = $row["TYPE"];
        $value2 = $row["PRICE"];

        //send the fetched data to coustumer product(Check if its already present and then add)
        $query1 = "SELECT RFID FROM customer_products WHERE RFID = $key";
        $result1 = mysqli_query($conn,$query1);
        if ($result1) {
          if (mysqli_num_rows($result1) > 0) {
              $found = "found";
          } else {
              $found = "notfound";
            $sql2 = "INSERT INTO customer_products(RFID, NAME, TYPE, PRICE) VALUES ('" . $sensor . "', '" . $location . "', '" . $value1 . "', '" . $value2 . "')";
            if ($conn->query($sql2) === TRUE) {
                  echo "New record created successfully";
              }
              else {
                  echo "Error: " . $sql2 . "<br>" . $conn->error;
              }
          }
        } else {
          echo 'Error';
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
?>
