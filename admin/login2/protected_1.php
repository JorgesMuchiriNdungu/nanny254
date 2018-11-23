<?php
session_start();
require_once "checkloger.php";

?>
<!DOCTYPE html>
<html>





<link rel="stylesheet" href="assets/css/main.css" />

<body>


<br />
	<fieldset style="height:150%,width:20%"><Legend>Manage Users</Legend>
<table border="0">
Welcome <?php echo $_SESSION["authlog"]["username"]; ?>
<br />

<br />
<a href = "profile.php">Update Profile</a>
<br/>
<a href = "manage.php">Manage Users</a>
<br />
<a href = "logout.php">Sign Out</a>
</body>
</html>>
<>
