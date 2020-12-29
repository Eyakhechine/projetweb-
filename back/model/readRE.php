<?php
 include 'headerr.php';
 

 if(isset($_GET['id'])){
  $returns_info=$returns_obj->view_returns_by_returns_id($_GET['id']);
  


     
 }else{
  header('Location: ../views/indexRE.php');
 }
 
 
 ?>
<div class="container " > 
    
  <div class="row content">

       
          
           
             <a  href="../views/indexRE.php"  class="button button-blue mt-12 pull-right">View returns List</a> 
     
 <h3>View return Info</h3>
       
    
     <hr/>
   
   
 
      
    <label >Name:</label>
   <?php  if(isset($returns_info['us_name'])){echo $returns_info['us_name']; }?>

<br/>
    <label>Email address:</label>
  <?php  if(isset($returns_info['email_address'])){echo $returns_info['email_address'];} ?>
    
    <br/>
    <label >reason:</label>
      <?php  if(isset($returns_info['reason'])){echo $returns_info['reason'];} ?>
    <br/>

  <label >type:</label>
   <?php  if(isset($returns_info['typee'])){echo $returns_info['typee'];} ?>
  <br/>
    <label >address:</label>
      <?php  if(isset($returns_info['adress'])){echo $returns_info['adress'];} ?>
    <br/>

          

   

   
  
     
   
  </div>
     
</div>
<hr/>
 <?php
 include 'footer.php';
 ?>

