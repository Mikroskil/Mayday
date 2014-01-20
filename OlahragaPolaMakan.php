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
						<li  class='active' ><a href='Olahraga.php'>Olahraga</a></li>
						<li><a href='Kalkulator.php'>Kalkulator IMT</a></li>
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
					<li> <a href='NutrisiPenting.php'>Nutrisi</a></li>
						<li  class='active' ><a href='Olahraga.php'>Olahraga</a></li>
						<li><a href='Kalkulator.php'>Kalkulator IMT</a></li>
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
<h3>Cara Mengecilkan Perut dengan Mudah</h3>
<p>Salah satu kesalahan utama untuk mengecilkan perut adalah pandangan umum bahwa untuk mendapatkan perut rata, maka latihan harus difokuskan pada satu bagian tubuh, yaitu perut.<a href="OlahragaPerut.php">  More...</a></p>
<p><a href="#"><img src="images/img7.jpg" alt="" height="120" width="150" /></a></p>
</div>

<div id="ColFour">
<div style="text-align:justify;">
<h2>Menurunkan Berat Badan Lewat Olahraga dan Pengaturan Pola Makan</h2>
<p><img src="images/polamakan.jpg" alt="" height="120" width="150" align="left" vspace="10px" hspace="10px" /><em>Menurunkan berat badan dijalani secara berkala dengan dua cara utama yang berkesinambungan yaitu pengaturan pola makan dan olahraga teratur. Kedua cara ini sebaiknya dilakukan secara bersamaan untuk menjaga bentuk tubuh, kebugaran, dan elastisitas kulit ketika berat badan menyusut. Pengaturan pola makan tidak berarti Anda harus mengurangi secara drastis porsi makan harian. Sebaliknya, hal ini justru memicu kenaikan berat badan, sebab pengurangan porsi makanan secara drastis akan menstimulasi otak untuk mengirim sinyal rasa lapar dan menyebabkan Anda ingin makan lebih banyak dari sebelumnya.</p>

<p><strong>Menurunkan Berat Badan lewat Pola Makan</strong></p>
<p>Pengaturan pola makan mencakup jenis, jumlah, dan jam makan yang disesuaikan dengan aktivitas harian. Untuk menurunkan bobot tubuh, asupan kalori menjadi salah satu aspek penting. Tubuh perlu asupan kalori sebagai sumber energi dalam beraktivitas. Untuk itu, pilihlah sumber kalori yang berasal dari karbohidrat kompleks dan berserat. Sebab, nutrisi ini diserap secara berkala oleh tubuh sehingga pemanfaatan kalori sebagai sumber energi berlangsung lebih efektif. Serat yang terkandung di dalamnya membantu kita merasa kenyang walaupun makan dalam porsi kecil.</p>
<p>Sayuran dan buah menjadi aspek penting lainnya dalam proses penurunan berat badan. Sayuran menempati porsi terbanyak dalam piring makan Anda di setiap waktu makan. Vitamin dan mineral yang terkandung di dalam sayur-sayuran membantu menjaga kesehatan dan proses metabolisme serta menurunkan berat badan sebab lebih banyak porsi sayuran berarti mengurangi asupan lemak dalam tubuh.</p>
<p>Sumber protein nabati menjadi kombinasi gizi seimbang selanjutnya. Nutrisi ini dapat diperoleh dari kacang-kacangan seperti kedelai. Asupan protein nabati dan lemak tak jenuh membantu melancarkan proses metabolisme dan regenerasi sel, serta mengurangi asupan lemak jenuh yang banyak terdapat pada daging.</p>

<p><strong>Olahraga untuk menurunkan Berat Badan</strong></p>
<p>Pengaturan pola makan ini sebaiknya diimbangi dengan olahraga rutin setiap hari seperti peregangan atau jogging. Bagi mereka yang berupaya menurunkan berat badan disarankan untuk membuat jurnal pola makan untuk mengevaluasi asupan gizi yang dikonsumsi selama proses penurunan berat badan. Penurunan berat badan ideal adalah 1,5 kg per minggu. Pengecekan berat badan secara berkala minimal seminggu sekali membantu proses menurunkan berat badan.</p>


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
</div>
<div id="footer"> <p align="center"> @copyright 2013 MAYDAY Team </p>
</div>
</body>
</html>