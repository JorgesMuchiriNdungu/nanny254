<?php

include('connection.php');
require_once "checklogin.php";

if(isset($_GET['id']))
{
$id=$_GET['id'];
$employer =$_SESSION['authlog']['first_name'];
$query1 = "UPDATE  nannies set status = 'employed', employer='$employer' WHERE id = $id";
if($conn->query($query1) === TRUE)
{
header('location:search.php');
}
}
	// $display_content = $_POST["display_content"];
		

		
		
 
?>