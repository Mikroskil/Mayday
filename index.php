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
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-titillium-250.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
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
					<figcaption>Makanan Anda Diet Anda</figcaption>
				</figure><!--
				--><figure>
					<img src="img/dummy-640x310-2.jpg" alt="" width="815" height="200" />
					<figcaption>Makanan Sehat</figcaption>
				</figure><!--
				--><figure>
					<img src="img/dummy-640x310-3.jpg" alt="" width="815" height="200" />
					<figcaption>Sushi<em>(do)</em> time</figcaption>
				</figure><!--
				--><figure>
					<img src="img/dummy-640x310-4.jpg" alt="" width="815" height="200" />
					<figcaption>Juventus FC</figcaption>
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
                <li class='active'><a href='index.php' accesskey='1' title=''>Home</a></li>
				<li><a href='TipsKesehatan.php' accesskey='2' title=''>Tips Kesehatan</a>
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
				<li class='active'><a href='index.php' accesskey='1' title=''>Home</a></li>
				<li ><a href='TipsKesehatan.php' accesskey='2' title=''>Tips Kesehatan</a>
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
<?php
		if(empty($_SESSION['user']))
		{
			echo"
				<div class='g1'>
				  <div class='g2'>
					<div class='gadget'>
					  <h2 class='star'> Login</h2>
					  
					  <div class='clr'></div>
					  <ul class='sb_menu'>
						<form name='form1' method='post' action='script/login.php'>
							<table width='155' border='0' align='center'>
								<tr>
									<td><ul class='sb_menu'>Username</ul></td>
									<td><ul class='sb_menu'>:</ul></td>					
									<td width='157'><input name='ds_user' type='text' id='ds_user'></td>
								</tr>
								<tr>
									<td><ul class='sb_menu'>Password</ul></td>
									<td><ul class='sb_menu'>:</ul></td>
									<td><input name='password' type='password' id='password'></td>
								</tr>
								<tr>
									<td> </td>
									<td colspan='2'>&nbsp;&nbsp;<input type='submit' name='Submit' value='Login '
										style='background -color:#CCCCCC '>&nbsp; &nbsp;
										<a href='register.php' class='style2'>Daftar</a> 
									</td>
								</tr>
							</table>
						</form>
					  </ul>
					</div>
				  </div>
				</div>";
		}
		
		else
		{
			echo"
				<div class='g1'>
				  <div class='g2'>
					<div class='gadget'>
					  <h2 class='star'> Selamat Datang</h2>
					  
					  <div class='clr'></div>
					  <ul class='sb_menu'>
						<form name='form1' method='post' action='script/login.php'>
							<table width='155' border='0' align='center'>
								<tr>
									<td>
             							<ul class='sb_menu'>
										<li></li>
               							<li> Selamat datang $_SESSION[Nama], <a href='script/logout.php'> <font color='#68CAFD'> Logout </font></a></li>
										</ul>
									</td>
								</tr>
							</table>
						</ul>
					</div>
				  </div>
				</div>";
		}
?>


			  
<h2>Recent Updates</h2>
<h3>Nutrisi dan Manfaat Susu Kedelai Bagi Tubuh</h3>
<p>Susu kedelai merupakan sumber protein nabati yang efektif untuk menjaga kesehatan dan menurunkan kolesterol.<a href="NutrisiSusu.php">  More...</a></p>
<h3>Macam Protein dan Kegunaannya</h3>
<p>Protein, salah satu kandungan makanan yang diperlukan oleh tubuh ini memiliki peran penting dalam tubuh.<a href="NutrisiProtein.php">  More...</a></p>
<h3>Pentingnya Kebutuhan Nutrisi</h3>
<p>Kebutuhan nutrisi sangat penting untuk diketahui oleh semua orang.<a href="NutrisiPenting.php">  More...</a></p>
<p><a href="#"><img src="images/img7.jpg" alt="" height="120" width="150" /></a></p>
<div class="set-box set-block widget wet_bmicalc" id="wet_bmicalc">
    <div class="set-box-body set-block-body"><div class="set-bar set-blockheader">
    <div class="t"><b>Kalkulator IMT (Indeks Massa Tubuh)</b></div>
</div><div class="set-box set-blockcontent">
    <div class="set-box-body set-blockcontent-body"><script type="text/javascript">
