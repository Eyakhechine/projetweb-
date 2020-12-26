<!DOCTYPE html>
<html lang="en" >
    <head>
        <title>products review</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/stylereview.css">

    </head>
    <body >
        <?php
        include '../controller/review.php';
        $reviews_obj = new reviews();
        ?>  

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                          <li> <img src="../assets/images/ce.png" alt="CE" class="tlogo"> </li>
                       
                    </ul>

                </div>
            </div>
        </nav>