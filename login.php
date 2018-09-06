<?php
session_start();

function checkempty($data)
{
	foreach ($data as $item => $value) {
		if(empty($value))
			return false;
	}
	return true;
}


if(isset($_POST['login'])){
	$email = $_POST['email'] ?? "";
	$pass = $_POST['key'] ?? "";

	$data = array("email" => $email,
				   "pass" => $pass);
	if(checkempty($data)){
		if($email == "sumit@sumit.com" && $pass == "admin"){
			$_SESSION["email"] = $email;
			$_SESSION["pass"] = $pass;
			header("location:welcome.php");
		}else{
			$_SESSION['error'] = "Invalid email and password";
			header("location:index.php");

		}
	}else{
		$_SESSION['error'] = "Please insert email and password";
		header("location:index.php");
	}

}else if(isset($_POST['update'])){
	$email = $_POST['email'] ?? "";
	$pass = $_POST['key'] ?? "";

	$data = array("email" => $email,
				   "pass" => $pass);
	if(checkempty($data)){
			$_SESSION["email"] = $email;
			$_SESSION["pass"] = $pass;
			header("location:welcome.php");
	}else{
		$_SESSION['error'] = "Please insert email and password";
		header("location:index.php");
	}

}else if(!empty($_REQUEST['logout'])){
	session_destroy();
	session_start();
	$_SESSION["success"] = "Successfully Logout";
	header("location:index.php");
}else{
	$_SESSION['error'] = "Request Error";
	header("location:index.php");
}

