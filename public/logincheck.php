<?php

if (!$conn = @mysqli_connect("172.17.0.2", "root" ,"admin", "ps3")){
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$res= $conn->query("select * from booking");
echo "booking\n";
for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();
    echo " btime = " . $row['btime'] . "quantity=" . $row['quantity']. "</br>";
}

echo "choose one restaurant:". "</br>";
?>

<form method="POST" action="success.php">
<table>
  <tr>
  <td>restaurant name:</td> 
    <td><input type="text" size="10" name="restaurant"></td>
  </tr>
</table>
<input type="submit" value="book">
</form>
