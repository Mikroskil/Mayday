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
<script type="text/javascript" src="js/jquery-ui-1.8.6.custom.min.js"></script>
<script>
jQuery(document).ready(function($) {
  $('.popup').click(function(event) {
    var width  = 575,
        height = 400,
        left   = ($(window).width()  - width)  / 2,
        top    = ($(window).height() - height) / 2,
        url    = this.href,
        opts   = 'status=1' +
                 ',width='  + width  +
                 ',height=' + height +
                 ',top='    + top    +
                 ',left='   + left;
    
    window.open(url, 'twitter', opts);
 
    return false;
  });
   });
</script>
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
				<li ><a href='TipsKesehatan.php' accesskey='2' title=''>Tips Kesehatan</a>
					<ul>
						<li><a href='NutrisiPenting.php'>Nutrisi</a></li>
						<li><a href='Olahraga.php'>Olahraga</a></li>
					</ul>
				</li>
				<li><a href='MenuDiet.php' accesskey='3' title=''>Menu Diet</a></li>
				<li><a href='FAQ.php' accesskey='4' title=''>FAQ </a></li>
				<li class='active'><a href='register.php' accesskey='5' title=''>Register</a></li>
              </ul>";
			  }
			  else
			  {
				echo"
			  <ul>
				<li ><a href='index.php' accesskey='1' title=''>Home</a></li>
				<li ><a href='TipsKesehatan.php' accesskey='2' title=''>Tips Kesehatan</a>
					<ul>
						<li><a href='NutrisiPenting.php'>Nutrisi</a></li>
						<li><a href='Olahraga.php'>Olahraga</a></li>
					</ul>
				</li>
				<li><a href='MenuDiet.php' accesskey='3' title=''>Menu Diet</a></li>
				<li><a href='FAQ.php' accesskey='4' title=''>FAQ </a></li>			  
				<li class='active'><a href='profil.php'>Profil</a></li>          
              </ul>";	
			  }
			  ?>
</div>
<div id="content">
<div id="colOne">

<?php echo" <h2> Hai, $_SESSION[Nama]</h2>";
$usernama = $_SESSION['user']; 
//data yang lama
$host = "localhost";
$username = "root";
$password = "";
$databasename = "dbsehat";
$connection = mysql_connect($host, $username, $password) or die("Kesalahan Koneksi ... !!");
mysql_select_db($databasename, $connection) or die("Databasenya Error");

$sql = mysql_query("SELECT * FROM user WHERE Username = '$usernama'");
$data = mysql_fetch_array($sql);
$hasil = mysql_num_rows($sql);

if($hasil>0)
	$picprofil = $data['nama_image'];
else
	$picprofil = "";
?>

<form method="POST"  enctype="multipart/form-data" action="prosesupload.php">
<div id="upload"  >
		<p>Silahkan klik &quot;<em><strong>Browse</strong></em>&quot; , pilih foto kemudian klik &quot;<strong><em>Submit</em></strong>&quot;.
        </p>
        <p>
          <input type="hidden" name="user" value="<?php echo $usernama; ?>">
          <input name="Filegambar" type="file" id="imgfile" size="35" />
          </p>
        <p>
        <input type="submit" name="Submit" value="Submit" />
</div>

</form>

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

<!-- <h2>Profile</h2> -->
<?php
if($picprofil!=""){
	$picture = $picprofil;
}
else if($_SESSION['Jenis_Kelamin']=='laki-laki'){
	$picture ='images/male.jpg';
}else{
	$picture ='images/female.jpg';
}
?>
<table width="570" border="0" align="center" cellpadding="0">
<tr>
<td height="26" colspan="4">Your Profile Information, <?php echo"<a href='script/logout.php'><font color='#FF0000'> Logout </font></a>"?> </td>
</tr>
<tr>
<td width="129" rowspan="7"><img src="<?php echo $picture ?>" width="129" height="129" alt="no image found"/></td>
<td width="130" valign="top"><div align="left">Nama Lengkap </div></td><td >:</td>
<td width="280" valign="top"><?php echo"$_SESSION[Nama]";?></td>
</tr>
<tr>
<td valign="top"><div align="left">Jenis Kelamin </div></td><td>:</td>
<td valign="top"><?php echo"$_SESSION[Jenis_Kelamin]";?></td>
</tr>
<tr>
<td valign="top"><div align="left">Tinggi Badan </div></td><td>:</td>
<td valign="top"><?php echo"$_SESSION[Tinggi_Badan] ";?>Cm</td>
</tr>
<tr>
<td valign="top"><div align="left">Berat Badan </div></td><td>:</td>
<td valign="top"><?php echo"$_SESSION[Berat_Badan] ";?>Kg</td>
</tr>
<tr>
<td valign="top"><div align="left">Tanggal Bergabung </div></td><td>:</td>
<td valign="top"><?php echo"$_SESSION[tanggal]";?></td>
</tr>
<tr>
<td valign="top"><div align="left">Email </div></td><td>:</td>
<td valign="top"><?php echo"$_SESSION[email]";?></td>
</tr>

