<?php

include('connection.php');
require_once "checklogin.php";




if(isset($_POST["update"]))
{
$id = $_SESSION["authlog"]["first_name"];
$rating=$_POST['rating'];
$comments=$_POST['comments'];
$query1 = "UPDATE  nannies set rating = '$rating', comments = '$comments' WHERE employer = '$id'";
if($conn->query($query1) === TRUE)
{
header('location:thanks.php');
}

else {

	echo "Error in ". $$query1 .' ON '. $conn->error;	

}


}
	// $display_content = $_POST["display_content"];
		

		
		

?>