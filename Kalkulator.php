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
						<li><a href='Olahraga.php'>Olahraga</a></li>
						<li class='active'><a href='Kalkulator.php'>Kalkulator IMT</a></li>
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
						<li ><a href='Olahraga.php'>Olahraga</a></li>
						<li class='active'><a href='Kalkulator.php'>Kalkulator IMT</a></li>
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
<h2>Kalkulator Index Massa Tubuh (IMT)</h2>
<div style="text-align:justify;">
<p>Sebelum memutuskan untuk melakukan diet ada baiknya Anda menghitung dahulu apakah berat badan Anda termasuk kategori obesitas atau gemuk sehingga Anda memang perlu melakukan diet.</p>
<p>&nbsp;</p>
<p style="text-align: left;"><strong>Menghitung Indeks Massa Tubuh (IMT) / Body Mass Index</strong></p>
<p style="text-align: left;">menggunakan rumus:</p>
<p>IMT = Berat Badan (kg)/(Tinggi Badan (cm)/100)2</p>
<p>Contoh :</p>
<p>BB = 50 kg, TB = 160 cm<br />
IMT = 50/(160/100)2 = 50/2,56 = 19,53</p>

<table width="272" border="1">
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
<p style="text-align: left;">Lebih mudahnya gunakan kalkulator IMT berikut ini: </p>

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
	<p><acronym title="">IMT</acronym> Anda adalah <strong id="wet_bmicalc_bmi"></strong>.</p>

<p>&nbsp;</p>
	</div>
	<table>
	<tr> <td><p><input value="Hitung" onclick="wet_bmicalc(); return false;" type="submit"></p></td>
	<td><p><input value="Reset" type="reset"></p></td>
	</tr>
	</table>
</form></div>		<div class="cleared"></div>
    </div>
</div>		<div class="cleared"></div>
    </div>
</div>

</div>


<p>&nbsp;</p>
<p>Semoga bermanfaat</p>
<p>&nbsp;</p>


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



</div>
 <!--div id="colThree"> <a href="#"><img src="images/ad_120x600.jpg" alt="" height="600" width="120" /></a> </div-->
<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer"> <p align="center"> @copyright 2013 MAYDAY Team </p>
</div>
</body>
</html>