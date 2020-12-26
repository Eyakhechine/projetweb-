<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> URBAND SPORT SHOP </title>
        <link href="../assets/css/styless.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

    <center>
<h2><span style="font-size:25px; color:blue">
PRODUCTS MANAGEMENT </span>
</h2></center>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">U2S administration</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            
                       
                           
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               PRODUCTS
                            </a>
                            <a class="nav-link" href="indexcat.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               CATEGORIES
                            </a>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                             CUSTOMERS
                            </a>
                            <a class="nav-link" href="indexreview.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            PRODUCTS REVIEW
                            </a>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            SHOPPING CART
                            </a>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            RETURNS&EXCHANGES
                            </a>
                            
                        </div>
                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"> PRODUCTS MANAGEMENT </h1>
                      
                        
                        <div class="card mb-4">
<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
	
</form>






<?php

$con = new PDO("mysql:host=localhost;dbname=crudphp",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `productss` WHERE name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>name</th>
				<th>category</th>
                <th>brand</th>
                <th>price</th>
                <th>Description</th>
			</tr>
			<tr>
				<td><?php echo $row->name; ?></td>
                <td><?php echo $row->category; ?></td>
                <td><?php echo $row->brand; ?></td>
                <td><?php echo $row->price; ?></td>
				<td><?php echo $row->description;?></td>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>














                             <div class="container">
<br/><br/>
<div class="row header col-sm-12" style="text-align:center;color:blue">
<span class="pull-left">
<a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm">
<span class="glyphicon glyphicon-plus"></span> Add New
</a></span>

<div style="height:50px;"></div>
<table class="table table-striped table-bordered table-responsive table-hover" 
id="empTable" >
<thead>
<th><center>Picture</center></th>
<th><center>category</center></th>
<th><center>brand</center></th>
<th><center>price</center></th>
<th><center>description</center></th>
<th><center>name</center></th>
<th><center>Action</center></th>
</thead>
<tbody>
<?php
include('../controller/database.php');
$result=$mysqli->query("select * from productss ");
while($row=$result->fetch_assoc()){
$img = "http://localhost/php_crud/back/assets/profile_images/".$row['id']. ".jpg";
?>
<tr>
<td> <img src='<?php echo $img ?>' height="50px" width="70px" /></td>
<td><?php echo $row['category']; ?></td>
<td><?php echo $row['brand']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['name']; ?></td>
<td>
<a href="#detail<?php echo $row['id']; ?>" 
data-toggle="modal" class="btn btn-success btn-sm">
<span class="glyphicon glyphicon-floppy-open">
</span>Detail</a>&nbsp;

<a href="#edit<?php echo $row['id']; ?>" 
data-toggle="modal" class="btn btn-warning btn-sm">
<span class="glyphicon glyphicon-edit">
</span> Edit</a>&nbsp;

<a href="#del<?php echo $row['id']; ?>" 
data-toggle="modal" class="btn btn-danger btn-sm">
<span class="glyphicon glyphicon-trash">
</span> Delete</a>

<!-- include edit modal -->
<?php include('../model/show_detail_modal.php'); ?>
<!-- End -->
<!-- include edit modal -->
<?php include('../model/show_edit_modal.php'); ?>
<!-- End -->
<!-- include delete modal -->
<?php include('../model/show_delete_modal.php'); ?>
<!-- End -->
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
<!-- include insert modal -->
<?php include('../model/show_add_modal.php'); ?>
<!-- End -->
</div>

                            
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../assets/js/scriptss.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/datatables-demo.js"></script>
    </body>
</html>
