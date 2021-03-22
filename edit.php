<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($conn,"select QUANTITY,PRICE from customer_products where RFID='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data


if(isset($_POST['update'])) // when click on Update button
{
    $qyt = $_POST['quantity'];
    $edit = mysqli_query($conn,"update customer_products set QUANTITY='$qyt' where RFID='$id'");

    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:display.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="quantity" placeholder="Enter Number of Quantity" Required>
  <input type="submit" name="update" value="Update">
</form>
