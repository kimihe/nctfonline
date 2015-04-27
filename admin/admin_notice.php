<?php include('header.html'); ?>
<?php require_once('../includes/db_conn.php'); ?>
<?php 
session_start(); 

 if ($_SESSION["username"]!=ADMINNAME){
	 header("Location: ../index.php"); 
 }

?>
 
