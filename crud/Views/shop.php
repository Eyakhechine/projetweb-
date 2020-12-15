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

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> URBAND SPORT SHOP</title>
  
  <!-- Bootstrap core CSS -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../assets/css/scrolling-nav.css" rel="stylesheet">

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
            <a class="nav-link js-scroll-trigger" href="#CATEGORIES">CATEGORIES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#SIGN UP">SIGN UP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#CONNECT">CONNECT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#SHOPPING CART">SHOPPING CART</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>URBAND SPORT SHOP</h1>
      
      <p class="lead">_ DON't DELAY SALE IS TODAY _</p>

     
   

    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          
          

            
                                          <table id="example" class="table table-striped table-bordered" style="width:100%">
                                            <tbody>
                                              <?php
                                                $sql = "select * from categories";
                                                $result = mysqli_query($conn, $sql);
                                                        if(mysqli_num_rows($result)){
                                                            while($row = mysqli_fetch_assoc($result)){
                                              ?>
                                              <tr>
                                                
                                                <td><img src="<?php echo $upload_dir.$row['image'] ?>" height="200"></td>
                                                <td><?php echo $row['name'] ?></td>
                                                
                                        
                                                
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
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="../assets/js/scrolling-nav.js"></script>

</body>

</html>