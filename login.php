<?php 
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
    <h2>LOGIN</h2>
    <p></p>
      <form class="form-horizontal" action="php/checker_login.php" method="POST">
        <div class="form-group">
          <label class="control-label col-sm-2" for="uname">Username<span class="error">*</span></label>
          <div class="col-sm-5">
            <input type="text" class="form-control" placeholder="Enter Username" name="uname" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Password<span class="error">*</span></label>
          <div class="col-sm-5">          
            <input type="password" class="form-control" placeholder="Enter password" name="password" required>
          </div>

        <div class="form-group">
          <div class="error">
            <?php
              if(isset($_GET['status'])){
                if($_GET['status']='failed'){
                  echo "<label style='font-size: 11px;margin-left: 15px;'>These credentials do not match our records.</label>";
                }
              }
            ?>
          </div>
        </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-5">
            <div class="checkbox">
              <label><input type="checkbox" name="remember" value="<?php if(isset($_POST['remember'])) {echo $_POST['txtusername'];} ?>"> Remember me</label>
            </div>
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-3">
            <button type="submit" name="btnSubmit" class="btn">Submit</button>
            <br> <br>
            <p>No Account? <a href="signup.php">Create here</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
	<?php include ("footer.php");?>
</body>
</html>