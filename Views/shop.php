<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> URBAND SPORT SHOP </title>

  <!-- Bootstrap core CSS -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../assets/css/scrolling-nav.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"> WELCOME TO URBAND SPORT SHOP </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#SIGN UP">SIGN UP </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#CATEGORIES">CATEGORIES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#RETURNS & EXCHANGES">RETURNS & EXCHANGES </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#SHOPPING CART">SHOPPING CART</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#PRODUCTS REVIEW">PRODUCTS REVIEW </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>CHECK OUR PRODUCTS </h1>
      <p class="lead">DON'T DELAY SALE IS TODAY </p>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2></h2>
          





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

</thead>
<tbody>
<?php
include('../controller/database.php');
$result=$mysqli->query("select * from productss");
while($row=$result->fetch_assoc()){
$img = "http://localhost/php_crud/assets/profile_images/".$row['id']. ".jpg";
?>
<tr>
<td> <img src='<?php echo $img ?>' height="260px" width="260px" /></td>
<td><?php echo $row['category']; ?></td>
<td><?php echo $row['brand']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['name']; ?></td>

</tr>
<?php } ?>
</tbody>
</table>
</div>


<!-- End -->
</div>

                            
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>







          
        </div>
      </div>
    </div>
  </section>

  <section id="PRODUCTS REVIEW " class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2></h2>
          
        </div>
      </div>
    </div>
  </section>

  <section id="SHOPPING CART">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2></h2>
         
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white"> U2S 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="../assets/js/scrolling-nav.js"></script>

</body>

</html>
