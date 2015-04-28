<?php include('header.html'); ?>
<?php require_once('../includes/db_conn.php'); ?>
<?php 

 if ($_SESSION["username"]!=ADMINNAME){
	 header("Location: ../index.php"); 
 }

 
?>
 
