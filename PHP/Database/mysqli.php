<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($severname,$username,$password,$dbname);

if ($conn -> connect_error){
    die("Connection faield:".$conn -> connect_error);
}else {
    echo "connection successfully";
}
?>