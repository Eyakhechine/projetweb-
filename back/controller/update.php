<?php
include('database.php');
$id=$_GET['id'];
$brand=$_POST['brand'];
$category=$_POST['category'];
$price=$_POST['price'];
$description=$_POST['description'];
$name=$_POST['name'];
 
$mysqli->query("update productss set brand='$brand', category='$category', 
price='$price', description='$description', name='$name' where id=$id");
 
 
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
 
unlink(FILEREPOSITORY.$filename);
$result = move_uploaded_file($_FILES['pimage']['tmp_name'],
FILEREPOSITORY.$filename);
//$result = move_uploaded_file($_FILES['pimg']['tmp_name'],
"http://localhost/php_crud/assets/profile_images/28.jpg";
if ($result == 1) echo "<p>File successfully uploaded.</p>";
else echo "<p>There was a problem uploading the file.</p>";
}
}
 
header('location:../views/index.php');
 
?>