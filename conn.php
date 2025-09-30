<?php

$servername = "localhost";
$username = "princeaalyan_payment";
$password = "princeaalyan_payment";
$dbname = "princeaalyan_payment";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn) {

die(" PROBLEM WITH CONNECTION : " . mysqli_connect_error());

}
  
?>