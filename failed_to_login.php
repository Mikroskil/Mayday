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
<ul>
<li class="active"><a href="index.php" accesskey="1" title="">Home</a></li>
<li><a href="TipsKesehatan.php" accesskey="2" title="">Tips Kesehatan</a></li>
<li><a href="Nutrisi.php" accesskey="3" title="">Nutrisi Makanan</a></li>
<li><a href="FAQ.php" accesskey="4" title="">FAQ </a></li>
<li><a href="register.php" accesskey="5" title="">Register</a></li>
</ul>
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
<h3>Berat Badan Ideal</h3>
<p>Nutrisi<a href="#"> More...</a></p>
<h3>Nutrisi</h3>
<p>Nutrisi dan Manfaat Susu Kedelai Bagi Tubuh<a href="#"> More...</a></p>
<h3>Diet</h3>
<p>Plate Model Untuk Membantu Anda menyajikan Makanan Sehat Setiap Hari<a href="#"> More...</a></p>
<p><a href="#"><img src="images/img7.jpg" alt="" height="120" width="150" /></a></p>
</div>
<div id="colFour">
<div class='clr'></div><div class='g1'>
				  <div class='g2'>
					<div class='gadget'>
					<div id="result2">
					  <h2>Login Bermasalah !</h2>
					  </div>
					  <p><font size='3'> &nbsp; &nbsp; &nbsp; &nbsp; Silahkan Coba Kembali </font></p>
					  
					  <div class='clr'></div>
						
					</div>
    </div>
				</div>
</div>

<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
</div>
</body>
</html>