
<?php
include('connection.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1 = "DELETE FROM `posts` WHERE id = $id";
if($conn->query($query1) === TRUE)
{
header('location:viewposts.php');
}
}
?>
