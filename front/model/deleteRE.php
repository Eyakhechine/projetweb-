<?php
 include 'headerr.php';
 if(isset($_GET['id'])){
  $returns_info=$returns_obj->delete_returns_info_by_id($_GET['id']);
 
     
 }else{
  header('Location: ../views/indexRE.php');
 }
 
 ?>
