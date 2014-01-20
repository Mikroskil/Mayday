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
<h3>Manfaat Jogging Bagi Tubuh</h3>
<p>Sebagai upaya menjaga kesehatan, olahraga merupakan suatu keharusan. Tidak perlu pergi ke gym melakukan serangkaian olah raga berat dengan alat-alat gym.<a href="Olahraga.php">  More...</a></p>
<h3>Menurunkan Berat Badan Lewat Olahraga dan Pengaturan Pola Makan</h3>
<p>Menurunkan berat badan dijalani secara berkala dengan dua cara utama yang berkesinambungan yaitu pengaturan pola makan dan olahraga teratur.<a href="OlahragaPolaMakan.php">  More...</a></p>
<p><a href="#"><img src="images/img7.jpg" alt="" height="120" width="150" /></a></p>
</div>

<div id="ColFour">
<div style="text-align:justify;">
<h2>Cara Mengecilkan Perut dengan Mudah</h2>

<p>Salah satu kesalahan utama untuk mengecilkan perut adalah pandangan umum bahwa untuk mendapatkan perut rata, maka latihan harus difokuskan pada satu bagian tubuh, yaitu perut. Kombinasi push-up dan sit-up menjadi latihan yang paling sering dilakukan untuk mencapai target ini, namun seringkali bentuk perut tidak menunjukkan perubahan walaupun latihan telah lama dilakukan.</p>

<p><strong>Cara Mengecilkan Perut: Postur dan Latihan Teratur</strong></p>
<p>Cara pertama untuk mengecilkan perut adalah memperbaiki postur Anda. Seringkali perut terlihat buncit karena kita duduk, berdiri, atau berjalan tidak dalam posisi tegap. Berdiri dengan bersandar pada tembok dan lihat diri Anda di cermin. Perbaiki postur Anda dan perhatikan, posisi telinga usahakan sejajar dengan bahu, dada terbuka lebar atau membusung, dan berat badan didistribusikan secara proporsional pada kedua kaki. Postur ini akan menstimulasi bagian perut untuk tertarik dengan sendirinya ke posisi ideal dan memperbaiki penampilan Anda.</p>
<p>Cara mengecilkan perut selanjutnya adalah kombinasi antara latihan dan pola makan. Latihan ini melibatkan seluruh anggota tubuh, tidak hanya perut, dan juga kardiovaskular. Pilates dan yoga menjadi pilihan untuk latihan teratur ini. Pilates menjadikan perut Anda sebagai inti utama latihan, namun gerakannya juga melibatkan anggota tubuh lainnya seperti lengan, kaki, punggung, dan tubuh bagian bawah. Gerakan perlahan dan kontinyu dalam yoga juga membantu mengencangkan dan menjaga kelenturan baik otot perut maupun otot tubuh lainnya.</p>

<p><strong>Cara Mengecilkan Perut: Diet Rendah Kalori</strong></p>
<p>Pola makan juga berpengaruh pada upaya mengecilkan perut. Atur pola makan Anda dengan diet rendah kalori. Diet ini berarti Anda mengurangi atau mengganti jenis asupan karbohidrat. Tubuh tetap memerlukan kalori untuk beraktivitas. Oleh karena itu, atur asupan karbohidrat Anda agar mengandung karbohidrat kompleks dan serat yang banyak terdapat pada beras merah, oatmeal, dan gandum utuh.</p>
<p>Upaya mengecilkan perut berlangsung secara terus-menerus dalam waktu lama. Oleh karena itu, set target Anda dalam hitungan bulan untuk mendapatkan perut rata yang diidamkan. Di sisi lain, faktor genetis juga berperan menentukan bentuk perut Anda. Jika Anda terlahir dari keluarga dengan bentuk tulang besar dan bentuk tubuh berlekuk, maka set target Anda agar realistis dengan faktor genetis yang dimiliki sebagai cara mengecilkan perut.</p>
</div>
 <!--div id="colThree"> <a href="#"><img src="images/ad_120x600.jpg" alt="" height="600" width="120" /></a> </div-->
<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer"> <p align="center"> @copyright 2013 MAYDAY Team </p>
</div>
</body>
</html>