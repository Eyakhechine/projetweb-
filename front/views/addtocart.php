
<?php
include('../controller/db.php');
$upload_dir = '../assets/uploads/';

$price =$_POST['prix'];
$idp =$_POST['pid'];
$qte =$_POST['qte'];
$categorie  =$_POST['categorie'];

$query  = "INSERT INTO `cart` VALUES (1,".$idp.",".$qte.",".$price.")";

$result =  mysqli_query($conn, $query);
if($result){
    echo "product has been added to cart";
    header("location:cart.php");
}else{
    echo "error";
}
?>