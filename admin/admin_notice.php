<?php include('header.html'); ?>
<?php require_once('../includes/db_conn.php');
require_once('admin_fun.php');
 ?>

<?php 
session_start(); 

 if ($_SESSION["username"]!=ADMINNAME){
	 header("Location: ../index.php"); 
 }
if (isset($_POST['message'])){
$message = $_POST['message'];
insert_notice($message);
}
 
if (isset($_GET['delid'])){
delete_notice($_GET['delid']);
} 
 
?>
<br><br>
<div  class="container col-md-6 col-md-offset-3" >
<form class="form-horizontal" role="form" method="post" action="admin_notice.php">
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">添加公告</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"></textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <! Will be used to display an alert to the user>
        </div>
    </div>
</form>
<br><br>
<?php 
$sOutput .= '<div  class="container col-md-6 col-md-offset-3" ><table class="table ">
   <tbody>';
   
$query = "select content,times from nctf_notice order by times DESC";

//Run the query
$result = $dbc->query($query);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		    $sOutput .= '<tr><td><h4>';
		    $arr_content = str_split($row["content"], 30);
			foreach ($arr_content as $value){
				$sOutput .= '<br>'.$value.'<br>';
			}
		    $sOutput .= '<h4></td>';
			$sOutput .= '<td>'.$row["times"].'</td>'; 
			$sOutput .= '<td>   <button type="button" class="btn btn-primary btn-xs"><a href="admin_notice.php?delid='.$row["id"].'">Del</button>'.' <td>';
			$sOutput .= '</tr>';
		}
}else {
		echo "There is no notice yet";
		$dbc->close(); 
		
}
$sOutput .= '</tbody></table></div>';   
$sOutput .= '</div>';
echo $sOutput;
?>
</div>