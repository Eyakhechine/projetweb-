b<?php
  include('addcat.php')
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>URBAND SPORT SHOP </title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
 
 
    <link href="../assets/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
 </head>
 <body class="sb-nav-fixed">
 <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand">urband sport shop </a>
           
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
          
            
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
                             categories
                            </a>
                        </div>
                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
      <div class="container-fluid">
      <h1 class="mt-4">Add category</h1>

        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">ADD CATEGORY </div>
              <div class="card-body">
                <form class="" action="addcat.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name"  placeholder="Enter Name" value="">
                    </div>
                   
                    
                   
                    <div class="form-group">
                      <label for="image">Choose Image</label>
                      <input type="file" class="form-control" name="image" value="">
                    </div>
                    <div class="form-group">
                      <button type="submit" name="Submit" class="btn btn-primary waves">Submit</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      </main>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
  </body>
</html>
