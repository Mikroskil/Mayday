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
	
		<a class="commands prev commands1" href="#sl_i4" title="Go to last slide">&lt;</a>
		<a class="commands next commands1" href="#sl_i2" title="Go to 2nd slide">&gt;</a>
		<a class="commands prev commands2" href="#sl_i1" title="Go to 1rst slide">&lt;</a>
		<a class="commands next commands2" href="#sl_i3" title="Go to 3rd slide">&gt;</a>
		<a class="commands prev commands3" href="#sl_i2" title="Go to 2nd slide">&lt;</a>
		<a class="commands next commands3" href="#sl_i4" title="Go to 4th slide">&gt;</a>
		<a class="commands prev commands4" href="#sl_i3" title="Go to 3rd slide">&lt;</a>
		<a class="commands next commands4" href="#sl_i1" title="Go to first slide">&gt;</a>
		
		<a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>
		<a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>
		
		<div class="container">
			<div class="c_slider"></div>
			<div class="slider">
				<figure>
					<img src="img/dummy-640x310-1.jpg" alt="" width="640" height="310" />
					<figcaption>The mirror of soul</figcaption>
				</figure><!--
				--><figure>
					<img src="img/dummy-640x310-2.jpg" alt="" width="640" height="310" />
					<figcaption>Let's cross that bridge when we come to it</figcaption>
				</figure><!--
				--><figure>
					<img src="img/dummy-640x310-3.jpg" alt="" width="640" height="310" />
					<figcaption>Sushi<em>(do)</em> time</figcaption>
				</figure><!--
				--><figure>
					<img src="img/dummy-640x310-4.jpg" alt="" width="640" height="310" />
					<figcaption>Waking Life</figcaption>
				</figure>
			</div>
		</div>
		
		<span id="timeline"></span>
		
		<ul class="dots_commands"><!--
			--><li><a title="Show slide 1" href="#sl_i1">Slide 1</a></li><!--
			--><li><a title="Show slide 2" href="#sl_i2">Slide 2</a></li><!--
			--><li><a title="Show slide 3" href="#sl_i3">Slide 3</a></li><!--
			--><li><a title="Show slide 4" href="#sl_i4">Slide 4</a></li>
		</ul>
		
	</section>
<div id="menu">
<?php 
			  if(empty($_SESSION['user']))
			  {
				echo"
              <ul>
                <li ><a href='index.php' accesskey='1' title=''>Home</a></li>
				<li class='active'><a href='NutrisiSuplemen.php' accesskey='2' title=''>Tips Kesehatan</a></li>
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
				<li class='active'><a href='NutrisiSuplemen.php' accesskey='2' title=''>Tips Kesehatan</a></li>
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
<p>Protein, salah satu kandungan makanan yang diperlukan oleh tubuh ini memiliki peran penting dalam tubuh.<a href="#">  More...</a></p>
<h3>Pentingnya Kebutuhan Nutrisi</h3>
<p>Kebutuhan nutrisi sangat penting untuk diketahui oleh semua orang.<a href="#">  More...</a></p>
<p><a href="#"><img src="images/img7.jpg" alt="" height="120" width="150" /></a></p>
</div>

<div id="ColFour">
<div style="text-align:justify;">
<h2>Penjelasan Tentang Suplemen Makanan</h2>
<p> Suplemen makanan atau food supplement merupakan produk yang mengandung nutrisi yang dibutuhkan tubuh. Nutrisi yang biasanya terkandung dalam suplemen makanan biasanya vitamin, mineral, dan asam amino yang merupakan bagian penyusun protein. Namun, apakah konsumsi terhadap suplemen makanan ini wajib adanya?</p>

<p><strong>Apakah Suplemen Makanan Diperlukan?</strong></p>
<p>Seperti ulasan yang telah dipaparkan diatas, manfaat suplemen makanan adalah hanya untuk melengkapi diet atau pola makan yang kurang sehat. penggunaan suplemen makanan tidak bisa menggantikan fungsi makanan secara seluruhnya. Karena, suplemen makanan juga tidak menyediakan seluruh nutrisi yang dibutuhkan oleh tubuh dengan kata lain, pengonsumsian suplemen makanan bukanlah hal mutlak yang harus dilakukan oleh setiap orang, tapi dapat menjadi sebuah anjuran untuk mendampingi makanan yang kita konsumsi sehari-hari.</p>
<p>Berikut ini beberapa kondisi dimana suplemen makanan sangat dianjurkan untuk dikonsumsi:</p>
<p>1.Ketika anda merasa letih dan kelelahan dari aktivitas yang melelahkan</p>
<p>2.Ketika anda tidak enak badan karena panas dalam, lesu dan flu</p>
<p>3.Ketika terjadi ketidakseimbangan metabolism dalam tubuh dikarenakan system metabolism yang terganggu.</p>
<p>4.Masa pasca sakit. Pada kondisi ini, tubuh anda akan sangat membutuhkan asupan nutrisi yang baik. oleh karena itu, suplemen makanan akan sangat membantu memulihkan kondisi anda setelah sakit.</p>
<p>5.Ketika kondisi cuaca yang buruk. Pada masa-masa seperti ini, penting bagi anda untuk tetap fit agar tidak mudah terjangkit virus atau penyakit yang disebabkan cuaca buruk. Oleh karena itu, mengkonsumsi makanan sehat dan berolahraga akan sangat membantu.</p>
<p>6.Mempertahankan kondisi kesehatan. Kondisi kesehatan dapat dijaga dengan pola hidup sehat yang termasuk didalamnya pola makan sehat, namun hal itu akan lebih sempurna lagi bila didukung suplemen makanan.</p>
</div>
</div>
 <!--div id="colThree"> <a href="#"><img src="images/ad_120x600.jpg" alt="" height="600" width="120" /></a> </div-->
<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
</div>
</body>
</html>