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
						<li ><a href='NutrisiPenting.php'>Nutrisi</a></li>
						<li ><a href='Olahraga.php'>Olahraga</a></li>
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
<h3>Nutrisi dan Manfaat Susu Kedelai Bagi Tubuh</h3>
<p>Susu kedelai merupakan sumber protein nabati yang efektif untuk menjaga kesehatan dan menurunkan kolesterol.<a href="NutrisiSusu.php">  More...</a></p>
<h3>Macam Protein dan Kegunaannya</h3>
<p>Protein, salah satu kandungan makanan yang diperlukan oleh tubuh ini memiliki peran penting dalam tubuh.<a href="NutrisiProtein.php">  More...</a></p>
<h3>Pentingnya Kebutuhan Nutrisi</h3>
<p>Kebutuhan nutrisi sangat penting untuk diketahui oleh semua orang.<a href="NutrisiPenting.php">  More...</a></p>
<p><a href="#"><img src="images/img7.jpg" alt="" height="120" width="150" /></a></p>
</div>

<div id="ColFour">
<div style="text-align:justify;">
<h2>Fakta Bahwa Ternyata Manfaat Air Putih Sangat Banyak</h2>
<p><img src="images/airputih.jpeg" alt="" height="120" width="150" align="left" vspace="10px" hspace="10px" /><em>Manfaat air putih sepertinya sudah menjadi rahasia umum yang beredar di seluruh masyarakat. Meski masih banyak diantara mereka yang menganggap bahwa manfaat air putih hanya sebagai pelepas dahaga, namun tidak dipungkiri bahwa ternyata air putih memiliki khasiat yang lebih besar. Terutama bagi kesehatan, air putih seperti menjadi konsumsi wajib yang harus diminum setiap hari.</p>
<p>Air putih dipercaya bisa menyembuhkan berbagai macam penyakit dengan cara yang mudah, murah, dan secara kontinu. Meski kebutuhan konsumsi air putih berbeda-beda setiap orang tergantung jenis kelamin, berat badan, cuaca, dan aktivitas sehari-hari, minum air putih secara teratur tetap harus dilakukan secara disiplin. Tidak hanya bagi masyarakat umum, para selebriti pun banyak yang mengungkapkan bahwa rahasia kecantikan mereka adalah hasil dari manfaat air putih yang diminum secara teratur.</p>
<p>Biasakan minum air putih di pagi hari tak lama setelah anda bangun tidur. Manfaat air putih yang diminum pagi hari akan meningkatkan fungsi metabolisme tubuh. Karena 2/3 bagian tubuh manusia berupa air, tentu fungsi-fungsi bagian tubuh membutuhkan air agar bekerja secara optimal. Sehingga ketika anda minum air putih secara teratur di pagi hari, akan bermanfaat meningkatkan energi dalam tubuh. Selain menambah energi, manfaat air putih yang diminum di pagi hari juga akan membantu fungsi ginjal untuk menghilangkan racun. Seperti yang diketahui proses metabolisme tubuh untuk mencerna makanan dan membuang limbah dari sistem tubuh dilakukan pada malam hari. Karena itu saat pagi hari, air putih digunakan untuk memperlancar pembuangan sisa makanan dan racun-racun tubuh.</p>
<p>Untuk kecantikan yang menjadi tip para selebriti, manfaat air putih ternyata bisa digunakan sebagai diet menu diet yang paling baik dibanding jenis minuman lain. Seringkali seseorang tidak bisa membedakan mana rasa haus dan rasa lapar. Lalu, mereka akan makan makanan apapun padahal yang tubuh mereka butuhkan hanyalah asupan air minum.</p>
<p>Karena itu, ketika merasakan kekosongan perut, jangan langsung mengkonsumsi makanan berat, minum air putih terlebih dulu lebih baik. Dengan begitu, air putih membantu menurunkan nafsu makan sehingga bisa membuat berat badan stabil. Selain itu, manfaat air putih juga bisa menghilangkan kotoran dalam tubuh secara lebih cepat melalui urin. Disarankan minum air putih hangat sebelum makan. Manfaat air putih yang lain untuk kecantikan adalah membuat tubuh lebih bugar, kulit lebih lembab, dan segar.</p>
</div>

<!-- FACEBOOK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=450322228361749";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="http://localhost/kesehatan" data-numposts="5" data-colorscheme="light"></div>
<!-- END FACEBOOK -->
</div>

<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer"> <p align="center"> @copyright 2013 MAYDAY Team </p>
</div>
</body>
</html>