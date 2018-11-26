<?php
include('connection.php');
require_once "checklogin.php";
if(isset($_POST["update"]))
{
$id = $_SESSION["authlog"]["first_name"];
$license=$_POST['license'];
$accident=$_POST['accident'];
$criminal=$_POST['criminal'];
$cyes=$_POST['cyes'];
$drugs=$_POST['drugs'];
$diet=$_POST['diet'];
$ydiet=$_POST['ydiet'];
$medical=$_POST['medical'];
$ymedical=$_POST['ymedical'];
$education=$_POST['education'];
$firstaid=$_POST['firstaid'];
$course=$_POST['course'];
$course_list=$_POST['course_list'];
$emp1=$_POST['emp1'];
$emp2=$_POST['emp2'];
$nannyexp=$_POST['nannyexp'];
$expnanny=$_POST['expnanny'];
$childrenexp=$_POST['childrenexp'];
$dob=$_POST['dob'];
$nhif=$_POST['nhif'];
$salary=$_POST['salary'];
$location=$_POST['location'];
$category=$_POST['category'];
$age=$_POST['age'];

$query1 = "UPDATE nannies set nhif='$nhif',dob='$dob',license = '$license',accident='$accident',criminal='$criminal',cyes='$cyes',drugs='$drugs',diet='$diet',ydiet='$ydiet',medical='$medical',ymedical='$ymedical',education='$education',firstaid='$firstaid',course='$course',
course_list='$course_list',emp1='$emp1',emp2='$emp2',nannyexp='$nannyexp',expnanny='$expnanny',childrenexp='$childrenexp',location='$location',category='category' ,age='$age',salary='$salary'
		 WHERE first_name = '$id'";
if($conn->query($query1) === TRUE)
{
$_SESSION['msg']="Nanny Profile Completed Successfully";
header('location:profile.php');
exit;
   if(isset($_SESSION['MSG'])){
   echo $_SESSION['MSG'];
   }
 
}
else {
	echo "Error in ". $$query1 .' ON '. $conn->error;	
}
		
		
}
	// $display_content = $_POST["display_content"];
		
	
 
?>