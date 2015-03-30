<?php include('includes/header.html'); ?>




<?php

//Connect to Db and fetch score
require_once('includes/db_conn.php');

//Create a query to fetch all the questions
$query = "select user_id,username,score,time from nctf_accounts order by score DESC,time ASC";

//Run the query
$rank_result = $dbc->query($query);

$num_ranklist_returned = $rank_result->num_rows;


$rankArray = array();

//Add all the questions from the result to the questions array
while ($row = $rank_result->fetch_assoc()){
    $rankArray[] = $row;
}
$username_list = array();
$score_list = array();
$time_list = array();

foreach($rankArray as $tt) {
    $username_list[$tt['user_id']] = $tt['username']; 
	$score_list[$tt['user_id']] = $tt['score'];
	$time_list[$tt['user_id']] = $tt['time'];

 }
 


?>
  <?php
   $sOutput .= '<table class="table">
   <caption><h2><span class="glyphicon glyphicon-record"></span>  RANK <h2></caption>
   <thead>
      <tr>
	     <th>NUM</th>
         <th>ID</th>
         <th>SCORE</th>
      </tr>
   </thead>
   <tbody>';
    $c=0;
    foreach($username_list  as $id => $username) {
		
        $c=$c+1;
		$sOutput .= '<tr><td>'.$c.'</td><td>'.$username.'</td><td>'.$score_list[$id].'</td><td> ';
		$sOutput .= '<td>';
		$query1 = 'select count(*) as num from nctf_questions';
        $num = mysqli_fetch_assoc($dbc->query($query1));
        $totalquestion = $num['num'];
		
        $query = "select question_id from nctf_rank where user_id=(select user_id from nctf_accounts where username='".$username."')";
        $query_result = $dbc->query($query);
		$answer_questions_returned = $query_result->num_rows;
	          if ($answer_questions_returned < 1){
                //echo "The user no answer in the database";
				foreach ( range(0,$totalquestion) as $qid ) {
					$qid = $qid+1;
					$sOutput .= '<span class="label label-default label-as-badge">'.$qid.'</span>';
          		}
				$sOutput .= '</td><td>'.$time_list[$id].'</td></tr>';
                continue; 
				}


		$answerArray = cast_query_results($query_result);		
		
		$answerArrayfuck=array();
		foreach ($answerArray as $key=>$value){
			//var_dump($value);
			foreach ($value as $kkk=>$vvv){
			$answerArrayfuck[]=$vvv;
			//echo $vvv;
			}
		}
	    
		foreach ( range(0,$totalquestion) as $qid ) {
		$qid = $qid+1;
		//echo $qid.'-----';
		//var_dump($answerArrayfuck);
        if(in_array($qid,$answerArrayfuck)){			    
                $sOutput .= '<span class="label label-success label-as-badge">'.$qid.'</span>';
                }else{
                $sOutput .= '<span class="label label-default label-as-badge">'.$qid.'</span>';
        }
		
		
	    }
		$sOutput .= '</td><td>'.$time_list[$id].'</td></tr>';
	}
        $sOutput .= '</tbody></table>';    
		echo $sOutput;
?>
	


<?php include('includes/footer.html'); ?>
