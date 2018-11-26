<?php

include('connection.php');


if(isset($_POST["create"])){

	$first_name = $_POST["first_name"];
	$email = $_POST["email"]; 
    $phoneno = $_POST["phoneno"];
	
	$username = $_POST["username"];
	$hash_password = md5($_POST["password"]);
	$usertype = $_POST["usertype"];

	// $usertype = $_SESSION["usertype"];

	$add_user = "INSERT INTO users2 (first_name, email, phoneno,username, password, usertype) VALUES ('$first_name', '$email', '$phoneno','$username','$hash_password', '$usertype')";
	
	if($conn->query($add_user) === TRUE){
	

		header("Location: viewuser.php");
		exit();
	}else{
		echo "Error: " . $add_user . " ON " . $conn->error;
	}
}
		
		
 
?>