<?php
	session_start();
?>
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
<h3>Nutrisi dan Manfaat Susu Kedelai Bagi Tubuh</h3>
<p>Susu kedelai merupakan sumber protein nabati yang efektif untuk menjaga kesehatan dan menurunkan kolesterol.<a href="NutrisiSusu.php">  More...</a></p>
<h3>Fakta Bahwa Ternyata Manfaat Air Putih Sangat Banyak</h3>
<p>Manfaat air putih sepertinya sudah menjadi rahasia umum yang beredar di seluruh masyarakat.<a href="TipsKesehatan.php">  More...</a></p>
<h3>Macam Protein dan Kegunaannya</h3>
<p>Protein, salah satu kandungan makanan yang diperlukan oleh tubuh ini memiliki peran penting dalam tubuh.<a href="NutrisiProtein.php">  More...</a></p>
<p><a href="#"><img src="images/img7.jpg" alt="" height="120" width="150" /></a></p>
</div>

<div id="ColFour">
<div style="text-align:justify;">
<h2>Pentingnya Kebutuhan Nutrisi</h2>
<p>Kebutuhan nutrisi sangat penting untuk diketahui oleh semua orang. Karena dengan asupan nutrisi, tubuh bisa berfungsi normal untuk pertumbuhan dan pemeliharaan kesehatan. Selain itu, nutrisi juga berperan penting dalam menjaga daya tahan tubuh agar tetap bugar dan tidak mudah terserang penyakit. Kebutuhan nutrisi tidak hanya penting bagi anak-anak yang sedang mengalami masa pertumbuhan, tapi juga orang dewasa. Pada masa pertumbuhan, memang nutrisi sangat perlu diperhatikan dan diberikan secara seimbang sesuai dengan usianya. Tidak hanya untuk pertumbuhan fisik, kebutuhan nutrisi juga diperlukan untuk perkembangan mental pada usia anak. Dengan adanya nutrisi yang cukup dan berimbang, anak akan tumbuh dengan fisik yang sehat dan kuat, serta kondisi psikis yang pemberani dan banyak bertanya untuk memenuhi rasa ingin tahu. Kebutuhan nutrisi pada pertumbuhan anak tidak bisa dipisahkan antara fisik dan mental.</p>
<p>Setelah usia 18 tahun, di mana pertumbuhan anak rata-rata terhenti, kebutuhan nutrisi tetap harus dipenuhi secara seimbang demi menjaga kesehatan dan daya tahan tubuh. Nantinya, kebutuhan nutrisi harus disesuaikan dengan aktivitas, jenis kelamin, dan pola hidup orang dewasa tersebut. Yang dinamakan nutrisi terpenuhi dengan baik adalah ketika seseorang misal memenuhi kebutuhan elemen nutrien seperti karbohidrat, lemak, vitamin, protein, mineral, dan air. Dengan konsumsi nutrien yang lengkap secara teratur, orang dewasa akan terpenuhi nutrisinya. Sehingga mereka bisa menghasilkan energi yang cukup untuk menjalankan fungsi organ secara fisik, membentuk dan memperbaiki jaringan dalam tubuh, juga sebagai pelindung dan pengatur metabolisme. Seringkali banyak orang tidak peduli dengan kebutuhan nutrisi mereka dan mengkonsumsi makanan seadanya. Padahal sikap tersebut bisa mengakibatkan malnutrisi.</p>
<p>Ketika seseorang tidak bisa memenuhi kebutuhan nutrisi untuk tubuhnya sendiri, dia akan beresiko terkena malnutrisi. Keadaan tersebut akan dialami dalam bentuk penurunan berat badan karena tidak ada asupan nutrisi yang cukup dan seimbang. Tanda-tandanya adalah berat badan 10-20% di bawah normal, ada rasa nyeri pada otot, dan penurunan albumin serum. Efeknya nanti adalah fungsi organ tubuh akan terganggu dan tidak bekerja dengan baik. Jaringan tubuh pun sulit dibentuk. Selain malnutrisi, ada juga kelebihan nutrisi. Seperti yang sudah disebutkan bahwa kebutuhan nutrisi harus diberikan secara cukup dan seimbang. Kelebihan nutrisi juga bisa menyebabkan obesitas yang akan memicu timbulnya beragam penyakit. Penuhi kebutuhan nutrisi anda secara bijak, cukup, dan seimbang demi kesehatan.</p>

</div>
 <!--div id="colThree"> <a href="#"><img src="images/ad_120x600.jpg" alt="" height="600" width="120" /></a> </div-->
<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer"> <p align="center"> @copyright 2013 MAYDAY Team </p>
</div>
</body>
</html>