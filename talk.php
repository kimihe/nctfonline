<?php include('includes/header.html'); ?>
 
<?php

require_once('includes/db_conn.php');
require_once('includes/functions_list.php');

$query = "select * from nctf_talk"; //搜索数据表content
//Run the query
$query_result = $dbc->query($query);

 
//Create an array to hold all the returned questions
$talkArray = array();

//Add all the questions from the result to the questions array
while ($row = $query_result->fetch_assoc()){
    $talkArray[] = $row;
}
$talker_list = array();
$content_list = array();

foreach($talkArray as $tt) {
    $talker_list[$tt['id']] = $tt['name'];
	$content_list[$tt['id']] = $tt['content'];
 }

?>




 

<?php
  
  foreach($talker_list  as $id => $name) {
        //$sOutput .='<blockquote class="triangle-right left">'.$content_list[$id].'</blockquote><p>anonymous</p>';
		$sOutput .='<p class="triangle-obtuse right">'.$content_list[$id].'</p>';
        //echo "<tr><td>$content_list[$id]</td></tr>";
		//<p class="triangle-right left">But it could be any element you want.</p>
        }
		echo $sOutput;
?>

</p>
 
 
 

<?php include('includes/footer.html'); ?>