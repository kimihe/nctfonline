<?php 
// start the session before any output. 

session_start(); 


//error_reporting(E_ALL);
error_reporting(0);
//Set the database access information as constants


@ $dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


mysqli_query($dbc,"set names ’utf8’ ");
mysqli_query($dbc,"set character_set_client=utf8");   
mysqli_query($dbc,"set character_set_results=utf8");	


if (mysqli_connect_error()){
	echo "Could not connect to MySql. Please try again".mysqli_connect_error();
	exit();
}

DEFINE ('ADMINNAME', 'ctfadmin');
// require the function file 

// default the error variable to empty. 
$_SESSION['error'] = ""; 

require_once('functions_list.php');  
// declare $sOutput so we do not have to do this on each page. 
$sOutput=''; 

?>
