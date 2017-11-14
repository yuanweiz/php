<?php
session_start();
#print_r($_SESSION);
require 'db.php';
$conn=getconn();
#$res= $conn->query("select * from booking");
#echo "booking\n";
#for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
#    $res->data_seek($row_no);
#    $row = $res->fetch_assoc();
#    echo " btime = " . $row['btime'] . "quantity=" . $row['quantity']. "</br>";
#}

$_SESSION["customerName"]=$customerName=$_POST['customerName'];
$_SESSION["quantity"]=$quantity=$_POST['quantity'];
$_SESSION["datetime"]=$datetime=$_POST['datetime'];
$_SESSION["conn"]=$conn;
$keyword=$_POST['keyword'];
$sql='';
$keyword_filter='';
if ($keyword!='') {
    $keyword_filter="(rname LIKE \"%$keyword%\" OR description LIKE \"%$keyword%\" )AND ";
}
$sql="select rid,rname,capacity-sum(quantity) as avail,btime ".
    " from restaurant natural join booking ".
    "where $keyword_filter btime=\"$datetime\" ".
    "group by rid having avail>$quantity";
echo "sql string=$sql"."</br>";
$res=$conn->query($sql);

if ($res->num_rows == 0 ){
    echo "No result found! </br>";
}

for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();
    echo "rid=".$row['rid']. "|rname=".$row['rname'] . "|btime = " . $row['btime'] . "|avail=" . $row['avail']. "</br>";
}

?>
<form method="POST" action="booking.php">
<table>
  <tr>
  <td>choose a restaurant rid:</td> 
    <td><input type="text" size="10" name="rid"></td>
  </tr>
  <tr>
  <td>customer name:</td> 
  <td><input type="text" size="10" name="customerName" value=<?php print $_SESSION["customerName"]?> ></td>
  </tr>
</table>
<!--
<input type="hidden" name="quantity" value="<?php print $_SESSION["quantity"]?>">
<input type="hidden" name="datetime" value="<?php print $_SESSION["datetime"]?>">
-->
<input type="submit" value="book">
</form>
