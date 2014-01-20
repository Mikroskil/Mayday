<?php
	session_start();
?>
<html>
<head>
<title>Makanan Anda Diet Anda</title>

<meta name="keywords" content="" />
<meta name="description" content="" />
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
<div id="header">
</div>
<div id="menu">
<?php 
			  if(empty($_SESSION['user']))
			  {
				echo"
              <ul>
                <li class='active'><a href='index.php' accesskey='1' title=''>Home</a></li>
				<li><a href='NutrisiSuplemen.php' accesskey='2' title=''>Tips Kesehatan</a></li>
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
				<li><a href='NutrisiSuplemen.php' accesskey='2' title=''>Tips Kesehatan</a></li>
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
 <!--div id="colThree"> <a href="#"><img src="images/ad_120x600.jpg" alt="" height="600" width="120" /></a> </div-->
<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
</div>
</body>
</html>