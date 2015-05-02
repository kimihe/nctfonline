<?php include('header.html'); ?>
<?php require_once('../includes/db_conn.php'); ?>
<?php 
	session_start(); 
	if ($_SESSION["username"]!=ADMINNAME){
		header("Location: ../index.php"); 
		exit;
	}
	if (isset($_GET['delid'])){
		delete_user($_GET['delid']);
	}  
?>
<br><br><br>

<div class="container">
	<div class="col-xs-5 col-sm-8">
		<table class="table table-condensed">
			<caption><h4> manage user <h4></caption>
			<thead>
				<tr>
					<th>userid</th>
					<th>username</th>
					<th>telphone</th>
					<th>email</th>
					<th>score</th>
				</tr>
			</thead>
		<tbody>
		<?php
			$answer_array= array();
			$answer_array = get_answerarray($_SESSION['user_id']);
			//var_dump($answer_array);
			$query = "select * from nctf_accounts order by score DESC";
			//Run the query
			$result = $dbc->query($query);
			if ($result->num_rows > 0) {
				$numm = 0;
				while($row = $result->fetch_assoc()) {
					$numm = $numm + 1;
					$sOutput .= '<tr><td><h5>'.$row["user_id"].'</h5></td>';
					$sOutput .= '<td>'.$row["username"].'<td>';
					//$sOutput .= '<td><a href="'.$row["question_url"].'"><h5>'.$row["question_title"].'<h5></a></td>';
					//admin can been everybody home.php,change passwd.
					$sOutput .= '<td>'.$row["tel"].'<td>';
					$sOutput .= '<td>'.$row["mail"].' <td>';
					$sOutput .= '<td>'.$row["xuehao"].' <td>';
					$sOutput .= '<td>'.$row["score"].' <td>';
					$sOutput .= '<td>   <button type="button" class="btn btn-primary btn-xs"><a href="admin_user.php?delid='.$row["user_id"].'">Del</button>'.' <td>';
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
