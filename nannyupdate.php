<?php

include('connection.php');
require_once "checklogin.php";

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["update"]))
{

if(isset($_FILES['fileToUpload'])){
    echo $_FILES['fileToUpload']['tmp_name'];
}

$id = $_SESSION["authlog"]["first_name"];


move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
$sql = "UPDATE nannies SET image = '".$_FILES['fileToUpload']['name']."' WHERE first_name = '$id'";

$check = $conn->query($sql);
	
		
		
}
	// $display_content = $_POST["display_content"];
	   
	
 
?>