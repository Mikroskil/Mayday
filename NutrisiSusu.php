<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Makanan Anda Diet Anda</title>


<link href="slide.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="default.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="css/jquery-ui-1.8.6.custom.css" rel="Stylesheet" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.6.custom.min.js"></script>
</head>


<body>
<span id="sl_play" class="sl_command">&nbsp;</span>
	<span id="sl_pause" class="sl_command">&nbsp;</span>
	<span id="sl_i1" class="sl_command sl_i">&nbsp;</span>
	<span id="sl_i2" class="sl_command sl_i">&nbsp;</span>
	<span id="sl_i3" class="sl_command sl_i">&nbsp;</span>
	<span id="sl_i4" class="sl_command sl_i">&nbsp;</span>
	
	<section id="slideshow">
			
		<a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>
		<a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>
		
		<div class="container">
			<div class="c_slider"></div>
			<div class="slider">
				<figure>
					<img src="img/dummy-640x310-1.jpg" alt="" width="815" height="200" />
					<figcaption>The mirror of soul</figcaption>
				</figure><!--
				--><figure>
					<img src="img/dummy-640x310-2.jpg" alt="" width="815" height="200" />
					<figcaption>Let's cross that bridge when we come to it</figcaption>
				</figure><!--
				--><figure>
					<img src="img/dummy-640x310-3.jpg" alt="" width="815" height="200" />
					<figcaption>Sushi<em>(do)</em> time</figcaption>
				</figure><!--
				--><figure>
					<img src="img/dummy-640x310-4.jpg" alt="" width="815" height="200" />
					<figcaption>Waking Life</figcaption>
				</figure>
			</div>
		</div>
		
		<span id="timeline"></span>
		
		
	</section>

<div id="menu">
<?php 
			  if(empty($_SESSION['user']))
			  {
				echo"
              <ul>
                <li ><a href='index.php' accesskey='1' title=''>Home</a></li>
				<li class='active'><a href='TipsKesehatan.php' accesskey='2' title=''>Tips Kesehatan</a>
					<ul>
						<li><a href='NutrisiPenting.php'>Nutrisi</a></li>
						<li><a href='Olahraga.php'>Olahraga</a></li>
					</ul>
				</li>
				<li><a href='MenuDiet.php' accesskey='3' title=''>Menu Diet</a></li>
				<li><a href='FAQ.php' accesskey='4' title=''>FAQ </a></li>
				<li><a href='register.php' accesskey='5' title=''>Register</a></li>
              </ul>";
			  }
			  else
			  {
				echo"
			  <ul>
				<li ><a href='index.php' accesskey='1' title=''>Home</a></li>
				<li class='active'><a href='TipsKesehatan.php' accesskey='2' title=''>Tips Kesehatan</a>
					<ul>
						<li><a href='NutrisiPenting.php'>Nutrisi</a></li>
						<li><a href='Olahraga.php'>Olahraga</a></li>
					</ul>
				</li>
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
<h3>Fakta Bahwa Ternyata Manfaat Air Putih Sangat Banyak</h3>
<p>Manfaat air putih sepertinya sudah menjadi rahasia umum yang beredar di seluruh masyarakat.<a href="TipsKesehatan.php">  More...</a></p>
<h3>Macam Protein dan Kegunaannya</h3>
<p>Protein, salah satu kandungan makanan yang diperlukan oleh tubuh ini memiliki peran penting dalam tubuh.<a href="NutrisiProtein.php">  More...</a></p>
<h3>Pentingnya Kebutuhan Nutrisi</h3>
<p>Kebutuhan nutrisi sangat penting untuk diketahui oleh semua orang.<a href="NutrisiPenting.php">  More...</a></p>
<p><a href="#"><img src="images/img7.jpg" alt="" height="120" width="150" /></a></p>
</div>

<div id="ColFour">
<div style="text-align:justify;">
<h2>Nutrisi dan Manfaat Susu Kedelai</h2>
<p><strong>Sumber Protein Lengkap</strong></p>
<p> Susu kedelai mengandung protein lengkap dibandingkan sumber protein nabati lainnya dari berbagai macam asam amino yang diperlukan oleh tubuh. Secangkir sari kedelai mengandung 7 gram protein yang berguna mendukung proses metabolisme dan regenerasi sel.</p>

<p><strong>Rendah Lemak</strong></p>
<p>Mengkonsumsi sari kedelai secara teratur dapat menurunkan kadar kolesterol jahat atau ҌDLҠdalam tubuh dan meningkatkan kadar kolesterol baik atau ҈DLҮ Hal ini dikarenakan sari kedelai rendah lemak dan menurunkan kadar lemak jenuh yang dikonsumsi tubuh, dan selanjutnya menurunkan kadar kolesterol jahat. Kemampuan sari kedelai menurunkan kadar kolesterol dalam tubuh membantu mencegah penyakit kardiovaskular dan serangan jantung.</p>

<p><strong>Bebas Laktosa</strong></p>
<p>Susu kedelai tidak mengandung laktosa, yaitu gula alami yang biasanya terdapat dalam susu sapi. Oleh karena itu, susu kedelai memiliki resiko lebih rendah untuk menimbulkan alergi bila dikonsumsi. Tidak adanya kandungan laktosa juga membuat sari kedelai aman dikonsumsi tanpa menyebabkan gangguan pencernaan.</p>

<p><strong>Kaya Serat, Isoflavon dan Fitoestrogen</strong></p>
<p>Sari kedelai juga kaya serat, isoflavon, dan fitoestrogen. Serat membantu proses penurunan berat badan, sebab membuat kita lebih cepat kenyang ketika makan, sehingga membantu mengurangi porsi makan secara bertahap dan membantu melancarkan proses pencernaan. Isoflavon membantu mencegah proses penuaan dini, mencegah kerontokan rambut, dan memelihara keremajaan kulit. Isoflavon juga membantu mengurangi gejala menopause, mencegah diabetes, dan menjaga kerapatan tulang untuk mencegah osteoporosis pada wanita berusia lanjut.</p>

<p><strong>Efek Samping Susu Kedelai</strong></p>
<p>Namun demikian, sari kedelai ini juga memiliki kekurangan. Sari kedelai memiliki kadar kalsium rendah, bahkan lebih rendah daripada susu sapi. Untuk itu, diperlukan sumber makanan atau minuman lain yang kaya kalsium seperti susu skim rendah lemak untuk membantu mencukupi kebutuhan kalsium harian. Batasi konsumsi sari kedelai jika Anda memiliki kadar asam urat tinggi sebab sari kedelai berpotensi meningkatkan kadar asam urat dalam tubuh dan juga berpengaruh dalam pembentukan batu ginjal.</p>

</div>
</div>
 <!--div id="colThree"> <a href="#"><img src="images/ad_120x600.jpg" alt="" height="600" width="120" /></a> </div-->
<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer"> <p align="center"> @copyright 2013 MAYDAY Team </p>
</div>
</body>
</html>