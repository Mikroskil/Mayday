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
<h3>Cara Mengecilkan Perut dengan Mudah</h3>
<p>Salah satu kesalahan utama untuk mengecilkan perut adalah pandangan umum bahwa untuk mendapatkan perut rata, maka latihan harus difokuskan pada satu bagian tubuh, yaitu perut.<a href="OlahragaPerut.php">  More...</a></p>
<h3>Menurunkan Berat Badan Lewat Olahraga dan Pengaturan Pola Makan</h3>
<p>Menurunkan berat badan dijalani secara berkala dengan dua cara utama yang berkesinambungan yaitu pengaturan pola makan dan olahraga teratur.<a href="OlahragaPolaMakan.php">  More...</a></p>
<p><a href="#"><img src="images/img7.jpg" alt="" height="120" width="150" /></a></p>
</div>

<div id="ColFour">
<div style="text-align:justify;">
<h2>Manfaat Jogging Bagi Tubuh</h2>
<p>Sebagai upaya menjaga kesehatan, olahraga merupakan suatu keharusan. Tidak perlu pergi ke gym melakukan serangkaian olah raga berat dengan alat-alat gym. Lari-lari kecil atau yang sering disebut jogging juga merupakan aktivitas yang sangat mudah dilakukan dalam olahraga. Tidak perlu mengeluarkan biaya mahal untuk pergi ke pusat kebugaran atau gym, selain itu jogging juga bisa dilakukan dimana saja.</p>
<p>Hebatnya, selain murah dan mudah, jogging memiliki sederet manfaat bagi kesehatan kita. Kita simak artikel dibawah ini untuk lebih mengetahui manfaat-manfaat dari olahraga jogging baik bagi kesehatan tubuh.</p>
<p><strong>Manfaat Jogging Bagi Tubuh</strong></p>
<p>Sebagai aktivitas olahraga, jogging sudah barang tentu membawa serentetan efek positif bagi kesehatan tubuh. Berikut ini adalah manfaat-manfaatnya</p>
<p>1. Membakar lemak</p>
<p>Hampir seluruh kegiatan berolahraga akan menguras tenaga. Sebagai sumber penghasil tenaga, lemak dalam tubuh akan mengalami pembakaran paling maksimal ketika seseorang berolahraga. Nah, dalam hal inilah jogging juga sangat bermanfaat membakar lemak dalam tubuh anda</p>
<p>2. Menurunkan berat badan</p>
<p>Pada manfaat nomor satu telah dijelaskan bahwa jogging sangat bermanfaat dalam membakar lemak, maka dari itu secara otomatis akan berpengaruh terhadap berat badan. Dengan jogging secara teratur, maka dapat dikatakan akan terjadi pembakaran lemak yang rutin. Dengan itu, lemak dalam tubuh tidak akan menumpuk dan tubuh akan lebih terasa fresh dan langsing.</p>
<p>3. Mencegah datangnya penyakit</p>
<p>Karena keefektifannya dalam membakar lemak, jogging juga sangat bermanfaat dalam aksi pencegahan datangnya berbagai macam penyakit. Jika jogging secara teratur dilakukan dan lemak didalam tubuh berkurang, aliran darah pun akan semakin lancar. Dengan lancarnya aliran peredaran darah, berbagai macam penyakit seperti kolesterol, stroke, jantung koroner, hipertensi akan jauh dari kehidupan anda.</p>


</div>
 <!--div id="colThree"> <a href="#"><img src="images/ad_120x600.jpg" alt="" height="600" width="120" /></a> </div-->
<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer"> <p align="center"> @copyright 2013 MAYDAY Team </p>
</div>
</body>
</html>