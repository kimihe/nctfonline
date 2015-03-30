<?php 
// start the session before any output. 
session_start(); 
 
// Set the folder for our includes 
$sFolder = '/njuptctf';  

//Set the database access information as constants
DEFINE ('DB_USER', 'leo');
DEFINE ('DB_PASSWORD', 'leo123pass');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'leodb');

@ $dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


mysqli_query($dbc,"set names ’utf8’ ");
mysqli_query($dbc,"set character_set_client=utf8");   
mysqli_query($dbc,"set character_set_results=utf8");	


if (mysqli_connect_error()){
	echo "Could not connect to MySql. Please try again".mysqli_connect_error();
	exit();
}

define('SALT1', 'Nanj1092ng@#'); 
define('SALT2', '13#@$$65%726'); 

// require the function file 
require_once($_SERVER['DOCUMENT_ROOT'] . $sFolder . '/includes/functions_list.php'); 
// default the error variable to empty. 
$_SESSION['error'] = ""; 
 
// declare $sOutput so we do not have to do this on each page. 
$sOutput=''; 

?>
