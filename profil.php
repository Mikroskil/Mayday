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
<script type="text/javascript">

</script>
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
				<li><a href='TipsKesehatan.php' accesskey='2' title=''>Tips Kesehatan</a></li>
				<li><a href='Nutrisi.php' accesskey='3' title=''>Nutrisi Makanan</a></li>
				<li><a href='FAQ.php' accesskey='4' title=''>FAQ </a></li>
				<li><a href='register.php' accesskey='5' title=''>Register</a></li>
              </ul>";
			  }
			  else
			  {
				echo"
			  <ul>
				<li class='active'><a href='index.php' accesskey='1' title=''>Home</a></li>
				<li><a href='TipsKesehatan.php' accesskey='2' title=''>Tips Kesehatan</a></li>
				<li><a href='Nutrisi.php' accesskey='3' title=''>Nutrisi Makanan</a></li>
				<li><a href='FAQ.php' accesskey='4' title=''>FAQ </a></li>			  
				<li><a href='profil.php'>Profil</a></li>          
              </ul>";	
			  }
			  ?>
</div>
<div id="content">
<div id="colOne">

<?php echo"<h2>$_SESSION[Nama]</h2>";?>

<!--<form method="POST"  enctype="multipart/form-data" action="prosesupload.php">
<div id="upload"  >
		<p>Silahkan klik &quot;<em><strong>Browse</strong></em>&quot; , pilih foto kemudian klik &quot;<strong><em>Submit</em></strong>&quot;.
        </p>
        <p>
          <input name="imgfile" type="file" id="imgfile" size="35" />
          </p>
        <p>
        <input type="submit" name="Submit" value="Submit" />
</div>

</form>
-->
<h3>Berat Badan Ideal</h3>
<p>Nutrisi<a href="#">  More...</a></p>
<h3>Nutrisi</h3>
<p>Nutrisi dan Manfaat Susu Kedelai Bagi Tubuh<a href="#"> More...</a></p>
<h3>Diet</h3>
<p>Plate Model Untuk Membantu Anda menyajikan Makanan Sehat Setiap Hari<a href="#">  More...</a></p>
<p><a href="#"><img src="images/img7.jpg" alt="" height="120" width="150" /></a></p>
</div>

<div id="ColFour">

<h2>Profile</h2>
<table width="570" border="0" align="center" cellpadding="0">
<tr>
<td height="26" colspan="4">Your Profile Information, <?php echo"<a href='script/logout.php'><font color='#FF0000'> Logout </font></a>"?> </td>
</tr>
<tr>
<td width="129" rowspan="5"><img src="<?php echo $picture ?>" width="129" height="129" alt="no image found"/></td>
<td width="130" valign="top"><div align="left">Nama Lengkap </div></td><td >:</td>
<td width="280" valign="top"><?php echo"$_SESSION[Nama]";?></td>
</tr>
<tr>
<td valign="top"><div align="left">Jenis Kelamin </div></td><td>:</td>
<td valign="top"><?php echo"$_SESSION[Jenis_Kelamin]";?></td>
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
$difference = timeDiff($_SESSION[tanggal], date("Y-m-d H:i:s"));
$years = abs(floor($difference / 31536000));
$days = abs(floor(($difference - ($years*31536000))/86400));
$hours = abs(floor(($difference - ($years*31536000) - ($days*86400))/3600));
$min = abs(floor(($difference - ($years*31536000) - ($days*86400) - ($hours * 3600))/60));
#floor($difference / 60);

echo"<h2>Selamat Anda telah mengikuti program diet sehat selama : ". $years . " Tahun, ". $days . " Hari, ". $hours . " Jam, " . $min . " Menit.</h2>";
?>
</div>
<!--div id="colThree"> <a href="#"><img src="images/ad_120x600.jpg" alt="" height="600" width="120" /></a> </div-->
<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
</div>
</body></html>