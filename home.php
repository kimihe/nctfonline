<?php require_once('includes/header.php');?>
<?php

 if ($_SESSION["username"]==ADMINNAME){
	 header("Location: admin/index.php"); 
	 exit();
 }
 ?>
<br><br><br><br>
 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="pic/avatar.png" class="img-circle"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                    <?php  userProfile($_SESSION["username"]);?>
                        <tr>
                        <td>Home Address</td>
                        <td>Nanjing,Qixia Wenyuan Road9 </td>
                      </tr>        
                    </tbody>
                  </table>
                  
                  <a href="edit.html" class="btn btn-primary">edit profile</a>

                </div>
              </div>
            </div>   
        </div>