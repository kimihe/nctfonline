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
                        <?php ($_SESSION['loggedin']==True)?(print '<li><a class="page-scroll" href="challenge.php">Challenge</a></li><li><a class="page-scroll" href="home.php">Home</a></li>'):(print '');?>
					
	            	<li><?php (loggedIn()==True)?(print '<a class="page-scroll" href="login.php?action=logout"><span class="glyphicon glyphicon-user"></span>Logout</a>'):(print '<a class="page-scroll" href="login.php"><span class="glyphicon glyphicon-user"></span>Login</a>'); ?>              
                    </li>

                </ul>