<?php

//Connect to Db and fetch questions
require_once('includes/db_conn.php');

//Create a query to fetch all the questions
$query = "select * from nctf_questions";

//Run the query
$query_result = $dbc->query($query);

//Count the number of returned items from the database
$num_questions_returned = $query_result->num_rows;

if ($num_questions_returned < 1){
    echo "There is no question in the database";
    exit();}

//Create an array to hold all the returned questions
$questionsArray = array();

//Add all the questions from the result to the questions array
while ($row = $query_result->fetch_assoc()){
    $questionsArray[] = $row;
}

//Create an array of Correct answers
//$correctAnswerArray = array();
//foreach($questionsArray as  $question){
//    $correctAnswerArray[$question['question_id']] = $question['question'];
//}


//Build the questions array from query result
$questions = array();
$questions_comment = array();
$questions_point = array();
foreach($questionsArray as $question) {
    $questions[$question['question_id']] = $question['question'];
	$questions_comment[$question['question_id']] = $question['comment'];
	$questions_point[$question['question_id']] = $question['mark'];
	
	//echo $question['comment'];
 }


//Build the choices array from query result
//$choices = array();
//foreach ($questionsArray as $row) {
 //   $choices[$row['question_id']] = array($row['choice1'], $row['choice2'], $row['choice3'], $row['answer']);
 // }

