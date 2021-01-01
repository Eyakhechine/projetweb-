<?php
include('database.php');
 
$brand=$_POST['brand'];
$category=$_POST['category'];
$price=$_POST['price'];
$description=$_POST['description'];
$name=$_POST['name'];
$mysqli->query("insert into productss (brand, category, price,description,name) 
values ('$brand', '$category', '$price','$description','$name')");
 
$res = $mysqli->query("select id from productss order by id desc");
$row = $res->fetch_row();
$id = $row[0];
 
// Set a constant
define ("FILEREPOSITORY","../assets/profile_images/");
 
// Make sure that the file was POSTed.
if (is_uploaded_file($_FILES['pimage']['tmp_name']))
{
// Was the file a JPEG?
if ($_FILES['pimage']['type'] != "image/jpeg") {
echo "<p>Profile image must be uploaded in JPEG format.</p>";
} else {
 
//$name = $_FILES['classnotes']['name'];
$filename=$id.".jpg";
 
$result = move_uploaded_file($_FILES['pimage']['tmp_name'],FILEREPOSITORY.$filename);
//$result = move_uploaded_file($_FILES['pimg']['tmp_name'],
"http://localhost/projetweb-/assets/profile_images/28.jpg";
if ($result == 1) echo "<p>File successfully uploaded.</p>";
else echo "<p>There was a problem uploading the file.</p>";
}
}
header('location:../views/index.php');
?>