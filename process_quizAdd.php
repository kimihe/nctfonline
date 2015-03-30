<?php
include('includes/header.html');


error_reporting(-1);
ini_set('display_errors', 'On');

//Check for empty fields
if(empty($_POST['question'])||
    empty($_POST['key'])		||
    empty($_POST['mark']))
{
    echo "Please complete all fields";
    exit();
}

//Create short variables
$question = $_POST['question'];
$key = ($_POST['key']);
$mark = ($_POST['mark']);
$type = ($_POST['type']);
$comment = ($_POST['comment']);

//connect to the database
require_once('includes/db_conn.php');

//Create the insert query

$query = "INSERT INTO nctf_questions (`question`,`answer`,`mark`,`type`,`comment`)
			 VALUES ('".$question."','".$key."','".$mark."','".$type."','".$comment."')";

$result = $dbc->query($query);

if($result){
    echo "Your quiz has been saved";
	echo $question;
} else {
    echo '<h1>System Error</h1>';
}
$dbc->close();



include('includes/footer.html');
?>

