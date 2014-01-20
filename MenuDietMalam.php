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
<h2>Menu Makanan Diet Sehat Rendah Kalori</h2>
<p>Menu makanan diet malam hari dapat di kategorikan sebagai berikut:</p>
<table border="1" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td valign="top" width="205">
<p style="text-align: left;" align="center"><strong>NAMA (MAKAN MALAM)</strong></p>
</td>
<td valign="top" width="205">
<p align="center"><strong>PORSI</strong></p>
</td>
<td valign="top" width="205">
<p align="center"><strong>KALORI</strong></p>
</td>
</tr>
<tr>
<td valign="top" width="205">Salad ayam dan sayuran</td>
<td valign="top" width="205">
<p align="center">1 porsi</p>
</td>
<td valign="top" width="205">
<p align="center">256</p>
</td>
</tr>
<tr>
<td valign="top" width="205">Salmon panggang saus mangga</td>
<td valign="top" width="205">
<p align="center">1 porsi</p>
</td>
<td valign="top" width="205">
<p align="center">272</p>
</td>
</tr>
<tr>
<td valign="top" width="205">Sup ayam dan sayuran</td>
<td valign="top" width="205">
<p align="center">1 porsi</p>
</td>
<td valign="top" width="205">
<p align="center">218</p>
</td>
</tr>
<tr>
<td valign="top" width="205">Buncis sayur makadamia</td>
<td valign="top" width="205">
<p align="center">1 porsi</p>
</td>
<td valign="top" width="205">
<p align="center">208</p>
</td>
</tr>
<tr>
<td valign="top" width="205">Perkedel jagung</td>
<td valign="top" width="205">
<p align="center">1 buah</p>
</td>
<td valign="top" width="205">
<p align="center">108</p>
</td>
</tr>
<tr>
<td valign="top" width="205">Cake jeruk</td>
<td valign="top" width="205">
<p align="center">1 potong</p>
</td>
<td valign="top" width="205">
<p align="center">227</p>
</td>
</tr>
<tr>
<td valign="top" width="205">Kacang polong rebus</td>
<td valign="top" width="205">
<p align="center">1 mangkok</p>
</td>
<td valign="top" width="205">
<p align="center">80</p>
</td>
</tr>
</tbody>
</table>
(Sumber: Diet Diary Herbalife)
<p>&nbsp;</p>

<p>Makan Pagi<a href="MenuDietPagi.php"> Selengkapnya... </a></p>
<p>Makan Siang<a href="MenuDietSiang.php"> Selengkapnya... </a></p>

Menu makanan diet sehat sehari-hari dapat di-variasikan sesuai selera, menurut jumlah kalori harian yang Anda butuhkan, untuk menurunkan berat badan, ataupun menjaga berat badan. Selamat mencoba!


</div>
<!--div id="colThree"> </div-->
<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer"> <p align="center"> @copyright 2013 MAYDAY Team </p>
</div>
</body></html>