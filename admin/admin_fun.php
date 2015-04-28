<?php
function insert_question($question_title,$key,$mark,$type,$link){
global $dbc;
$query = "INSERT INTO nctf_questions (`question_id`,`question_title`,`answer`,`mark`,`type`,`question_url`)
			 VALUES ('".$question_id."','".$question_title."','".$key."','".$mark."','".$type."','".$link."')";
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

function delete_user($user_id){
global $dbc;
$query = '
DELETE
FROM
	nctf_accounts
WHERE
	user_id ='.$user_id;
$result = $dbc->query($query);
$dbc->close();
}

function insert_notice($message){
global $dbc;
//message应当先处理一下，20个字符加一个br
$query = "INSERT INTO nctf_notice (`content`,`times`)
			 VALUES ('".$message."',now())";
//echo $query;
$result = $dbc->query($query);

if($result){
     echo '<h3 align="center"><span class="label label-success">  Notice has been saved</span></h3>';
	 header("refresh:1;url=admin_notice.php");
	exit;
} else {
     echo '<h3 align="center"><span class="label label-danger"> Something Wrong</span></h3>';
	 header("refresh:1;url=admin_notice.php");
	exit;
}
$dbc->close();
}

function delete_notice($delid){
global $dbc;
$query = '
DELETE
FROM
	nctf_notice
WHERE
	id ='.$delid;
$result = $dbc->query($query);
$dbc->close();
	
}
?>