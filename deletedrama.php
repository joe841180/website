<!DOCTYPE HTML>

<html>
	<head>
		<title>修改電視劇資料庫</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">


			<header id="header">
				<div class="logo"><a href="index.html">DATABASE <span>by TKU DILS</span></a></div>
				<a href="#menu">Menu</a>
			</header>

	
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">首頁</a></li>
					<li><a href="datadrama.php">電視劇資料庫</a></li>
					<li><a href="dataperformer.php">演員資料庫</a></li>
                    <li><a href="modifydrama.php">修改電視劇資料庫</a></li>
                    <li><a href="modifyperformer.php">修改演員資料庫</a></li>
                    <li><a href="aboutus.html">關於我們</a></li>
                    <li><a href="paper.pdf">DOWNLOAD PDF</a></li>
				</ul>
			</nav>

		
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>DELETE DRAMA DATA</p>
						<h2>刪除電視劇資料</h2>
					</header>
				</div>
			</section>

	
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
                            <center> 
							<?php   
                            $dbhost = 'localhost';   
                            $dbuser = '106dba01';   
                            $dbpass = 'dilsdba01';   
                            $dbname = '106dba01';
                            
                            $no =$_REQUEST['no'];
                            $name = $_REQUEST['name'];
                            $country = $_REQUEST['country'];
                            $type = $_REQUEST['type'];
                            $topic = $_REQUEST['topic'];
                            $year = $_REQUEST['year'];
                            
                            
                            $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
                            mysql_query('SET NAMES utf8');
                            mysql_query('SET CHARACTER_SET_CLIENT=utf8');
                            mysql_query('SET CHARACTER_SET_RESULTS=utf8');
                            mysql_select_db($dbname);
                            
                            $sql_delete = "DELETE FROM  drama Where no = '$no'";
                            $result = mysql_query($sql_delete) or die('<h2>刪除失敗<h2>');
                                if ($result= mysql_query)
                                {
                                    echo "<h2>刪除成功</h2>";
                                }
                            ?>
                            </center> 
                            
						</div>
					</div>
				</div>
			</section>

		
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Untitled. All rights reserved.
				</div>
			</footer>

	
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>