<!-- Detail Model -->
<div class="modal fade" id="detail<?php echo $row['id']; ?>" tabindex="-1" 
role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 
<div class="modal-dialog">

<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" 
aria-hidden="true">&times;</button>
<h3> Product Details </h3>
</div>
<div class="modal-body">
<?php
$edit=$mysqli->query("select * from productss where id=".$row['id']);
$erow=$edit->fetch_assoc();
?>




<div class="container-fluid">
<form method="POST" action="../controller/update.php?id=<?php echo $erow['id']; ?>" 
enctype="multipart/form-data">
 
<div class="row">
<div class="col-lg-12" align="center">
<?php $img = "http://localhost/php_crud/assets/profile_images/".$row['id']. ".jpg";?>
<img src='<?php echo $img ?>' height="150px" width="170px" />
 
</div>
 
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">brand:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['brand']; ?>
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">category:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['category']; ?>
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">price:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['price']; ?>
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label class="control-label" style="position:relative; top:7px;">description:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['description']; ?>
</div>
</div>
 
 
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label class="control-label" style="position:relative; top:7px;">name:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['name']; ?>
</div>
</div>
 
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"> 
Close</button>
 
</div>
</form>
</div>
</div>
</div>
<!-- /.modal -->
