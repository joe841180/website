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
						<p>MODIFY DRAMA DATABASE</p>
						<h2>修改電視劇資料庫</h2>
					</header>
				</div>
			</section>

	
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<form action="" name="form1" method="Post">
                                <center>編號<Input Type="text" Name="no"><p>
                                <center>劇名<Input Type="text" Name="name"><p>
                                <center>國家<Input Type="text" Name="country"><p>
                                <center>劇的種類<Input Type="text" Name="type"><p>
                                <center>題材<Input Type="text" Name="topic"><p>
                                <center>年份<Input Type="text" Name="year"><br> 
                                    <input type="button" value="新增" type="submit" onclick="form1.action='insertdrama.php';form1.submit();"/>
                                    <input type="button" value="修改" type="submit" onclick="form1.action='updatedrama.php';form1.submit();"/>
                                    <input type="button" value="刪除" type="submit" onclick="form1.action='deletedrama.php';form1.submit();"/>
                                    </form>
                            
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