</table>

<?php
function timeDiff($firstTime, $lastTime){
$firstTime = strtotime($firstTime);
$lastTime = strtotime($lastTime);
$timeDiff = $lastTime - $firstTime;

return $timeDiff;
}

function get_age($birth_date){
 return floor((time() - strtotime($birth_date))/31556926);
}


$difference = abs(floor(timeDiff($_SESSION['tanggal'], date("Y-m-d H:i:s"))));
$usia = get_age($_SESSION['tanggal_lahir']);
$years = abs(floor($difference / 31536000));
$days = abs(floor(($difference - ($years*31536000))/86400));
$hours = abs(floor(($difference - ($years*31536000) - ($days*86400))/3600));
$min = abs(floor(($difference - ($years*31536000) - ($days*86400) - ($hours * 3600))/60));
#floor($difference / 60);

echo"<h2>Umur anda sekarang : <b>". $usia . " Tahun.</b></h2>";
echo"<h2>Selamat Anda telah mengikuti program diet sehat selama : <b>". $days . " Hari.</b></h2>";
?>


<div id="result">
<form id="formmenu" method="post" >
<table width="570" border="0" align="center" cellpadding="0">
<tr>
<td height="26" colspan="4">MENU MAKANAN</td>
</tr>
<tr>
<td width="80" valign="top"><div align="left">Pagi </div></td><td >:</td>
<td><select id="makananPagi" name="makananPagi">
  <option value="Oatmeal">Oatmeal</option>
  <option value="Susu Segar">Susu segar</option>
  <option value="Jus Apel">Jus apel</option>
  <option value="Pancake Kentang">Pancake kentang</option>
  <option value="Mashed potatoes">Mashed potatoes</option>
  <option value="Roti gandum">Roti gandum</option>
  <option value="Telur rebus">Telur rebus</option>
</select>
</td>
</tr>
<tr>
<td valign="top"><div align="left">Siang </div></td><td>:</td>
<td><select id="makananSiang" name="makananSiang">
  <option value="Udang tumis cabai">Udang tumis cabai</option>
  <option value="Lumpia ayam sambal kacang">Lumpia ayam sambal kacang</option>
  <option value="Tumis brokoli">Tumis brokoli</option>
  <option value="Nasi merah">Nasi merah</option>
  <option value="Sayur asem">Sayur asem</option>
  <option value="Ayam panggang lada hitam">Ayam panggang lada hitam</option>
  <option value="Sayur bayam">Sayur bayam</option>
  <option value="Mangga harum manis">Mangga harum manis</option>
  <option value="Pepaya">Pepaya</option>
</select>
</td>
</tr>
<tr>
<td valign="top"><div align="left">Malam </div></td><td>:</td>
<td><select id="makananMalam" name="makananMalam">
  <option value="Salad ayam dan sayuran">Salad ayam dan sayuran</option>
  <option value="Sup ayam dan sayuran">Sup ayam dan sayuran</option>
  <option value="Salmon panggang saus mangga">Salmon panggang saus mangga</option>
  <option value="Buncis sayur makadamia">Buncis sayur makadamia</option>
  <option value="Perkedel jagung">Perkedel jagung</option>
  <option value="Cake jeruk">Cake jeruk</option>
  <option value="Kacang polong rebus">Kacang polong rebus</option>
</select>
</td>
</tr>
<tr><td colspan="3"><input type="submit" name="button" id="button" value="Lihat Jumlah Kalori" /></td> </tr>

</script>
</table>
</div>
</form>

<?php 

if($hasil>0) {
	$pagi=$data['Pagi'];
	$Siang=$data['Siang'];
	$Malam=$data['Malam'];
}


//data yg baru
$pagi = isset($_POST['makananPagi']) ? $_POST['makananPagi'] : $pagi;
$Siang = isset($_POST['makananSiang']) ? $_POST['makananSiang'] : $Siang;
$Malam = isset($_POST['makananMalam']) ? $_POST['makananMalam'] : $Malam;


	
if($pagi=='Oatmeal'){
	$kaloriPagi=62;
}else if($pagi=='Susu Segar'){
	$kaloriPagi=170;
}else if($pagi=='Jus Apel'){
	$kaloriPagi=123;
}else if($pagi=='Pancake kentang') {
	$kaloriPagi=190;
}else if($pagi=='Mashed potatoes') {
	$kaloriPagi=90;
}else if($pagi=='Roti gandum') {
	$kaloriPagi=190;
}else if($pagi=='Telur rebus') {
	$kaloriPagi=97;
}
else
	$kaloriPagi=0;
	

