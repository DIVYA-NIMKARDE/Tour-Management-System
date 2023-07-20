<?php

session_start();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}
echo '<script>alert("Logged out successfully !"); window.location = "home.html";</script>';
//header("Location: home.php");
die;