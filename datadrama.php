<!DOCTYPE HTML>

<html>
	<head>
		<title>電視劇資料庫</title>
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
						<p>DRAMA SEARCHING</p>
						<h2>電視劇資料庫</h2>
					</header>
				</div>
			</section>

	
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>START SEARCHING</p>
								<h2>搜尋</h2>
							</header>
							
                             
                            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post"  align="center" style="color:white;" action="#">
                                <div class="row uniform">
                                    <div class="12u$">
                                        <div class="select-wrapper">
                                        <select name="category" id="category">
                                            <option value="">不限欄位</option>
                                            <option value="name">劇名</option>
                                            <option value="country">國家</option>
                                            <option value="type">劇的種類</option>
                                            <option value="topic">題材</option>
                                            <option value="year">年份</option>
                                        </select>
                                    </div>
                                        <input type="text" name="key" id="key" value="" placeholder="輸入關鍵字" />

                                    </div>
                                     </div>
                                <P></P>
                                <center>
                                    <div class="3u$ 12u$(small)">
                                        <input type="submit" value="Search" class="fit" />
                                    </div>
                                 </center>      
                               
                            </form>
                             
                          
                            
						</div>
					</div>
				</div>
			</section>
        <br>
        <?php
$key = $_POST["key"] ;        //關鍵字
$field=$_POST["field"];       //欄位
  
 if ($key!=NULL){

 //step1: 連結資料庫
$link = mysql_connect('localhost', '106dba01', 'dilsdba01');       
mysql_select_db("106dba01", $link) or die("資料連結失敗！");  //判斷是否連結成功


// step2: 設定字碼
mysql_query('SET NAMES utf8');
mysql_query('SET CATARACTER_SET_CLIENT=utf8');
mysql_query('SET CATARACTER_SET_RESULTS=utf8');


// step3: 執行SQL
$sql  = "select * from  drama where	no like '%$key%' or  name like '%$key%' or  country like '%$key%' or  type like '%$key%' or  topic like '%$key%' or  year like '%$key%'";    //關鍵字需要查找的欄位

if ($field == NULL){
$sql  = "select * from  drama where	no like '%$key%' or  name like '%$key%' or  country like '%$key%' or  type like '%$key%' or  topic like '%$key%' or  year like '%$key%'";
}
else if($field != NULL){
$sql = "select* from drama where $field like '%$key%'";
}

$result = mysql_query($sql) or die(mysql_error());
      
// step4:處理結果集  
  $row = mysql_fetch_row($result);
		
	

echo "<table width='700' border='1' rules='all' cellpadding='5' align='center'; >" ;

  echo "<tr>" ;

  echo "<th>編號</th>";
  echo "<th>劇名</th>";
  echo "<th>國家</th>";
  echo "<th>劇的種類</th>";
  echo "<th>題材</th>";
  echo "<th>年份</th>";


  
    while($row !=NULL){  
   list($no,$name,$country,$type,$topic,$year) = $row ;
    
 
  echo "<tr><center>
  <td>$no</td>
  <td>$name</td>
  <td>$country</td>
  <td>$type</td>
  <td>$topic</td>
  <td>$year</td>
  </tr></center>"  ;
  
  echo "<tr>"  ;
  echo " <td colspan='8'><center><a href='#top' style='color:green;' title='回到網頁最上方'>▲TOP</a></center></td> " ;
  echo " </tr>"  ;
 
	$row = mysql_fetch_row($result);
	}
	echo '</table>';	}

  ?>

	
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