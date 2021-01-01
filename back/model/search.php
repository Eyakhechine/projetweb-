

<?php
include('../controller/db.php');
$upload_dir = '../assets/uploads/';

if(isset($_GET['delete'])){
      $id = $_GET['delete'];
      $sql = "select * from categories where id = ".$id;
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
          $row = mysqli_fetch_assoc($result);
          $image = $row['image'];
          unlink($upload_dir.$image);
          $sql = "delete from categories where id=".$id;
          if(mysqli_query($conn, $sql)){
              header('location:index.php');
          }
      }
  }
?>


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
                            <a class="nav-link" href="../views/index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            
                       
                           
                            <a class="nav-link" href="../views/index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               PRODUCTS
                            </a>
                            <a class="nav-link" href="../views/indexcat.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               CATEGORIES
                            </a>
                            <a class="nav-link" href="../views/index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                             CUSTOMERS
                            </a>
                            <a class="nav-link" href="../views/indexreview.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            PRODUCTS REVIEW
                            </a>
                            <a class="nav-link" href="../views/index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            SHOPPING CART
                            </a>
                            <a class="nav-link" href="../views/indexRE.php">
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
                        <h1 class="mt-4">categories</h1>
                     

                        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                            <div class="container">
                              <a class="navbar-brand" href="index.php">URBAND SHOP CATEGORIES</a>
                              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                  <ul class="navbar-nav mr-auto"></ul>
                                  <ul class="navbar-nav ml-auto">
                                    <li class="nav-item"><a class="btn btn-primary" href="../model/createcat.php"> create<i class="fa fa-user-plus"></i></a></li>
                                  </ul>
                              </div>
                            </div>
                          </nav>
                    
                          <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">CATEGORIES LIST </div>
                                          <div class="card-body">
                                          <div class="col-md-12"><form method="post" action="../Model/search.php"><input required type="text" name="search"/><input type="submit"  value="Search" /></form></div>
                                          <table id="example" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Image</th>
                                                    <th>Name of category</th>
                                                    
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php
                                            
                                              $search = $_POST['search'];
                                                $sql = "select * from `categories` WHERE `name`='".$search."'";

                                                $result = mysqli_query($conn, $sql);                                                        if($result && mysqli_num_rows($result)>0){
                                                            while($row = mysqli_fetch_assoc($result)){
                                              ?>
                                              <tr>
                                                <td><?php echo $row['id'] ?></td>
                                                <td><img src="<?php echo $upload_dir.$row['image'] ?>" height="40"></td>
                                                <td><?php echo $row['name'] ?></td>
                                                
                                                <td class="text-center">
                                                  <a href="showcat.php?id=<?php echo $row['id'] ?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                                  <a href="/editcat.php?id=<?php echo $row['id'] ?>" class="btn btn-info"><i class="fa fa-user-edit"></i></a>
                                                  <a href="../views/indexcat.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash-alt"></i></a>
                                                </td>
                                              </tr>
                                              <?php
                                                  }
                                                }
                                              ?>
                                            </tbody>
                                          </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                    


                        
                        
                </main>
                
            </div>
        </div>










        <script src="../assets/js/bootstrap.min.js" charset="utf-8"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
      











        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../assets/js/scriptss.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/datatables-demo.js"></script>
    </body>
</html>
