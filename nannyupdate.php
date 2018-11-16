<?php

include('connection.php');
require_once "checklogin.php";


if(isset($_POST["update"]))
{



$id = $_SESSION["authlog"]["first_name"];
$license=$_POST['license'];
$county=$_POST['county'];
$accident=$_POST['accident'];
$manual=$_POST['manual'];
$car=$_POST['car'];
$living=$_POST['living'];
$wtime=$_POST['wtime'];
$employment=$_POST['employment'];
$days=$_POST['days'];
$criminal=$_POST['criminal'];
$cyes=$_POST['cyes'];
$smoke=$_POST['smoke'];
$drugs=$_POST['drugs'];
$diet=$_POST['diet'];
$ydiet=$_POST['ydiet'];
$medical=$_POST['medical'];
$ymedical=$_POST['ymedical'];
$psychological=$_POST['psychological'];
$ypsychological=$_POST['ypsychological'];
$education=$_POST['education'];
$firstaid=$_POST['firstaid'];
$firstaid_level=$_POST['firstaid_level'];
$course=$_POST['course'];
$course_list=$_POST['course_list'];
$hobbies=$_POST['hobbies'];
$pets=$_POST['pets'];
$ypets=$_POST['ypets'];
$housekeeping=$_POST['housekeeping'];
$yhousekeeping=$_POST['yhousekeeping'];
$cook=$_POST['cook'];
$ycook=$_POST['ycook'];
$emp1=$_POST['emp1'];
$emp2=$_POST['emp2'];
$nannyexp=$_POST['nannyexp'];
$expnanny=$_POST['expnanny'];
$childrenexp=$_POST['childrenexp'];
$dob=$_POST['dob'];
$nhif=$_POST['nhif'];

$query1 = "UPDATE nannies set nhif='$nhif',dob='$dob',license = '$license',county ='$county',accident='$accident',manual='$manual',car='$car',living='$living',wtime='$wtime',employment='$employment',days='$days',criminal='$criminal',cyes='$cyes',smoke='$smoke',drugs='$drugs',diet='$diet',ydiet='$ydiet',medical='$medical',ymedical='$ymedical',psychological='$psychological',ypsychological='$ypsychological',education='$education',firstaid='$firstaid',firstaid_level='$firstaid_level',course='$course',
course_list='$course_list',hobbies = '$hobbies',pets='$pets',ypets='$ypets',housekeeping='$housekeeping',yhousekeeping='$yhousekeeping',cook='$cook',ycook='$ycook',emp1='$emp1',emp2='$emp2',nannyexp='$nannyexp',expnanny='$expnanny',childrenexp='$childrenexp'
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