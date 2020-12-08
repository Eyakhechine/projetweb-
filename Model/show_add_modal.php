<!-- Add New product-->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" 
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" 
aria-hidden="true">&times;</button>
<center><h4 class="modal-title" id="myModalLabel">Add New product </h4></center>
</div>
<div class="modal-body">
<div class="container-fluid">
<form method="POST" action="../controller/insert.php" class="form-horizontal" 
enctype="multipart/form-data" >
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">brand:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="brand">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">category:</label>
</div>
<div class="col-lg-8">
<select name="category">
<option>normal</option>
<option>got customized</option>
</select>
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">price:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="price">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">description:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="description">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">name:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="name">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Product Image:</label>
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

<button type="submit" class="btn btn-primary">
<span class="glyphicon glyphicon-floppy-disk"></span> Save</a>

</form>
</div>
</div>
</div>
</div>