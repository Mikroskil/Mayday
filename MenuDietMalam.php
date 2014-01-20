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
				<li><a href='TipsKesehatan.php' accesskey='2' title=''>Tips Kesehatan</a>
					<ul>
						<li><a href='NutrisiPenting.php'>Nutrisi</a></li>
						<li><a href='Olahraga.php'>Olahraga</a></li>
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
<h2>Menu makanan diet malam hari dapat di kategorikan sebagai berikut:</h2>

<table border="1" cellspacing="0" cellpadding="0" class="tabel">
<tbody>
<tr>
<td colspan="3">
<p align="center"><strong>MAKAN MALAM</strong></p>
</td>
</tr>

<tr>
<td align="center"> <img src="img/Makan Malam/saladayam.jpg"  valign="top" width="150" height="120">Salad Ayam dan Sayuran</br> 1 Porsi </br> 256 kkal</td>
<td align="center"> <img src="img/Makan Malam/salmon.jpg"  valign="top" width="150" height="120">Salmon Panggang Saus Mangga </br> 1 Porsi </br> 272 kkal</td>
<td align="center"> <img src="img/Makan Malam/supayam.jpg"  valign="top" width="150" height="120">Sup Ayam dan Sayuran </br> 1 Porsi </br> 218 kkal</td>
</tr>

<tr>
<td align="center"> <img src="img/Makan Malam/buncissayur.jpg"  valign="top" width="150" height="120">Sayur Buncis</br> 8 Sendok Makan </br> 208 kkal</td>
<td align="center"> <img src="img/Makan Malam/perkedeljagung.jpeg"  valign="top" width="150" height="120">Perkedel Jagung </br> 1 Porsi </br> 108 kkal</td>
<td align="center"> <img src="img/Makan Malam/cakejeruk.jpg"  valign="top" width="150" height="120">Cake Jeruk </br> 1 Porsi </br> 227 kkal</td>
</tr>
<tr>
<td align="center"> <img src="img/Makan Malam/kacangpolong.jpeg"  valign="top" width="150" height="120">Kacang Polong Rebus</br> 1 Porsi </br> 80 kkal</td>
<td align="center"> <img src="img/Makan Malam/miepangsit.jpeg"  valign="top" width="150" height="120">Mi Kuah Pangsit</br> 1 Porsi </br> 410 kkal</td>
<td align="center"> <img src="img/Makan Malam/bakmie.jpeg"  valign="top" width="150" height="120">Bakmi Cumi Goreng</br> 1 Porsi </br> 506 kkal</td>
</tr>

<tr>
<td align="center"> <img src="img/Makan Siang/nasigoreng.jpeg"  valign="top" width="150" height="120">Nasi Goreng Ayam</br> 1 Porsi </br> 572 kkal</td>
<td align="center"> <img src="img/Makan Siang/udanggoreng.jpg"  valign="top" width="150" height="120">Udang Goreng Tepung</br> 1 Porsi</br> 393 kkal</td>
<td align="center"> <img src="img/Makan Malam/kwetiaukerang.jpeg"  valign="top" width="150" height="120">Kwetiaw Goreng Kerang</br> 1 Porsi</br> 743 kkal</td>
</tr>

</tbody>
</table>
(Sumber: Diet Diary Herbalife)
<p>&nbsp;</p>

<p>Makan Pagi<a href="MenuDietPagi.php"> Selengkapnya... </a></p>
<p>Makan Siang<a href="MenuDietSiang.php"> Selengkapnya... </a></p>

<p>Menu makanan diet sehari-hari dapat di-variasikan sesuai selera, menurut jumlah kalori harian yang Anda butuhkan, baik itu untuk <strong>turun berat badan</strong>, <strong> naik berat badan</strong> ataupun menjaga berat badan. Selamat mencoba!</p>

</div>
<!--div id="colThree"> </div-->
<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer"> <p align="center"> @copyright 2013 MAYDAY Team </p>
</div>
</body></html>