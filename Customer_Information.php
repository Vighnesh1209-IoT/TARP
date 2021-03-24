<?php

include "dbConn.php";
$name = $_POST["name"];
$emailid = $_POST["EmailID"];
$mobno = $_POST["PhoneNo"];
$address = $_POST["Address"];
$gender = $_POST["Gender"];


$sql2 = "INSERT INTO customer_information1(NAME, EMAILID, PHONENO, ADDRESS , GENDER) VALUES ('" . $name . "', '" . $emailid . "', '" . $mobno . "', '" . $address . "','" .$gender ."')";
if ($conn->query($sql2) === TRUE)
{
    echo "New record created successfully";
    mysqli_close($conn); // Close connection
    header("location:cart.php"); // redirects to all records page
    exit;

  }
   else {
      echo "Error: " . $sql2 . "<br>" . $conn->error;
      }

?>
