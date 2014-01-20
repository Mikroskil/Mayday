<?php
	session_start();
?>
<html>
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
				<li><a href='NutrisiSuplemen.php' accesskey='2' title=''>Tips Kesehatan</a></li>
				<li><a href='MenuDiet.php' accesskey='3' title=''>Menu Diet</a></li>
				<li><a href='FAQ.php' accesskey='4' title=''>FAQ </a></li>
				<li><a href='register.php' accesskey='5' title=''>Register</a></li>
              </ul>";
			  }
			  else
			  {
				echo"
			  <ul>
				<li class='active'><a href='index.php' accesskey='1' title=''>Home</a></li>
				<li><a href='NutrisiSuplemen.php' accesskey='2' title=''>Tips Kesehatan</a></li>
				<li><a href='MenuDiet.php' accesskey='3' title=''>Menu Diet</a></li>
				<li><a href='FAQ.php' accesskey='4' title=''>FAQ </a></li>			  
				<li><a href='profil.php'>Profil</a></li>          
              </ul>";	
			  }
			  ?>
</div>
<div id="content">
<div id="colOne">
<h2>Recent Updates</h2>
<h3>Nutrisi dan Manfaat Susu Kedelai Bagi Tubuh</h3>
<p>Susu kedelai merupakan sumber protein nabati yang efektif untuk menjaga kesehatan dan menurunkan kolesterol.<a href="#">  More...</a></p>
<h3>Macam Protein dan Kegunaannya</h3>
<p>Protein, salah satu kandungan makanan yang diperlukan oleh tubuh ini memiliki peran penting dalam tubuh.<a href="#">  More...</a></p>
<h3>Pentingnya Kebutuhan Nutrisi</h3>
<p>Kebutuhan nutrisi sangat penting untuk diketahui oleh semua orang.<a href="#">  More...</a></p>
<p><a href="#"><img src="images/img7.jpg" alt="" height="120" width="150" /></a></p>
</div>

<div id="ColFour">
<h2>Nutrisi dan Manfaat Susu Kedelai</h2>
<p><strong>Sumber Protein Lengkap</strong></p>
<p> Susu kedelai mengandung protein lengkap dibandingkan sumber protein nabati lainnya dari berbagai macam asam amino yang diperlukan oleh tubuh. Secangkir sari kedelai mengandung 7 gram protein yang berguna mendukung proses metabolisme dan regenerasi sel.</p>

<p><strong>Rendah Lemak</strong></p>
<p>Mengkonsumsi sari kedelai secara teratur dapat menurunkan kadar kolesterol jahat atau ҌDLҠdalam tubuh dan meningkatkan kadar kolesterol baik atau ҈DLҮ Hal ini dikarenakan sari kedelai rendah lemak dan menurunkan kadar lemak jenuh yang dikonsumsi tubuh, dan selanjutnya menurunkan kadar kolesterol jahat. Kemampuan sari kedelai menurunkan kadar kolesterol dalam tubuh membantu mencegah penyakit kardiovaskular dan serangan jantung.</p>

<p><strong>Bebas Laktosa</strong></p>
<p>Susu kedelai tidak mengandung laktosa, yaitu gula alami yang biasanya terdapat dalam susu sapi. Oleh karena itu, susu kedelai memiliki resiko lebih rendah untuk menimbulkan alergi bila dikonsumsi. Tidak adanya kandungan laktosa juga membuat sari kedelai aman dikonsumsi tanpa menyebabkan gangguan pencernaan.</p>

<p><strong>Kaya Serat, Isoflavon dan Fitoestrogen</strong></p>
<p>Sari kedelai juga kaya serat, isoflavon, dan fitoestrogen. Serat membantu proses penurunan berat badan, sebab membuat kita lebih cepat kenyang ketika makan, sehingga membantu mengurangi porsi makan secara bertahap dan membantu melancarkan proses pencernaan. Isoflavon membantu mencegah proses penuaan dini, mencegah kerontokan rambut, dan memelihara keremajaan kulit. Isoflavon juga membantu mengurangi gejala menopause, mencegah diabetes, dan menjaga kerapatan tulang untuk mencegah osteoporosis pada wanita berusia lanjut.</p>

</div>
 <!--div id="colThree"> <a href="#"><img src="images/ad_120x600.jpg" alt="" height="600" width="120" /></a> </div-->
<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
</div>
</body>
</html>