<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Makanan Anda Diet Anda</title>


<link href="slide.css" rel="stylesheet" type="text/css" />
<link href="default.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="css/jquery-ui-1.8.6.custom.css" rel="Stylesheet" />	
<link href="css/style.css" rel="stylesheet" type="text/css" />
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
<div style="text-align:justify;">
<h2>Menu Makanan Diet Sehat Rendah Kalori</h2>
<p>Istilah <strong>kalori</strong> dalam menu diet tentunya sudah sangat umum dikenal. Kalori adalah satuan ukur makanan yang kita konsumsi sehari-hari, dimana kebutuhan setiap orang berbeda tergantung dari usia dan berat badan. Semakin tua usia, semakin sedikit kalori yang dibutuhkan sehari-harinya. Pada umumnya kebutuhan kalori harian dapat di kategorikan sebagai berikut:</p>


<table border="1" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td valign="top" width="154">
<p align="center"><strong>BERAT BADAN</strong></p>
</td>
<td valign="top" width="154">
<p align="center"><strong>USIA 18-35 THN</strong></p>
</td>
<td valign="top" width="154">
<p align="center"><strong>USIA 36-55 THN</strong></p>
</td>
<td valign="top" width="154">
<p align="center"><strong>USIA &gt; 55 THN</strong></p>
</td>
</tr>
<tr>
<td valign="top" width="154">
<p align="center">45 kg</p>
</td>
<td valign="top" width="154">
<p align="center">1760 kal</p>
</td>
<td valign="top" width="154">
<p align="center">1570 kal</p>
</td>
<td valign="top" width="154">
<p align="center">1430 kal</p>
</td>
</tr>
<tr>
<td valign="top" width="154">
<p align="center">50kg</p>
</td>
<td valign="top" width="154">
<p align="center">1860 kal</p>
</td>
<td valign="top" width="154">
<p align="center">1660 kal</p>
</td>
<td valign="top" width="154">
<p align="center">1500 kal</p>
</td>
</tr>
<tr>
<td valign="top" width="154">
<p align="center">55kg</p>
</td>
<td valign="top" width="154">
<p align="center">1950 kal</p>
</td>
<td valign="top" width="154">
<p align="center">1760 kal</p>
</td>
<td valign="top" width="154">
<p align="center">1550 kal</p>
</td>
</tr>
<tr>
<td valign="top" width="154">
<p align="center">60kg</p>
</td>
<td valign="top" width="154">
<p align="center">2050 kal</p>
</td>
<td valign="top" width="154">
<p align="center">1860 kal</p>
</td>
<td valign="top" width="154">
<p align="center">1600 kal</p>
</td>
</tr>
<tr>
<td valign="top" width="154">
<p align="center">65kg</p>
</td>
<td valign="top" width="154">
<p align="center">2150 kal</p>
</td>
<td valign="top" width="154">
<p align="center">1960 kal</p>
</td>
<td valign="top" width="154">
<p align="center">1630 kal</p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>Untuk menurunkan berat badan, kalori harian harus dikurangi 500 kalori (300 dari makanan dan 200 dari olah raga). Untuk menjaga berat badan agar stabil, ikutilah petunjuk asupan kalori harian di atas.</p>
<p>Menjalani pola diet yang sehat sangatlah penting agar berat badan stabil. Kalori berlebih yang kita konsumsi, jika tidak diimbangi dengan olah raga maka akan disimpan di dalam tubuh sebagai lemak, terutama dibagian perut, paha, pinggul dan lengan. Setiap bahan makanan yang kita olah mempunyai kandungan kalori yang berbeda-beda tergantung cara pengolahan dan kuantitasnya.</p>
<p>Berikut adalah daftar makanan sehari-hari sebagai petunjuk dasar penyusunan menu makanan diet sehat Anda.</p>
<p>Kandungan kalori beberapa makanan sehari-hari per porsinya antara lain:</p>

<p>Makan Pagi<a href="MenuDietPagi.php"> Selengkapnya... </a></p>
<p>Makan Siang<a href="MenuDietSiang.php"> Selengkapnya... </a></p>
<p>Makan Malam<a href="MenuDietMalam.php"> Selengkapnya... </a></p>

</div> </div>
<!--div id="colThree"> </div-->
<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer"> <p align="center"> @copyright 2013 MAYDAY Team </p>
</div>
</body></html>