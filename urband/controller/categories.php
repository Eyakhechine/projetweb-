
<?PHP
include "categoriesC.php";
$categorie=new categorieC();
$listecategorie=$categorie->affichercategorie();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> URBAND SPORT SHOP</title>
  
  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/scrolling-nav.css" rel="stylesheet">
<style>

    button.categorieBtn {
        width: 100%;
        background: #fafafa !important;
        border: none;
    }

</style>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">WELCOME</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="categories.php">CATEGORIES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#SIGN UP">SIGN UP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#SHOPPING CART">SHOPPING CART</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="about">
    <div class="container">
      <div class="row">
      <h2 style="width: 100%;
    text-align: center;
    padding: 15px 0;">Our categories</h2>

        <div class="col-lg-8 mx-auto text-center">

            <?php
            foreach($listecategorie as $row){
            ?>
       <div class="categorie-wrapper col-md-4">

         <button class="categorieBtn"  >
           <img src="/CRUD/assets/uploads/<?PHP echo $row['image'];

?>" alt="" class="catimg">
          <span> <?PHP echo $row['name'];

             ?></span> </button> </div>

                <?PHP
            }
            ?>
        </div>
      </div>
    </div>
  </section>



  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white"> GO CHECK CATEGORIES AND ENJOY SCROLLING</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="../js/scrolling-nav.js"></script>

</body>

</html>
