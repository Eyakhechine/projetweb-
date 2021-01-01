<?php
include('database.php');
$id=$_GET['id'];
$mysqli->query("delete from productss where id=$id");
unlink("../../back/assets/profile_images/".$id.".jpg");
header('location:../views/index.php');
?>