<?php require_once('includes/header.php');?>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="200">
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">NJUPT</span> CTF
                </a>
            </div>
			
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse" id="navbarExample">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                   <li>
                        <a class="page-scroll" href="notice.php">Notice</a>
                    </li>	
                    <li>
                        <a class="page-scroll" href="rank.php">Rank</a>
                    </li>
				        
                        <?php ($_SESSION['loggedin']==True)?(print '<li><a class="page-scroll" href="challenge.php">Challenge</a></li><li><a class="page-scroll" href="home.php">Home</a></li>'):(print '');?>

	            	<li><?php ($_SESSION['loggedin']==True)?(print '<a class="page-scroll" href="login.php?action=logout"><span class="glyphicon glyphicon-user"></span>Logout</a>'):(print '<a class="page-scroll" href="login.php"><span class="glyphicon glyphicon-user"></span>Login</a>'); ?>              
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">NCTF</h1>
                        <p class="intro-text">南京邮电大学CTF线上赛<br>start by xlcteam</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

 
		<div class="scrollspy-example" data-offset="50" data-target="#navbar-example" data-spy="scroll">
            <div class="container col-lg-8 col-lg-offset-2" >
                <h2 id="about" class="text-center" >About NCTF</h2>
					<p>为了增强学生的网络安全意识，普及网络攻防知识，选拔选手组建团队，参加国内外一系列的CTF 联赛，以此提升我校在信息安全领域的影响力，将举办南京邮电大学CTF 竞赛（NCTF）。</p>
					<p>竞赛采用线上解题模式，本次竞赛题目由客观题加主观题构成，选手解答出每一道客观题目之后都会获得一个对应的Flag，将Flag 提交到竞赛主网站即可获得相应分数。竞赛结束时，根据最后得分确定获奖选手。</p>
					<p>竞赛结束时，获奖选手（具体获奖人数根据报名人数确定），需发送相应题目的解题报告到nupt_ctf@126.com。如不能及时发送解题报告或解题报告不完善者，名次取消，由排名低一位的选手递补。</p>
				<br>
				<h2 id="contact" class="text-center">Contact xlcteam</h2>
					<p>南邮小绿草安全小组(xlcteam)，一群对网络安全感兴趣的人，欢迎志同道合之人！</p>
					<p>QQ群：283977617</p>
					<p><a href="mailto:youfbi@126.com">youfbi@126.com</a></p>
			</div>			
              
		</div>
  

    <!-- Map Section -->
    <div id="map"></div>

<?php require_once('includes/footer.html');?>