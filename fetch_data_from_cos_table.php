<?php
include 'C:\xampp\htdocs\TARP\TARP\fetch_data_from_ESP.php';
//if ($conn1->connect_error) {
//    die("Connection failed: " . $conn1->connect_error);
//}
$sql = "SELECT RFID, NAME, TYPE, QUANTITY, PRICE, FINAL_AMOUNT FROM customer_products";
echo '<table class="center" border ="1" cellspacing="5" cellpadding="5">
      <tr>
        <td>RFID</td>
        <td>NAME</td>
        <td>TYPE</td>
        <td>QUANTITY</td>
        <td>PRICE</td>
        <td>FINAL_AMOUNT</td>
        <td>Operation</td>
      </tr>';

if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $row_rfid = $row["RFID"];
        $row_name = $row["NAME"];
        $row_type = $row["TYPE"];
        $row_quantity = $row["QUANTITY"];
        $row_price = $row["PRICE"];
        $row_final_price = $row["FINAL_AMOUNT"];

        echo '<tr>
                <td>' . $row_rfid . '</td>
                <td>' . $row_name . '</td>
                <td>' . $row_type . '</td>
                <td>' . $row_quantity . '</td>
                <td>' . $row_price . '</td>
                <td>' . $row_final_price . '</td>
              </tr>';

    }
    $result->free();
}

 ?>
