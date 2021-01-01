<?php
include('../controller/db.php');
$upload_dir = '../../back/assets/uploads/';

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
        <link href="../assets/css/scrolling-nav.css" rel="stylesheet">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">WELCOME </a> 
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#categories">categories</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#customized products">customized products</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#products review">products review</a></li>

                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#returns&exchanges">returns&exchanges</a></li>
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
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0"> U2S</h2> <img src="../assets/img/logo.png">
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">
                            "Urband Sport Shop" includes a combination of the two words "URBAN" and "BRAND" that were chosen since it will consist of selling SPORTS EQUIPMENTS  of different famous labels most URBAN population use.

                            
                            
                        </p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#categories">CHECK CATEGORIES!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- categories-->

        <section class="page-section" id="categories">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0"> at your service!</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">An online shopping website for all sorts of sports equipments ( clothes, shoes, and other supplies) from a well-known brand such as Adidas, Nike, Puma, and Reebok. For the Game Of Thrones fans, we included customized articles that have irresistible offers</p>
                      

                        <table id="example" class="table table-striped table-bordered" style="width:100%">
 <tbody>
  <?php
    $sql = "select * from categories where name='normal'";
   $result = mysqli_query($conn, $sql);
   if(mysqli_num_rows($result)){
   while($row = mysqli_fetch_assoc($result)){
     ?>
                                              
    <tr>
                                                
    <div class="col-lg-8 mx-auto text-center">
    
<div class="container">
      <div class="row">
      <h2 style="width: 100%;
    text-align: center;
    padding: 15px 0;">Our categories</h2>

        <div class="col-lg-8 mx-auto text-center">

<?php
foreach($result as $row){
?>
<div class="categorie-wrapper col-md-4">

<button  onclick="window.location.href = 'shopnormal.php';"class="categorieBtn"  >
<img src="../../back/assets/uploads/<?PHP echo $row['image'];

?>" alt="" class="catimg">
<span> <?PHP echo $row['name'];

 ?></span> </button> </div>

    <?PHP
}
?>

                                              
  <?php
 }
 }
    ?>
                            

                                            
 <?php
   $sql = "select * from categories where name='got customized'";
   $result = mysqli_query($conn, $sql);
          if(mysqli_num_rows($result)){
       while($row = mysqli_fetch_assoc($result)){
 ?>
                                              
                                              
                                                   
<?php
foreach($result as $row){
?>
<div class="categorie-wrapper col-md-4">

<button  onclick="window.location.href = 'shopgot.php';"class="categorieBtn"  >
<img src="../../back/assets/uploads/<?PHP echo $row['image'];

?>" alt="" class="catimg">
<span> <?PHP echo $row['name'];

 ?></span> </button> </div>

    <?PHP
}
?>


</div>
</div>                                      
                                        
                                                                                                                                 
  <?php
        }
       }
     ?>
                                            
</tbody>
 </table>

 </div>
 </div>              
</div>
 </section>
        <!-- Portfolio for products-->
        <div id="customized products">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../assets/img/portfolio/fullsize/1.jpg">
                            <img class="img-fluid" src="../assets/img/portfolio/thumbnails/1.jpg" alt="" />
                           
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../assets/img/portfolio/fullsize/8.jpg">
                            <img class="img-fluid" src="../assets/img/portfolio/thumbnails/8.jpg" alt="" />
                           
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../assets/img/portfolio/fullsize/3.jpg">
                            <img class="img-fluid" src="../assets/img/portfolio/thumbnails/3.jpg" alt="" />
                        
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../assets/img/portfolio/fullsize/4.jpg">
                            <img class="img-fluid" src="../assets/img/portfolio/thumbnails/4.jpg" alt="" />
                          
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../assets/img/portfolio/fullsize/7.jpg">
                            <img class="img-fluid" src="../assets/img/portfolio/thumbnails/7.jpg" alt="" />
                          
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../assets/img/portfolio/fullsize/6.jpg">
                            <img class="img-fluid" src="../assets/img/portfolio/thumbnails/6.jpg" alt="" />
                         
                        </a>
                    </div>
                </div>
            </div>
        </div>

          <!-- products review -->
     
        
        <section class="page-section bg-dark text-white" class="page-section"id="products review">
            <div class="container text-center">
                <h2 class="mb-4">YOUR OPINION MATTER</h2>
                <h2>please rate our products here</h2>
                <a class="btn btn-light btn-xl" href="../model/create-review-info.php">products review </a>
            </div>
        </section>


        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5"> SIGN UP and enjoy shopping .. like that you’ll get a chance of winning prizes that can reach a planned trip to different places where GOT was shooted</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="sign.php" > connect </a>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="signin.php">sign in </a>
                    </div>
                </div>
            </div>
        </section>
    <!-- returns and exchanfes-->
        <section class="page-section bg-dark text-white" id="returns&exchanges">
            <div class="container text-center">
                <h2 class="mb-4">want to return an item or exchange it ? click here to verify </h2>
                <a class="btn btn-light btn-xl" href="../model/createRE.php">verify</a>
            </div>
        </section>
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
