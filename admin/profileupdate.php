<?php

include('connection.php');
require_once "checklogin.php";

if(isset($_GET['id']))
{
$id=$_GET['id'];
$rating=$_POST['rating'];
$comment=$_POST['comment'];

$query1 = "UPDATE  nannies set rating = '$rating',comment='$comment' WHERE id = '$id'";
if($conn->query($query1) === TRUE)
{
header('location:profile.php');
}



else {

	echo "Error in ". $$query1 .' ON '. $conn->error;	

}


}
	// $display_content = $_POST["display_content"];
		

		
		

?>