<?php
	session_start();	
?>
<head>
<title>Makanan Anda Diet Anda</title>

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="css/jquery-ui-1.8.6.custom.css" rel="Stylesheet" />	
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-titillium-250.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.6.custom.min.js"></script>
</head>


<body>
<div id="header">

</div>
<div id="menu">
<?php 
			  if(empty($_SESSION['user']))
			  {
				echo"
              <ul>
                <li class='active'><a href='index.php' accesskey='1' title=''>Home</a></li>
				<li><a href='TipsKesehatan.php' accesskey='2' title=''>Tips Kesehatan</a></li>
				<li><a href='Nutrisi.php' accesskey='3' title=''>Nutrisi Makanan</a></li>
				<li><a href='FAQ.php' accesskey='4' title=''>FAQ </a></li>
				<li><a href='register.php' accesskey='5' title=''>Register</a></li>
              </ul>";
			  }
			  else
			  {
				echo"
			  <ul>
				<li class='active'><a href='index.php' accesskey='1' title=''>Home</a></li>
				<li><a href='TipsKesehatan.php' accesskey='2' title=''>Tips Kesehatan</a></li>
				<li><a href='Nutrisi.php' accesskey='3' title=''>Nutrisi Makanan</a></li>
				<li><a href='FAQ.php' accesskey='4' title=''>FAQ </a></li>			  
				<li><a href='profil.php'>Profil</a></li>          
              </ul>";	
			  }
			  ?>
</div>
<div id="content">
<div id="colOne">
<h2>Recent Updates</h2>
<h3>Berat Badan Ideal</h3>
<p>Nutrisi<a href="#">  More...</a></p>
<h3>Nutrisi</h3>
<p>Nutrisi dan Manfaat Susu Kedelai Bagi Tubuh<a href="#"> More...</a></p>
<h3>Diet</h3>
<p>Plate Model Untuk Membantu Anda menyajikan Makanan Sehat Setiap Hari<a href="#">  More...</a></p>
<p><a href="#"><img src="images/img7.jpg" alt="" height="120" width="150" /></a></p>
</div>

<div id="ColFour">

<h2>Nutrisi Makanan</h2>
<p><em><strong>Daftar Makanan beserta kadar gizi yang terkandung : </strong></em>
</p>
<ol>
<li><a href="#">Makanan A</a></li>
<li><a href="#">Makanan B</a></li>
<li><a href="#">Makanan C</a></li>
<li><a href="#">Makanan D</a></li>
<li><a href="#">Makanan E</a></li>
</ol>
</div>
<!--div id="colThree"> <a href="#"><img src="images/ad_120x600.jpg" alt="" height="600" width="120" /></a> </div-->
<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
</div>
</body></html>