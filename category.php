\<?php 
  session_start();
  include("php/checker_login.php");
?>
<html>
<head>
  <!--css bootstrap-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/alert.css">
  <!--jquery bootstrap-->
  <script src="js/jquery-3.2.1.min.js"></script>

  <!--js bootstrap-->
  <script src="js/bootstrap.min.js"></script>
  <title>AgriPital : Farming needs on the go</title>
</head>
<body>
  <?php include ("navbar.php"); ?>
  <div class="spacer">
   <div class="container">
    <h2>Category</h2> <br> <br>


    <div class="row">
      <div class="col-sm-2">
        <a href="herbicide.php"> <img src="img/planting-icon.png"></a>
      </div>
      <div class="col-sm-2">
        <a href="pesticide.php"> <img src="img/pest-icon.png"></a>
      </div>
      <div class="col-sm-2">
        <a href="insecticide.php"> <img src="img/water-icon.png"></a>
      </div>
      <div class="col-sm-2">
        <a href="seedling.php"> <img src="img/seeds-icon.png"></a>
      </div>
      <div class="col-sm-2">
        <a href="fertilizer.php"> <img src="img/nutrient-icon.png"></a>
      </div>
      <div class="col-sm-2">
        <a href="bestseller.php"> <img src="img/best.png"></a>
      </div><br>
  </div> 
    </div>
  </div> <br> <br>
  <?php include ("footer.php");?>
</body>
</html>