function wet_bmicalc()
{
	var theform = document.getElementById('wet_bmicalc_form');
	var bmi = document.getElementById('wet_bmicalc_bmi');
	var pane = document.getElementById('wet_bmicalc_pane');
	var h = theform.wet_bmicalc_height.value;
	h = h.replace(/\./, ".");
	if ( h > 100 ) h = h / 100;

	var w = theform.wet_bmicalc_weight.value;
	w = w.replace(/\./, ".");
	if ( w * h > 0 ) {
		bmi.innerHTML = (w / (h * h)).toFixed(1).replace(/\./, ".");
		pane.style.display = "block";
	} else {
		pane.style.display = "none";
	}
}
</script>
<div style="margin-top:5px;"><noscript><p>This Widget requires Javascript</p></noscript><form id="wet_bmicalc_form" method="post">
	<p>
	<label for="wet_bmicalc_height">Tinggi dalam cm:</label><br>
	<input id="wet_bmicalc_height" name="wet_bmicalc_height" size="6" type="text">
	</p>
	<p>
	<label for="wet_bmicalc_weight">Berat dalam kg:</label><br>
	<input id="wet_bmicalc_weight" name="wet_bmicalc_weight" size="6" type="text">
	</p>
	<div id="wet_bmicalc_pane" style="display:none">
	<p><acronym title="Indeks Massa Tubuh">IMT</acronym> Anda adalah <strong id="wet_bmicalc_bmi"></strong>.</p>
	
	<p style="text-align: left;"><strong>Tabel Indeks Massa Tubuh</strong></p>
<table border="1" width="230">
<tbody>
<tr>
<td style="text-align: center;" align="center"><strong>Indeks Massa Tubuh</strong></td>
<td align="center"><strong>Kategori</strong></td>
</tr>
<tr>
<td align="center">&lt;18</td>
<td align="center">Kurus</td>
</tr>
<tr>
<td align="center">18,5 s.d 24,9</td>
<td align="center">Normal</td>
</tr>
<tr>
<td align="center">25 s.d 29,9</td>
<td align="center">Gemuk</td>
</tr>
<tr>
<td align="center">&gt;30</td>
<td align="center">Obesitas</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
	</div>
	<p><input value="Hitung" onclick="wet_bmicalc(); return false;" type="submit"></p>
</form></div>		<div class="cleared"></div>
    </div>
</div>		<div class="cleared"></div>
    </div>
</div>

</div>

<div id="ColFour">
	<h2>Selamat datang di Situs Kami</h2>
	<div style="text-align:justify;">
	<p><em><strong>Makanan Anda Diet Anda</strong></em>
	adalah program dimana pentingnya kesadaran masyarakat atas kesehatan tubuh, memakan 
	makanan sehat berarti anda peduli dengan kesehatan anda. Karena penyakit yang timbul 
	tidak sadar berasal dari makanan yang kita makan sehari-hari, misalnya <i>Junkfood</i> dll.</p>
	<p>Bagi seseorang yang ingin menjalani program diet, menghitung kalori makanan merupakan suatu keharusan. Pasalnya ada makanan yang dikonsumsi dalam porsi besar tidak akan mempengaruhi berat badan, misalnya sayur-sayuran dan buah-buahan. Begitu juga ada makanan yang meskipun dikonsumsi dalam porsi kecil namun dapat mempengaruhi penambahan berat badan, misalnya biskuit, roti cokelat dan kue tart. Dengan demikian menghitung kalori makanan ketika akan melakukan program diet perlu direncanakan matang. Hal ini bertujuan agar program diet sukses dan sesuai dengan hasil yang harapkan</p>
	<p>Beberapa tips kesehatan :</p>
	<ol>
	<li><a href="#">Nutrisi Makanan</a></li>
	<li><a href="#">Olahraga</a></li>
	<li><a href="#">Gaya Hidup</a></li>
	</ol>
	<h3>Makan sehat = Hidup sehat!</h3>
	<p>Gaya hidup sehat dapat dicerminkan dari pola hidup yg sehat seperti dari pola makan dan "apa" yang akan di makan. Maka tida heran jika pada umumnya seorang vegetarian memeliki kebugaran yang lebih.</p>
	</div>
</div>
<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer"> <p align="center"> @copyright 2013 MAYDAY Team </p>
</div>
</body>
</html>