<?php
 include 'header.php';
 if(isset($_GET['id'])){
  $reviews_info=$reviews_obj->delete_review_info_by_id($_GET['id']);
 
     
 }else{
  header('Location:../../back/views/indexreview.php');
 }
 
 ?>
