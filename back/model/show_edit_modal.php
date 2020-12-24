
<!-- Edit Model -->

<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" 
role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" 
aria-hidden="true">&times;</button>
<center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
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
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">brand:</label>
</div>
<div class="col-lg-8">
<input type="text" name="brand" class="form-control" 
value="<?php echo $erow['brand']; ?>">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">category:</label>
</div>
<div class="col-lg-8" align="left">
<select name="category">
<?php if ($erow['category']=="normal") {?>
<option selected>normal</option>
<option>got customized</option>
<?php }else{ ?>
<option>normal</option>
<option selected>got customized</option>
<?php }?>
</select>
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">price:</label>
</div>
<div class="col-lg-8">
<input type="text" name="price" class="form-control" 
value="<?php echo $erow['price']; ?>">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label class="control-label" style="position:relative; top:7px;">description:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="description" 
value="<?php echo $erow['description']; ?>">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label class="control-label" style="position:relative; top:7px;">name:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" 
name="name" value="<?php echo $erow['name']; ?>">
</div>
</div>
 
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label class="control-label" style="position:relative; top:7px;">Product Image:
</label>
</div>
 
<div class="col-lg-8">
 
<input type="file" class="filestyle" name="pimage" />
 
</div>
 
</div>
 
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span> Cancel</button>
<button type="submit" class="btn btn-warning">
<span class="glyphicon glyphicon-check"></span> Save</button>
</div>
</form>
</div>
</div>
</div>
<!-- /.modal -->