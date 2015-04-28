<?php include('header.html'); ?>
<?php require_once('../includes/db_conn.php'); ?>
<?php 
session_start(); 

 if ($_SESSION["username"]!=ADMINNAME){
	 header("Location: ../index.php"); 
 }

?>
<br><br><br>
<div  class="container col-md-5 col-md-offset-3" >
<form class="form-horizontal" role="form" method="post" action="admin_notice.php">
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
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
</div>