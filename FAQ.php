<?php
	session_start();	
?>
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
<p>Susu kedelai merupakan sumber protein nabati yang efektif untuk menjaga kesehatan dan menurunkan kolesterol.<a href="#">  More...</a></p>
<h3>Macam Protein dan Kegunaannya</h3>
<p>Protein, salah satu kandungan makanan yang diperlukan oleh tubuh ini memiliki peran penting dalam tubuh.<a href="#">  More...</a></p>
<h3>Pentingnya Kebutuhan Nutrisi</h3>
<p>Kebutuhan nutrisi sangat penting untuk diketahui oleh semua orang.<a href="#">  More...</a></p>
<p><a href="#"><img src="images/img7.jpg" alt="" height="120" width="150" /></a></p>
</div>

<div id="ColFour">
<h2>PERTANYAAN SEPUTAR DIET</h2>
<p>(Tanya) A : Diet itu apa sih ?</p>
<p>(Jawab) B : Diet adalah manajemen makan. Diet bukan mengurangi porsi makan. </p>&nbsp;
<p>Diet lebih pada bagaimana kita menyeimbangkan menu makan kita dalam sehari. 
Diet berlaku bagi semua orang, tidak hanya bagi mereka yang gemuk. </p>

<p>(Tanya) A : Kenapa sih banyak orang gagal diet ?</p>
<p>(Jawab) B : Sarapan dengan menu yang salah, Kurang konsumsi air putih dalam sehari, Mengkonsumsi pil diet tanpa disertai perbaikan pola makan yang lebih baik, Kurang aktivitas gerak / olahraga.</p>

<p>(Tanya) A : Diet pakai alat ?</p>
<p>(Jawab) B : Ya, itu bisa berhasil....Pada dasarnya alat adalah alat bantu supaya diet kita lebih optomal. Tentu disertai perbaikan pola makan dan gaya hidup supaya hasilnya lebih permanen.
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
Olahraga juga berfungi untuk membentuk massa otot.
Massa otot = mesin pembakar lemak. 
Setiap 1 kg massa otot kita bisa membakar 60 kalori lemak dalam sehari.
</p>

</div>
<!--div id="colThree"> <a href="#"><img src="images/ad_120x600.jpg" alt="" height="600" width="120" /></a> </div-->
<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
</div>
</body></html>