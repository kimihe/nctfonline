<?php include('includes/header.php'); ?>

<h1></h1>
<?php 
 
if (isset($_GET['action'])) { 
  switch (strtolower($_GET['action'])) { 
    case 'register': 
      // If the form was submitted lets try to create the account. 
      if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) { 
        if (createAccount($_POST['username'], $_POST['password'], $_POST['email'])) { 
          $sOutput .= '<h2>Account Created</h2><br><h5>Your account has been created.  
                You can now login <a href="login.php">here</a></h5>.'; 
        }else { 
          // unset the action to display the registration form. 
          unset($_GET['action']); 
        }         
      }else { 
        $_SESSION['error'] = "Username and or Password was not supplied."; 
        unset($_GET['action']); 
      } 
    break; 
	
  } 
} 
 
// If the user is logged in display them a message. 
if (loggedIn()) { 
  $sOutput .= '<h2>Already Registered</h2> 
        You have already registered and are currently logged in as: ' . $_SESSION['username'] . '. 
        <h4>Would you like to <a href="login.php?action=logout">logout</a>?</h4> 
        <h4>Would you like to go to <a href="index.php">site index</a>?</h4>'; 
         
// If the action is not set, we want to display the registration form 
}elseif (!isset($_GET['action'])) { 
  // incase there was an error  
  // see if we have a previous username 
  $sUsername = ""; 
  if (isset($_POST['username'])) { 
    $sUsername = $_POST['username']; 
  } 
   
  $sError = ""; 
  if (isset($_SESSION['error'])) { 
    $sError = '<span id="error"><h5>' . $_SESSION['error'] . ' </h5></span>'; 
  } 
   
  $sOutput .= '<div  class="container col-md-3 col-md-offset-4" >
	    <br>
        <h2>Register</h2>
        <form method="post" action="' . $_SERVER['PHP_SELF'] . '?action=register">
            <div class="form-group">
                <input type="text" placeholder="Enter your username here" name="username"  value="' . $sUsername . '"  id="username" class="form-control">
            </div>
			 <div class="form-group">
                <input type="password" placeholder="Enter your password here" name="password" id="password" class="form-control">
            </div>
			<div class="form-group">
                <input type="text" placeholder="Enter your email here" name="email" id="email" class="form-control">
            </div>
            
            <button name="submit" value="submit" class="btn btn-primary btn-large" type="submit">Register!</button>' . $sError . '
			<h4> </h4><h5>Would you like to <a href="login.php">login</a>?</h5>
        </form>';

} 

echo $sOutput; 
?>


<?php include('includes/footer.html'); ?>