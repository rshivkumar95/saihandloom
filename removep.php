<?php
error_reporting(0);
session_start();
if(!(isset($_SESSION["loggedIn"])))
{
   header("Location: login.php");
   
}




include("config.php");


						$delete =$_GET['id'];
						$delete ="DELETE FROM `products` WHERE id='$delete'";
						$result =mysql_query($delete);
						header("location: remove.php");


?>