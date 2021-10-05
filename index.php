<?php 
 // echo "<h1>welcome Geeky it works find Geeky good to go</h1>";

 // $welcome = "let do it then";

 // echo "<br/> <br/>"

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible"content="ie=edge">
  <title>Home | Geeky</title>
  <link rel="stylesheet"href="css/font-awesome.min.css">
  <link rel="stylesheet"href="css/bootstrap.css">
  <link rel="stylesheet"href="css/style.css">
  <!-- favicon  -->
  <link rel="apple-touch-icon"sizes="180x180"href="favicon/apple-touch-icon.png">
  <link rel="icon"type="image/png"sizes="32x32"href="favicon/favicon-32x32.png">
  <link rel="icon"type="image/png"sizes="16x16"href="favicon/favicon-16x16.png">
<!-- end -->
<style>
.green{background: rgba(137, 214, 92, 0.548);
  color: #fff !important;
}  
.text{color: #14b182;}
.border{border: 1px solid #14b182 !important;}
 .text-header{
  width:50%;
  margin:auto;
  border-bottom:1px #14b182 solid;
}
/* img{margin-top:-50px;} */

.fa{font-size:25px;}

.card-Author:hover{background: rgba(137, 214, 92, 0.548);
    color:#fff; }

.fa{color:#14b182;}  
div ul li a{color: #14b182 !important;}
.fa-facebook{color: blue;}
.fa-twitter{color: #099;}

</style>
</head>
<body id="home">
  <nav class="navbar navbar-expand-md navbar-light fixed-top py-4 ">
    <div class="container"> 
      <a href="index.html"class="navbar-brand">
        <img src="img/logo.png"width="50"height="50"alt=""><h3 class="d-inline align-middle text">Geeky</h3>
      </a>
      <button class="navbar-toggler"data-toggle="collapse"data-target="#navlist"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse"id="navlist">
        <ul class="navbar-nav ml-auto"> 
          <li class="nav-item">
            <a href="#home"class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about"class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="#authors"class="nav-link">Meet The Authors</a>
          </li>
          <li class="nav-item">
            <a href="#contact"class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- SHOWCASE -->
  <section id="showcase"class="py-5">
    <div class="primary-overlay text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-center">
            <h1 class="display-2 mt-5 pt-5 text">
              Great men are strong readers...
            </h1>
            <p class="lead">i believe that everything is written down somewhare, and if you just look hard enough, you'll find it </p>
            <a href="#"class="btn btn-outline-secondary btn-lg text-white green">
              <i class="fa fa-arrow-right"></i> Read More</a>
          </div>
          
  <!-- <footer id="main-footer"class="py-5 green text-white">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-6 ml-auto">
          <p class="lead">Copyright &copy; 2021</p>
        </div>
      </div>
    </div>
  </footer> -->


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/navbar-fixed.js"></script>
</body>
</html>
