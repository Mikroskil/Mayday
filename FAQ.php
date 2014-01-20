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
				<li><a href='TipsKesehatan.php' accesskey='2' title=''>Tips Kesehatan</a>
					<ul>
						<li><a href='NutrisiPenting.php'>Nutrisi</a></li>
						<li><a href='Olahraga.php'>Olahraga</a></li>
					</ul>
				</li>
				<li><a href='MenuDiet.php' accesskey='3' title=''>Menu Diet</a></li>
				<li class='active'><a href='FAQ.php' accesskey='4' title=''>FAQ </a></li>
				<li><a href='register.php' accesskey='5' title=''>Register</a></li>
              </ul>";
			  }
			  else
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
				<li><a href='MenuDiet.php' accesskey='3' title=''>Menu Diet</a></li>
				<li class='active'><a href='FAQ.php' accesskey='4' title=''>FAQ </a></li>			  
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
<h2>PERTANYAAN SEPUTAR DIET</h2>
<p>(Tanya) A : Diet itu apa sih ?</p>
<p>(Jawab) B : Diet adalah manajemen makan. Diet bukan mengurangi porsi makan. Diet lebih pada bagaimana kita menyeimbangkan menu makan kita dalam sehari. 
Diet berlaku bagi semua orang, tidak hanya bagi mereka yang gemuk. </p>

<p>(Tanya) A : Kenapa sih banyak orang gagal diet ?</p>
<p>(Jawab) B : Sarapan dengan menu yang salah, Kurang konsumsi air putih dalam sehari, Mengkonsumsi pil diet tanpa disertai perbaikan pola makan yang lebih baik, Kurang aktivitas gerak / olahraga.</p>

<p>(Tanya) A : Diet pakai alat ?</p>
<p>(Jawab) B : Ya, itu bisa berhasil. Pada dasarnya alat adalah alat bantu supaya diet kita lebih optomal. Tentu disertai perbaikan pola makan dan gaya hidup supaya hasilnya lebih permanen.
Alat bisa berupa: suplemen, nutrisi, pil pelangsing, alat kedokteran, operasi.
Kesimpulannya:
Pengelolaan pola makan yang seimbang adalah dasar dari usaha kita untuk mewujudkan berat badan yang ideal dan kebugaran yang optimal.
</p>

<p>(Tanya) A : Diet dengan manajemen makan itu seperti apa ?</p>
<p>(Jawab) B : Konsep diet dengan pengelolaan pola makan kami.
Konsepnya adalah: 3x makan utama ataupun camilan
Ditambah dengan : 3 – 4.5 liter air putih sehari dan olahraga 1-2x seminggu dan mengkonsumsi buah pendukung diet sehat seperti: apel, pisang, alpukat (tanpa ditambahi gula/sirup), pepaya, semangka, pir, kiwi.
</p>

<p>(Tanya) A : Berapa kalori dalam sehari yang harus dikonsumsi ?</p>
<p>(Jawab) B : Rata-rata wanita butuh 1500 – 2000 kalori sehari.
Rata-rata pria butuh 2000 – 2500 kalori sehari.
Jika anda seorang wanita, total konsumsi 1000 kalori dalam sehari yang dibagi menjadi 3x makan, akan memaksa tubuh anda mengambil cadangan lemak anda dan dibakar menjadi kalori. Itungan matematisnya adalah anda bisa turun 2-4 kg sebulan.
</p>

<p>(Tanya) A : Apakah olahraga bisa membantu diet saya ?</p>
<p>(Jawab) B : Ya, sangat bisa.
Fungsi olahraga adalah membakar lemak di pembuluh darah dan meningkatkan metabolisme. Metabolisme yang optimal akan memudahkan organ hati untuk mencerna lemak menjadi energi yang pada intinya adalah membantu organ tubuh membakar lemak lebih banyak menjadi energi.
Olahraga juga berfungsi untuk membentuk massa otot.
Massa otot = mesin pembakar lemak. 
Setiap 1 kg massa otot kita bisa membakar 60 kalori lemak dalam sehari.
</p>

</div> </div>
<!--div id="colThree"> <a href="#"><img src="images/ad_120x600.jpg" alt="" height="600" width="120" /></a> </div-->
<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer"> <p align="center"> @copyright 2013 MAYDAY Team </p>
</div>
</body></html>