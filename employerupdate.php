<?php

include('connection.php');
require_once "checklogin.php";




if(isset($_POST["update"]))
{
$id = $_SESSION["authlog"]["first_name"];
$rating=$_POST['rating'];
$comments=$_POST['comments'];
$first_name=$_POST['first_name'];
$query1 = "UPDATE  parents set rating = '$rating', comments = '$comments' WHERE first_name = '$first_name'";
if($conn->query($query1) === TRUE)
{
header('location:response.php');
}

else {

	echo "Error in ". $$query1 .' ON '. $conn->error;	

}


}
	// $display_content = $_POST["display_content"];
		

		
		

?>