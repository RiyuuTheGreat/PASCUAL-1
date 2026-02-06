<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn){
    die("Connection faield:".mysqli_connect_error());
}else {
    echo "connection successfully";
}
?>