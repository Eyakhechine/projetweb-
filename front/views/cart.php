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
              header('location:indexcat.php');
          }
      }
  }
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> URBAND SPORT SHOP</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/img/logo.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../assets/css/styles.css" rel="stylesheet" />
    </head>
    
           <!-- Navigation-->
           <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">WELCOME </a> 
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="shop.php">urband sport shop</a></li>
                        
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../model/create-review-info.php">products review</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="shop.php">Contact</a></li>
                         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../model/createRE.php">returns&exchanges</a></li>
                   <li class="nav-item"><a class="nav-link js-scroll-trigger" href="cart.php">Cart</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold"> URBAND SPORT SHOP </h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5"> <strong>DON'T DELAY ! SALE IS TODAY</strong></p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">scroll down to shopping cart</a>
                    </div>
                </div>
            </div>
        </header>
        <body class="img">
<div class="container">
        <table class="table table-striped table-bordered mt-3 table-hover"  id="about" id="empTable">
        
<thead>
<th><center>Produit</center></th>
<th><center>Quantity</center></th>
<th><center>price</center></th>


</thead>
<tbody>
<?php
include('../controller/database.php');
$result=$mysqli->query("select * from cart where id_client=1");
while($row=$result->fetch_assoc()){
$query  =$mysqli->query("select * from productss where id='".$row['id_produit']."'");
$rows =mysqli_fetch_assoc($query);

?>
<tr>
<td><?php echo $rows['name']; ?></td>
<td><?php echo $row['quantity']; ?></td>
<td><?php echo $row['price']; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted"> URBAND SPORT SHOP 2020</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="../assets/js/scripts.js"></script>

    </body>
</html>
