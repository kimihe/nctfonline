<?php
require_once('includes/header.php');

if (!loggedIn()) {
	header("Location: index.php"); 
    exit;	 
      } 
	
if (isset($_POST['key'])&&isset($_POST['questionid'])){
        
      if(validateSubmit( $_POST['questionid'],$_POST['key'])){
          echo '<h3 align="center"><span class="label label-success"> correct answers</span></h3>';
		  header("refresh:1;url=challenge.php");
		  exit;
      } else {
          echo '<h3 align="center"><span class="label label-danger">  wrong answers</span></h3>';
		 
        header("refresh:1;url=challenge.php");
        exit;
      }
 
}
?>

<div  class="container col-md-4 col-md-offset-3" >
<!--Display form-->
<table class="table table-condensed">
   <caption> <h2><span class="glyphicon glyphicon-pencil"></span>  QUESTIONS<h2> </caption>
      <thead>
      <tr>
	     <th>id</th>
         <th>title</th>
         <th>point</th>
		  
      </tr>
   </thead>
<tbody>
<?php
$answer_array= array();
$answer_array = get_answerarray($_SESSION['user_id']);
//var_dump($answer_array);
$query = "select * from nctf_questions";
//Run the query
$result = $dbc->query($query);
if ($result->num_rows > 0) {
	$numm = 0;
	while($row = $result->fetch_assoc()) {
		$numm = $numm + 1;
		$sOutput .= '<tr><td><h5>'.$row["question_id"].'</h5></td><td><a href="'.$row["question_url"].'"><h5>'.$row["question_title"].'<h5></a></td>';
		$sOutput .= '<td><span class="badge">'.number_format($row["mark"]).'</span><td>';
          if(in_array($row["question_id"],$answer_array)){	
			$sOutput .= '<td><h4 align="center"><span class="label label-success"> correct </span></h4><td>';}
			else{
			$sOutput .= '<td><form action="challenge.php" method="post"> <div class="col-sm-6"> <input type="text" placeholder="key..." name="key" id="key" class="form-control"> <input type=hidden   name="questionid" value='.$row["question_id"].'> </div> <button name="submit" value="submit" class="btn btn-primary btn-sm" type="submit">submit</button></form><td>';
			}
			
		$sOutput .'</tr>';	
		}
    }else {
		echo "There is no question in the database.";	
	}
$dbc->close();

        echo $sOutput;
       ?>
	   
	</tbody>
</table>   
</div>	   



<?php   include('includes/footer.html'); ?> 
