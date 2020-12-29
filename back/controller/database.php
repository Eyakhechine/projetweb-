<?php
//Create database connection
$mysqli = mysqli_connect("localhost","root","","1projetweb");

if (!$mysqli) {

die("Connection error: " . mysqli_connect_error());

}
?>