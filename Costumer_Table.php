<?php
include 'C:\xampp\htdocs\TARP\TARP\fetch_data.php';
$total = 0;
$final_amount = 0;
$sql = "SELECT RFID, NAME, TYPE, QUANTITY, PRICE, FINAL_AMOUNT FROM customer_products";
?>
<table align="center" border = "2" cellspacing="5" cellpadding="5">
      <tr>
        <td>RFID</td>
        <td>NAME</td>
        <td>TYPE</td>
        <td>QUANTITY</td>
        <td>PRICE</td>
        <td>FINAL_AMOUNT</td>
        <td>EDIT</td>
        <td>DELETE</td>
      </tr>
<?php
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
      $total = $row["QUANTITY"]*$row['PRICE'];
?>
        <tr>
          <td><?php echo $row["RFID"]?></td>
          <td><?php echo $row["NAME"]?></td>
          <td><?php echo $row["TYPE"]?></td>
          <td><?php echo $row["QUANTITY"]?></td>
          <td><?php echo $row["PRICE"]?></td>
          <td><?php echo "$total" ?></td>
          <td><a href="edit.php?id=<?php echo $row['RFID']; ?>">Edit</a></td>
          <td><a href="delete.php?id=<?php echo $row['RFID']; ?>">Delete</a>
        </tr>
<?php
  $final_amount = $final_amount + $total;
    }
    $result->free();
}
?>
        <tr>
          <td><?php echo ""?></td>
          <td><?php echo ""?></td>
          <td><?php echo ""?></td>
          <td><?php echo ""?></td>
          <td><?php echo "TOTAL AMOUNT"?></td>
          <td><?php echo "$final_amount"?></td>
          <td><?php echo ""?></td>
          <td><?php echo ""?></td>
