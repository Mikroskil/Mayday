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
					<img src="img/1.jpg" alt="" width="815" height="200" />
					<figcaption><strong>Makanan Anda Diet Anda</strong></figcaption>
				</figure><!--
				--><figure>
					<img src="img/2.jpg" alt="" width="815" height="200" />
					<figcaption><strong>Elizabeth Gilbert <em>“I am a better person when I have less on my plate.”</em></strong></figcaption>
				</figure><!--
				--><figure>
					<img src="img/3.jpg" alt="" width="815" height="200" />
					<figcaption><strong>Peace Pilgrim <em>"I don't eat junk foods and I don't think junk thoughts."</em></strong></figcaption>
				</figure><!--
				--><figure>
					<img src="img/4.jpg" alt="" width="815" height="200" />
					<figcaption><strong>Jack LaLanne <em>"The only way you get that fat off is to eat less and exercise more."</em></strong></figcaption>
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
				<li><a href='TipsKesehatan.php' accesskey='2' title=''>Tips Kesehatan</a>
					<ul>
						<li><a href='NutrisiPenting.php'>Nutrisi</a></li>
						<li><a href='Olahraga.php'>Olahraga</a></li>
						<li><a href='Kalkulator.php'>Kalkulator IMT</a></li>
					</ul>
				</li>
				<li class='active'><a href='MenuDiet.php' accesskey='3' title=''>Menu Diet</a></li>
				<li><a href='FAQ.php' accesskey='4' title=''>FAQ </a></li>
				<li><a href='register.php' accesskey='5' title=''>Register</a></li>
              </ul>";
			  }
			  else
			  {
				echo"
			  <ul>
				<li ><a href='index.php' accesskey='1' title=''>Home</a></li>
				<li ><a href='TipsKesehatan.php' accesskey='2' title=''>Tips Kesehatan</a>
					<ul>
						<li><a href='NutrisiPenting.php'>Nutrisi</a></li>
						<li><a href='Olahraga.php'>Olahraga</a></li>
						<li><a href='Kalkulator.php'>Kalkulator IMT</a></li>
					</ul>
				</li>
				<li class='active'><a href='MenuDiet.php' accesskey='3' title=''>Menu Diet</a></li>
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
<h2>Menu makanan diet siang hari dapat di kategorikan sebagai berikut:</h2>

<table border="1" cellspacing="0" cellpadding="0" class="tabel">
<tbody>
<tr>
<td colspan="3">
<p align="center"><strong>MAKAN SIANG</strong></p>
</td>
</tr>

<tr>
<td align="center"> <img src="img/Makan Siang/udangtumis.jpeg"  valign="top" width="150" height="120">Udang Tumis Cabai </br> 1 Porsi </br> 184 kkal</td>
<td align="center"> <img src="img/Makan Siang/lumpia.jpg"  valign="top" width="150" height="120">Lumpia Ayam Sambal Kacang </br> 1 Porsi </br> 134 kkal</td>
<td align="center"> <img src="img/Makan Siang/tumisbrokoli.jpg"  valign="top" width="150" height="120">Tumis Brokoli </br> 1 Porsi </br> 61 kkal</td>
</tr>

<tr>
<td align="center"> <img src="img/Makan Siang/nasimerah.jpeg"  valign="top" width="150" height="120">Nasi Merah</br> 8 Sendok Makan </br> 108 kkal</td>
<td align="center"> <img src="img/Makan Siang/sayurasem.jpeg"  valign="top" width="150" height="120">Sayur Asem </br> 1 Porsi </br> 88 kkal</td>
<td align="center"> <img src="img/Makan Siang/ayambakar.jpg"  valign="top" width="150" height="120">Ayam Panggang Lada Hitam </br> 1 Porsi </br> 90 kkal</td>
</tr>
<tr>
<td align="center"> <img src="img/Makan Siang/sayurbayam.jpg"  valign="top" width="150" height="120">Sayur Bayam</br> 1 Porsi </br> 18 kkal</td>
<td align="center"> <img src="img/Makan Siang/mangga.jpeg"  valign="top" width="150" height="120">Mangga Harum Manis </br> 1/2 Buah </br> 150 kkal</td>
<td align="center"> <img src="img/Makan Siang/pepaya.jpeg"  valign="top" width="150" height="120">Pepaya </br> 1 Potong </br> 92 kkal</td>
</tr>

<tr>
<td align="center"> <img src="img/Makan Siang/nasigoreng.jpeg"  valign="top" width="150" height="120">Nasi Goreng Ayam</br> 1 Porsi </br> 572 kkal</td>
<td align="center"> <img src="img/Makan Siang/udanggoreng.jpg"  valign="top" width="150" height="120">Udang Goreng Tepung</br> 1 Porsi</br> 393 kkal</td>
<td align="center"> <img src="img/Makan Siang/nasisoto.jpeg"  valign="top" width="150" height="120">Nasi Soto Ayam </br> 1 Porsi</br> 596 kkal</td>
</tr>

<tr>
<td align="center"> <img src="img/Makan Siang/bakwan.jpeg"  valign="top" width="150" height="120">Bakwan</br> 1 Porsi </br> 280 kkal</td>
<td align="center"> <img src="img/Makan Siang/miekering.jpeg"  valign="top" width="150" height="120">Mi Kering Bakso Sapi </br> 1 Porsi</br> 390 kkal</td>
<td align="center"> <img src="img/Makan Siang/tumistauge.jpg"  valign="top" width="150" height="120">Tumis Taoge dengan Tahu Goreng </br> 1 Porsi</br> 210 kkal</td>
</tr>

</tbody>
</table>
(Sumber: Diet Diary Herbalife)
<p>&nbsp;</p>

<p>Makan Pagi<a href="MenuDietPagi.php"> Selengkapnya... </a></p>
<p>Makan Malam<a href="MenuDietMalam.php"> Selengkapnya... </a></p>

<p>Menu makanan diet sehari-hari dapat di-variasikan sesuai selera, menurut jumlah kalori harian yang Anda butuhkan, baik itu untuk <strong>turun berat badan</strong>, <strong> naik berat badan</strong> ataupun menjaga berat badan. Selamat mencoba!</p>
</div>
<!--div id="colThree"> </div-->
<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer"> <p align="center"> @copyright 2013 MAYDAY Team </p>
</div>
</body></html>