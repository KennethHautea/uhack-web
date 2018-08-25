<?php 
require_once __DIR__ . "/../config.php";	
require_once __DIR__ . "/../database.php";	
require_once __DIR__ . "/../redirect.php";	
	if(isset($_POST["btnSubmit"])){
		$txtUname = $_POST["uname"];
		$txtPassword = $_POST["password"];

		$sql = "Select * from users where username='$txtUname' and password='$txtPassword'";
        $users=DB::query($sql);
        if(count($users)==0){
        	echo "<script type='text/javascript'>alert('Invalid Username or Password!')</script>";
        	redirect::to(BASE_URL.'/login.php?status=failed');
        }else{
        	echo "<script type='text/javascript'>alert('Successful!')</script>";
        	$_SESSION["Name"]=$txtUname;
        }
	}
?>