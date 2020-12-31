<?php 
require "../controller/loginC.php" ;
$User= new loginC();
$cC=new loginC();
if (isset($_GET['key'])) {
  $listeSign = $cC->rechercherclients($_GET['key']);
} else {
  $listeSign=$cC->afficher_sign_return() ;
}

if(isset($_GET['del_id']))
  {
    $User->supprimer($_GET['del_id']);
  $result='<div class="alert alert-danger">commande $_GET[del_id] deleted </div>';
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

    <center>
<h2><span style="font-size:25px; color:blue">
 </span>
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
                            <a class="nav-link" href="client.php">
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
                            <a class="nav-link" href="indexRE.php">
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
                        <h1 class="mt-4"> CATEGORIES MANAGEMENT </h1>
                      
                        
                        <div class="card mb-4">
                             
                             <div class="container">
<br/><br/>
<div id="page-wrapper">

</div><!-- /.row -->
<li class="nav-item">
<form class="search-bar">
<input type="text" class="form-control" name="key" placeholder="Enter keywords">
 <a href="javascript:void();"><i class="icon-magnifier"></i></a>
</form>
</li>
<div class="row">
  <div class="col-lg-6">
    <h2>Gestion Client
    </h2>
    <div class="table-responsive">

      <table class="table table-bordered table-hover tablesorter">
          <thead>
                      <th scope="col">photo</th>
                        <th>nom</th>
                    <th scope="col">prénom</th>
                      <th>email</th>
                    <th scope="col">mot de passe</th>
            </tr>
          </thead>
         <?PHP
foreach ($listeSign as $donnee) //affichage
{
        
          echo('<tr>');

echo('<td> <img src="img/'.$donnee['photo'].'" width="100" height="100" /> </td>'); 

echo('<td>'.$donnee['nom'].'</td>');

echo('<td>'.$donnee['prenom'].'</td>');

echo('<td>'.$donnee['email'].'</td>');

echo('<td>'.$donnee['mdp'].'</td>');

         echo ('<td>');
              echo('<td><a href="client.php?del_id='.$donnee['nom'].'" class="btn btn-danger navbar-btn">Supprimer</a></td>') ;// del_id=aboud and will be deleted
              echo('</td>');
                  echo('</tr>');
}
              ?>
        </tbody>
    </div>
  </div>
 
  
</div><!-- /.row -->

</div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->
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
