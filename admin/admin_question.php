
<?php
include('header.html');
require_once('../includes/db_conn.php');
require_once('admin_fun.php');

if (isset($_POST['question_title'])&&isset($_POST['key'])&&isset($_POST['mark'])&&isset($_POST['question_url'])){
$question_title = $_POST['question_title'];
$key = $_POST['key'];
$mark = $_POST['mark'];
$type = $_POST['type'];
$quesion_url = $_POST['question_url'];
        
insert_question($question_title,$key,$mark,$type,$question_url);

}

if (isset($_GET['delid'])){
delete_question($_GET['delid']);
} 

?>
<br><br><br>
<div  class="container col-md-10 col-md-offset-1" >
<div class="row">
    <div class="col-md-offset-1 col-md-3">
        <h3>添加题目</h3>
        <form action="admin_question.php" method="post">
            <div class="form-group">
                <label for="question_title">Question Title</label>
                <input type="text" class="form-control" id="question_title" name="question_title" placeholder="Enter your question title here">
            </div>
			 <div class="form-group">
                <label for="type">Question type(1,2,3)</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Enter your question type here">
            </div>
			 <div class="form-group">
                <label for="link">Question Link</label>
                <input type="text" class="form-control" id="question_url" name="question_url" placeholder="Enter your question link here">
            </div>
            <div class="form-group">
                <label for="key">key</label>
                <input type="text" class="form-control" id="correct_answer" name="key" placeholder="Enter the answers key here">
            </div>
            <div class="form-group">
                <label for="mark">mark</label>
                <input type="text" class="form-control" id="mark" name="mark" placeholder="mark">
            </div>
            <button type="submit" class="btn btn-primary btn-large" value="submit" name="submit">+ Add Question</button>

        </form>
    </div>
 </div>   

 
<div class="col-md-offset-5 col-md-6">
	<table class="table table-condensed">
      <thead>
      <tr>
	     <th>id</th>
		 <th>type</th>
 
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
		$sOutput .= '<tr><td><h5>'.$row["question_id"].'</h5></td>';
		$sOutput .= '<td>'.number_format($row["type"]).' <td>';
		$sOutput .= '<td><a href="'.$row["question_url"].'"><h5>'.$row["question_title"].'<h5></a></td>';
		$sOutput .= '<td><span class="badge">'.number_format($row["mark"]).'</span><td>';
		$sOutput .= '<td>'.$row["question_url"].' <td>';
		$sOutput .= '<td>   <button type="button" class="btn btn-primary btn-xs"><a href="admin_question.php?delid='.$row["question_id"].'">Del</button>'.' <td>';
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

 </div>
