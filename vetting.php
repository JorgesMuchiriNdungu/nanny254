<?php

include('connection.php');
require_once "checklogin.php";

if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1 = "UPDATE  nannies set vetting = 'Verified' WHERE id = '$id'";
if($conn->query($query1) === TRUE)
{
header('location:viewnannies.php');
}



else {

	echo "Error in ". $$query1 .' ON '. $conn->error;	

}


}
	// $display_content = $_POST["display_content"];
		

		
		

?>