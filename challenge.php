<?php


error_reporting(0);
ini_set('display_errors', 1);
$rightAnswer = 0;
$wrongAnswer = 0;

require_once('includes/header.html');
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
	   


    

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-48989039-2', 'valokafor.com');
    ga('send', 'pageview');

</script>
<?php   include('includes/footer.html'); ?> 
