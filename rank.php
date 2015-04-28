<?php include('includes/header.php'); ?>

<?php
$sOutput .= '<div  class="container col-md-5 col-md-offset-3" ><table class="table">
   <caption><h2><span class="glyphicon glyphicon-record"></span>  RANK <h2></caption>
   <thead>
      <tr>
	     <th>No.</th>
         <th>ID</th>
         <th>SCORE</th>
		 <th>LIST</th>
		 <th>timestamp</th>
      </tr>
   </thead>
   <tbody>';

//Create a query to fetch all the questions
$query = "select user_id,username,score,time from nctf_accounts order by score DESC,time ASC";

//Run the query
$result = $dbc->query($query);
if ($result->num_rows > 0) {
		// output data of each row
	$numm = 0;
	while($row = $result->fetch_assoc()) {
		    $numm = $numm + 1;
		    $sOutput .= '<tr><td>'.$numm.'</td><td>'.$row["username"].'</td><td>'. $row["score"] .'</td>';
			$sOutput .= '<td>'.show_spanarray1($row["user_id"]).'</td>';
			$sOutput .= '<td>'.$row["time"].'</td>';
			$sOutput .= '</tr>';
		}
}else {
		echo "There is nobody answered a right questions";
		$dbc->close(); 
		
}
$sOutput .= '</tbody></table></div>';   
$sOutput .= '</div>';
echo $sOutput;
?>
	


<?php include('includes/footer.html'); ?>
