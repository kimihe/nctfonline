<?php

$rightAnswer = 0;
$wrongAnswer = 0;

require_once('includes/header.php');
require_once('includes/functions_list.php');
require_once('quiz.php');

 if (!loggedIn()) { 
      } 
	  
if (isset($_POST['key'])&&isset($_POST['questionid'])){
        
      if(validateSubmit( $_POST['questionid'],$_POST['key'])){
          echo "<h2><span class=\"label label-success\"> correct answers</span></h2>";
      } else {
          echo "<h2><span class=\"label label-danger\">  wrong answers</span></h2>";
      }
 
}
?>


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

    <?php
	
    foreach($questions as $id => $question) {
		$sOutput .= '<tr><td><h4>'.$id.'</h4></td><td><a href="'.$questions_comment[$id].'">'.$question.'</a></td>';
        $sOutput .= '<td><span class="badge">'.number_format($questions_point[$id]).'</span><td>';
		$sOutput .= '<td><form action="challenge.php" method="post"> <div class="col-sm-6"> <input type="text" placeholder="key..." name="key" id="key" class="form-control"> <input type=hidden   name="questionid" value='.$id.'> </div> <button name="submit" value="submit" class="btn btn-primary btn-large" type="submit">submit</button></form><td>';
		$sOutput .'</tr>';		
          
        }
        echo $sOutput;
       ?>
	   
	</tbody>
</table>   
	   



<?php   include('includes/footer.html'); ?> 
