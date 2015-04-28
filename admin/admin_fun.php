<?php
function insert_question($question_title,$key,$mark,$type,$link){
global $dbc;
$query = "INSERT INTO nctf_questions (`question_title`,`answer`,`mark`,`type`,`question_url`)
			 VALUES ('".$question_title."','".$key."','".$mark."','".$type."','".$link."')";
//echo $query;
$result = $dbc->query($query);

if($result){
     echo '<h3 align="center"><span class="label label-success"> Quesion '.$question_title.' has been saved</span></h3>';
	 header("refresh:1;url=admin_question.php");
	exit;
} else {
    echo '<h3 ><span class="label label-danger">  system error</span></h3>';
}
$dbc->close();
}

function delete_question($question_id){
global $dbc;
$query = '
DELETE
FROM
	nctf_questions
WHERE
	question_id ='.$_GET['delid'];
$result = $dbc->query($query);
}

?>