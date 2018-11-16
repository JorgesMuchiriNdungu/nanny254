<?php
session_start();
require_once "connection.php";

if(isset($_POST["checklogin"])){
	
	$email = addslashes($_POST["email"]);
	$password = addslashes($_POST["password"]);
	$hash_password = md5($password);

	$spot_user = "SELECT * FROM users2 WHERE email = '$email' AND password = '$hash_password' LIMIT 1";

	$spot_user_results = $conn->query($spot_user);
	
	if($spot_user_results->num_rows > 0){
		
$_SESSION["authlog"] = $spot_user_results->fetch_assoc();
			
			$userId = $_SESSION["authlog"]["userId"];
			
			$update_status = "UPDATE users2 set lastaccessdate = now() WHERE userId = '$userId' LIMIT 1";

			if ($conn->query($update_status) === TRUE){
if ($conn->query($update_status) === TRUE) {
						if (($_SESSION["authlog"]["username"] == 'parents'))	{
						@header("Location: home.php");		
					exit();
						}else if (($_SESSION["authlog"]["username"] == 'nanny')){
							@header("Location: nanny.php");	
				}


				else{
            $_SESSION["message"] = "Please enter the correct login username or password. ";
            header('location: login.php');
        }
		}
}

}
}


?>