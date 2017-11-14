<?php
session_start();
require 'db.php';
$customerName=$_POST['customerName'];
$quantity=$_SESSION["quantity"];
$datetime=$_SESSION["datetime"];
#$conn=$_SESSION["conn"];
$conn=getconn();
$rid=$_POST["rid"];
$previousBookingSql="select cname,btime,rname,quantity from customer natural join booking natural join restaurant where cname=\"$customerName\"";
echo "sql string=$previousBookingSql </br>";
echo "previous booking record </br>";
$insertSql="insert into booking (cid,rid,btime,quantity) " # values ( $customerName,$rid, $datetime,$quantity)";
    ."select cid ,$rid, \"$datetime\", $quantity from customer where cname=\"$customerName\"";
echo "$insertSql </br>";
$res=$conn->query($previousBookingSql);
echo "$customerName's previous booking records</br>";
for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();
    echo "cname=".$row['cname']. "|rname=".$row['rname'] . "|btime = " . $row['btime'] . "|quantity=" . $row['quantity']. "</br>";
}
if ($conn->query($insertSql) == TRUE){
    echo "new record inserted successfully</br>";
}
session_unset();
session_destroy();

?>

<a href="index.php"><button>Back</button></a>
