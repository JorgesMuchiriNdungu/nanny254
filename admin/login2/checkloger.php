<?php
// session_start();
if(!isset($_SESSION["authlog"])){
	header("Location: message.php");
	exit();
}

?>