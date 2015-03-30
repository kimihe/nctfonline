<?php include('includes/header.html'); ?>

<h2> </h2>
<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

require($_SERVER['DOCUMENT_ROOT'] . 'nctf/includes/db_conn.php'); 
 
$sOutput .= '<div id="register-body">'; 
 
if (isset($_GET['action'])) { 
  switch (strtolower($_GET['action'])) { 
    case 'register': 
      // If the form was submitted lets try to create the account. 
      if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) { 
        if (createAccount($_POST['username'], $_POST['password'], $_POST['email'])) { 
          $sOutput .= '<h1>Account Created</h1><br />Your account has been created.  
                You can now login <a href="login.php">here</a>.'; 
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
    $sError = '<span id="error">' . $_SESSION['error'] . '</span><br />'; 
  } 
   
  $sOutput .= '<div class="col-md-offset-2 col-md-3">
        <h1>Register</h1>
		<br>
        <form method="post" action="' . $_SERVER['PHP_SELF'] . '?action=register">
            <div class="form-group">
                <label for="username">username</label>
                <input type="text" placeholder="Enter your username here" name="username"  value="' . $sUsername . '"  id="username" class="form-control">
            </div>
			 <div class="form-group">
                <label for="type">password</label>
                <input type="password" placeholder="Enter your password here" name="password" id="password" class="form-control">
            </div>
			<div class="form-group">
                <label for="email">email</label>
                <input type="text" placeholder="Enter your question  email here" name="email" id="email" class="form-control">
            </div>
           
            <button name="submit" value="submit" class="btn btn-primary btn-large" type="submit">Register!</button>
			<h4>Would you like to <a href="login.php">login</a>?</h4>
        </form>';

} 
 
$sOutput .= '</div>'; 
 

echo $sOutput; 
?>


<?php include('includes/footer.html'); ?>