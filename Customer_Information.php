<?php

include "dbConn.php";
$name = $_POST["Name"];
$mobno = $_POST["phone-number"];
$emailid = $_POST["email-id"];


$sql2 = "INSERT INTO customer_information1('NAME', 'EMAILID', 'PHONENO') VALUES ('" . $name . "', '" . $emailid . "', '" . $mobno . "')";
//$edit = mysqli_query($conn,"INSERT INTO customer_information1(NAME, EMAIL ID, PHONENO) VALUES ('" . $name . "', '" . $emailid . "', '" . $mobno . "')");

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


//if($edit)
//{
//    mysqli_close($conn); // Close connection
//    header("location:cart.php"); // redirects to all records page
//    exit;
//}
/*else
{
    echo mysqli_error();
}
*/


?>
