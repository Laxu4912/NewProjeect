<?php
$localhost = "localhost";
$username= "root";
$password= "";
$dbname="crod";

$connection = mysqli_connect($localhost, $username, $password, $dbname);
if($connection){
    echo "connected";
}
?>