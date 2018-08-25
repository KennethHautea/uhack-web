<?php
require_once __DIR__ . "/../config.php";	
require_once __DIR__ . "/../redirect.php";	
require_once __DIR__ . "/../database.php";	
	if(isset($_POST["btnSubmit"])){
		$txtUname = $_POST["uname"];
		$txtPassword = $_POST["password"];
		$txtname = $_POST["name"];
		$txtemail = $_POST["email"];
		$txtaddress = $_POST["address"];

		$sql="INSERT INTO users(name,address,email,username,password)
		values (:name,:address,:email,:username,:password)";
		$arrPar=array();
		$arrPar=[':name',':address',':email',':username',':password'];
		$arrVal=array();
		$arrVal=[$txtname,$txtaddress,$txtemail,$txtUname,$txtPassword];
		$id = DB::querybinderwithkey($sql,$arrPar,$arrVal);
	}
?>