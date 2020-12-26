<?php
 include 'header.php';
 

 if(isset($_GET['id'])){
  $reviews_info=$reviews_obj->view_review_by_review_id($_GET['id']);
  


     
 }else{
  header('Location:../../back/views/indexreview.php');
 }
 
 
 ?>
<div class="container " > 
    
  <div class="row content">

       
           
             <a  href="../views/indexreview.php"  class="button button-blue mt-12 pull-right">View reviews List</a> 
     
 <h3>View reviews Info</h3>
       
    
     <hr/>
   
      
    <label >Name:</label>
   <?php  if(isset($reviews_info['namec'])){echo $reviews_info['namec']; }?>

<br/>
    <label>Email address:</label>
  <?php  if(isset($reviews_info['email_address'])){echo $reviews_info['email_address'];} ?>
    
    <br/>
    <label >review:</label>
      <?php  if(isset($reviews_info['review'])){echo $reviews_info['review'];} ?>
    <br/>

   
  </div>
     
</div>
<hr/>
 <?php
 include 'footer.php';
 ?>

