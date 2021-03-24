<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

if(isset($_POST['Confirm'])){
$del = mysqli_query($conn,"delete from customer_products where RFID = '$id'"); // delete query
if($del)
{
    mysqli_close($conn); // Close connection
    header("location:cart.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
}
elseif (isset($_POST['Goback'])) {
  header("location:cart.php"); // redirects to all records page
  exit;
}
?>
<form method="POST">
             <input type="submit" name="Confirm" value="Confirm">
             <input type="submit" name="Goback" value="Back">
</form>