if($Siang=='Udang tumis cabai'){
	$kaloriSiang=184;
}else if($Siang=='Lumpia ayam sambal kacang'){
	$kaloriSiang=134;
}else if($Siang=='Tumis brokoli'){
	$kaloriSiang=61;
}else if($Siang=='Nasi merah') {
	$kaloriSiang=108;
}else if($Siang=='Sayur asem') {
	$kaloriSiang=88;
}else if($Siang=='Ayam panggang lada hitam') {
	$kaloriSiang=90;
}else if($Siang=='Sayur bayam') {
	$kaloriSiang=18;
}else if($Siang=='Mangga harum manis') {
	$kaloriSiang=150;
}else if($Siang=='Pepaya') {
	$kaloriSiang=92;
}
else
	$kaloriSiang=0;


	
if($Malam=='Salad ayam dan sayuran'){
	$kaloriMalam=256;
}else if($Malam=='Sup ayam dan sayuran'){
	$kaloriMalam=218;
}else if($Malam=='Salmon panggang saus mangga'){
	$kaloriMalam=272;
}else if($Malam=='Buncis sayur makadamia') {
	$kaloriMalam=208;
}else if($Malam=='Perkedel jagung') {
	$kaloriMalam=108;
}else if($Malam=='Cake jeruk') {
	$kaloriMalam=227;
}else if($Malam=='Kacang polong rebus') {
	$kaloriMalam=80;
}
else
	$kaloriMalam=0;

if(isset($_POST['makananPagi']) && isset($_POST['makananSiang']) && isset($_POST['makananMalam'])){
	$query = mysql_query("UPDATE user SET Pagi='$pagi', Siang='$Siang', Malam='$Malam' 
	WHERE Username='$usernama'",$connection)or die(mysql_error());
}
?>

<div id="result">
<?php
	$summary = '';
	if(isset($_POST['button'])){
		echo "
		<p> $pagi = $kaloriPagi Kal</p>
		<p> $Siang = $kaloriSiang Kal</p>
		<p> $Malam = $kaloriMalam Kal</p>";
		$total = $kaloriPagi + $kaloriSiang + $kaloriMalam;
		echo "<h2> Total Kalori = $total Kal</h2>";
		$summary.= $pagi." = ".$kaloriPagi." Kal, ".$Siang." = ".$kaloriSiang." Kal, ".$Malam." = ".$kaloriMalam." Kal, Total Kalori = ".$total." Kal";

	}
	else{
		if($kaloriPagi!=""){
			echo "
			<p> $pagi = $kaloriPagi Kal</p>
			<p> $Siang = $kaloriSiang Kal</p>
			<p> $Malam = $kaloriMalam Kal</p>";
			$total = $kaloriPagi + $kaloriSiang + $kaloriMalam;
			echo "<h2> Total Kalori = $total Kal</h2>";
			$summary.= $pagi." = ".$kaloriPagi." Kal, ".$Siang." = ".$kaloriSiang." Kal, ".$Malam." = ".$kaloriMalam." Kal, Total Kalori = ".$total." Kal";
		}
	}
	$title = 'Makanan Anda Diet Anda';
	$url = 'http://localhost/kesehatan/profil.php';
	$image = 'https://cdn1.iconfinder.com/data/icons/bloggers-1-to-7-vol-PNG/512/share_this_icon.png';
?>
</div>
<div style="display:inline">
    <a id="button" onClick="window.open('http://www.facebook.com/sharer/sharer.php?s=100&amp;p[title]=<?php echo $title; ?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;&p[images][0]=<?php echo $image;?>', 'sharer', 'toolbar=0,status=0,width=550,height=400');" target="_parent" href="javascript: void(0)">
    <img src="images/f.jpg" /></a>  
    <a class="twitter popup" href="http://twitter.com/share?source=sharethiscom&text=<?php echo $summary;?>&url=<?php echo $url; ?>&via=makananandadietanda"><img src="images/tw.jpg"/></a>
    <a href="javascript:void(0);" onclick="popUp=window.open('https://plus.google.com/share?url=<?php echo $url; ?> ','popupwindow','scrollbars=yes,width=800,height=400');popUp.focus();return false"><img src="images/g.jpg" /></a>
    <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?> &title=<?php echo $title;?>&summary=<?php echo $summary;?>&source=BerbagiYuks.con" class="popup"rel="nofollow"><img src="images/in.jpg" /></a>
    <a href='javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());'><img src="images/pin.jpg" /></a>
    
</div>

</div>

<!--div id="colThree"> <a href="#"><img src="images/ad_120x600.jpg" alt="" height="600" width="120" /></a> </div-->
<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer"> <p align="center"> @copyright 2013 MAYDAY Team </p>
</div>
</body></html>