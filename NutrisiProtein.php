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
						<li  class='active'><a href='NutrisiPenting.php'>Nutrisi</a></li>
						<li><a href='Olahraga.php'>Olahraga</a></li>
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
						<li  class='active'><a href='NutrisiPenting.php'>Nutrisi</a></li>
						<li><a href='Olahraga.php'>Olahraga</a></li>
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
<h3>Fakta Bahwa Ternyata Manfaat Air Putih Sangat Banyak</h3>
<p>Manfaat air putih sepertinya sudah menjadi rahasia umum yang beredar di seluruh masyarakat.<a href="TipsKesehatan.php">  More...</a></p>
<h3>Nutrisi dan Manfaat Susu Kedelai Bagi Tubuh</h3>
<p>Susu kedelai merupakan sumber protein nabati yang efektif untuk menjaga kesehatan dan menurunkan kolesterol.<a href="NutrisiSusu.php">  More...</a></p>
<h3>Pentingnya Kebutuhan Nutrisi</h3>
<p>Kebutuhan nutrisi sangat penting untuk diketahui oleh semua orang.<a href="NutrisiPenting.php">  More...</a></p>
<p><a href="#"><img src="images/img7.jpg" alt="" height="120" width="150" /></a></p>
</div>

<div id="ColFour">
<div style="text-align:justify;">
<h2>Macam Protein dan Kegunaannya</h2>
<p><img src="images/protein.jpg" alt="" height="120" width="150" align="left" vspace="10px" hspace="10px" /><em>Protein, salah satu kandungan makanan yang diperlukan oleh tubuh ini memiliki peran penting dalam tubuh. Sebagai bahan pembangun, protein memiliki peran dalam pembentukan sel-sel yang baru dan menggantikan sel-sel yang telah mati. Ada dua macam protein yang kita dapatkan dari makanan, protein hewani dan protein nabati. Protein hewani adalah protein yang kita peroleh dari hewan. Kita bisa mengkonsumsi daging sapi, ayam, kambing dll. telur juga merupakan sumber protein hewani yang cukup tinggi.</p>
<p>Sedangkan protein nabati adalah protein yang bisa kita peroleh dari tanaman. Kita bisa mendapatkan kandungan protein nabati dari kacang-kacangan, juga tahu dan tempe. Jika Anda ingin menerapkan pola hidup sehat dengan menghindari makanan-makanan yang mengandung karbohidrat tinggi, Anda bisa memperbanyak asupan protein dalam tubuh Anda. Protein-protein ini juga bisa digunakan menggantikan karbohidrat dalam tubuh. Meskipun demikian, mengkonsumsi karbohidrat masih diperlukan.</p>

<p><strong>Protein Nabati atau Protein Hewani</strong></p>
<p>Ada juga cara lain untuk melakukan diet. Anda bisa menjadi vegetarian. Apa itu vegetarian? Vegetarian adalah orang yang tidak mengkonsumsi apapun yang berasal dari hewan. Ada banyak macam vegetarian. Dan Anda bisa mulai melakukannya dari yang paling mudah. Pertama, ada vegetarian yang hanya tidak mengkonsumsi daging merah. Jadi mereka masih mengkonsumsi daging putih, yakni ikan. Ada juga yang tidak mengkonsumsi daging apapun. Tetapi mereka masih mengkonsumsi telur dan susu.</p>
<p> Anda juga bisa untuk tidak mengkonsumsi segala macam daging dan makanan olahan yang berasal dari hewan. Dalam tahapan ini, Anda tak lagi mengkonsumsi apapun yang berhubungan dengan hewan. Anda hanya mengkonsumsi makanan yang berasal dari tumbuhan. Tapi Anda tak perlu takut, karena meskipun Anda tidak mengkonsumsi makanan yang berasal dari hewan, Anda masih bisa  mendapatkan asupan nutrisi lengkap yang meliputi karbohidrat, lemak, dan protein dari tumbuhan, konsumsi vitamin yang tinggi akan baik untuk tubuh Anda.</p>

<p><strong>Bisakah Protein Hewani Diganti Protein Nabati?</strong></p>
<p>Selain itu, ada banyak manfaat menjadi vegetarian. Selain manfaat kesehatan tubuh, menjadi vegetarian juga akan membuat Anda awet muda. Penyakit-penyakit berbahaya seperti stroke atau kolesterol tinggi juga akan menjauh dari Anda. Meskipun dengan menjadi vegetarian Anda tidak mengkonsumsi daging dan segala hal yang berhubungan dengan daging, Anda tak perlu takut karena Anda masih bisa mengkonsumsi protein nabati dalam makanan-makanan dari tanaman dengan kandungan protein nabati.</p>
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