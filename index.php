<?php require_once('includes/header.php');?>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

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
                        <a class="page-scroll" href="rank.php">Rank</a>
                    </li>
				        
                        <?php ($_SESSION['loggedin']==True)?(print '<li><a class="page-scroll" href="challenge.php">Challenge</a></li>'):(print '');?>
                    

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

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About NCTF</h2>
                <p>为了增强学生的网络安全意识，普及网络攻防知识，选拔选手组建团队，参加国内外一系列的CTF 联赛，以此提升我校在信息安全领域的影响力，将举办南京邮电大学CTF 竞赛（NCTF）。</p>
                <p>竞赛采用线上解题模式，本次竞赛题目由客观题加主观题构成，选手解答出每一道客观题目之后都会获得一个对应的Flag，将Flag 提交到竞赛主网站即可获得相应分数。竞赛结束时，根据最后得分确定获奖选手。</p>
                <p>竞赛结束时，获奖选手（具体获奖人数根据报名人数确定），需发送相应题目的解题报告到nupt_ctf@126.com。如不能及时发送解题报告或解题报告不完善者，名次取消，由排名低一位的选手递补。</p>
            </div>
        </div>
    </section>

    <!-- Download Section
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Download Grayscale</h2>
                    <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
                    <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact xlcteam</h2>
                <p>南邮小绿草安全小组(xlcteam)，一群对网络安全感兴趣的人，欢迎志同道合之人！</p>
				<p>QQ群：283977617</p>
                <p><a href="mailto:youfbi@126.com">youfbi@126.com</a>
                </p>
				
               <!-- <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>-->
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

<?php require_once('includes/footer.html');?>