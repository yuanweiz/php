<?php
function getconn(){
    if (!$conn = @mysqli_connect("172.17.0.3", "root" ,"admin", "ps3")){
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    }
    return $conn;
}
?>
