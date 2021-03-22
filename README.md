# TARP
$api_key = $RFID_ID = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $api_key = test_input($_POST["api_key"]);
  if($api_key == $api_key_value){
    $RFID_ID = test_input($_POST["RFIDtag"]);
  }
}
if ($count>=1)
{
    echo "User Already in Exists<br/>";
}
else
{
    $newUser="INSERT INTO coustumer_products(RFID,NAME,TYPE,PRICE) values('$sensor','$location','$value1','$value2')";
    if (mysqli_query($conn,$newUser))
    {
        echo "You are now registered<br/>";
    }
    else
    {
        echo "Error adding user in database<br/>";
    }
}

}


Work:
    Delete
    QUANTITY
    FINAL_AMOUNT
    html
