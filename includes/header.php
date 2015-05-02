<?php require_once('includes/db_conn.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	

    <title>NCTF - 南邮CTF线上赛</title>

	<link rel="shortcut icon" href="favicon.ico" /> 
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <!--  <link href="fonts/fornt1.css" rel="stylesheet" type="text/css">
    <link href="fonts/fornt2.css" rel="stylesheet" type="text/css"> -->
	
	
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">
                    <i class="fa fa-play-circle"></i>  <span class="light">NJUPT</span> CTF
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#contact">Contact</a>
                    </li>		
                   <li>
                        <a class="page-scroll" href="notice.php">Notice</a>
                    </li>		
                    <li>
                        <a class="page-scroll" href="rank.php">Rank</a>
                    </li>
                        <?php ($_SESSION['loggedin']==True)?(print '<li><a class="page-scroll" href="challenge.php">Challenge</a></li><li><a class="page-scroll" href="home.php">  '.$_SESSION['username'].'</a></li>'):(print '');?>
					
	            	<li><?php (loggedIn()==True)?(print '<a class="page-scroll" href="login.php?action=logout"><span class="glyphicon glyphicon-user"></span>Logout</a>'):(print '<a class="page-scroll" href="login.php"><span class="glyphicon glyphicon-user"></span>Login</a>'); ?>              
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav><br><br><br>