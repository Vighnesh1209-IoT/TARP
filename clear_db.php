<?php

include "dbConn.php";

if(isset($_POST['Submit'])) // when click on Update button
{
    $UID = $_POST['userID'];
    $PID = $_POST['password'];
    if(($_POST['userID'] == "Admin") && ($_POST['password'] == "1234")){
    $trun = mysqli_query($conn,'TRUNCATE TABLE customer_products');

    if($trun)
    {
        mysqli_close($conn); // Close connection
        header("location:cart.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }

  }
  else {
    echo "Incorrect Username or Password! ";
  }
}

?>

<form  method="POST">
    Name: <input type="text" name="userID" /> <br>
    Pass: <input type="text" name="password" /> <br>
    <input type="submit" name="Submit" value="Submit">
</form>
