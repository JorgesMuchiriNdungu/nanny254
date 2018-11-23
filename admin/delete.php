
<?php
include('connection.php');
if(isset($_GET['userId']))
{
$id=$_GET['userId'];
$query1 = "DELETE FROM `users2` WHERE userId = $id";
if($conn->query($query1) === TRUE)
{
header('location:viewuser.php');
}
}
?>
