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
function passwordStrength(password)
{
	var desc = new Array();
	desc[0] = "Very Weak";
	desc[1] = "Weak";
	desc[2] = "Better";
	desc[3] = "Medium";
	desc[4] = "Strong";
	desc[5] = "Strongest";

	var score   = 0;

	//if password bigger than 6 give 1 point
	if (password.length > 6) score++;

	//if password has both lower and uppercase characters give 1 point	
	if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;

	//if password has at least one number give 1 point
	if (password.match(/\d+/)) score++;

	//if password has at least one special caracther give 1 point
	if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) )	score++;

	//if password bigger than 12 give another 1 point
	if (password.length > 12) score++;

	 document.getElementById("passwordDescription").innerHTML = desc[score];
	 document.getElementById("passwordStrength").className = "strength" + score;
}
</script>
<script type="text/javascript">
$(document).ready(function() {

	$().ajaxStart(function() {
		$('#loading').show();
		$('#result').hide();
	}).ajaxStop(function() {
		$('#loading').hide();
		$('#result').fadeIn('slow');
	});

	$('#form1').submit(function() {
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function(data) {
				$('#result').html(data);
			}
		})
		return false;
	});
})

$(document).ready(
         function() {
   		  $(function() {
               $("#tanggal_lahir").datepicker({
				changeMonth: true,
				changeYear: true,
				yearRange: '-66',
				dateFormat:"yy-mm-dd",
				showAnim:"bounce"	
               });
            });
   	   });
</script>
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
<h2>Recent Updates</h2>
<h3>Berat Badan Ideal</h3>
<p>Nutrisi<a href="#"> More...</a></p>
<h3>Nutrisi</h3>
<p>Nutrisi dan Manfaat Susu Kedelai Bagi Tubuh<a href="#">  More...</a></p>
<h3>Diet</h3>
<p>Plate Model Untuk Membantu Anda menyajikan Makanan Sehat Setiap Hari<a href="#"> More...</a></p>
<p><a href="#"><img src="images/img7.jpg" alt="" height="120" width="150" /></a></p>
</div>

<div id="ColFour">
<h2>Registration Form</h2>
<div id="loading"><b>Info:</b></div>
<div id="result"></div>
<form id="form1" method="post" action="script/reg.php">
					<table width="400" border="0" align="center">
					
					<tr>
					<td>Nama Lengkap </td>
                    <td> : </td>
					<td><input name="nama" type="text" id="nama" size='24'></td>
					</tr>
					<tr>
					<td >Tanggal Lahir </td>
                    <td> : </td>
					<td><input name="tanggal_lahir" id="tanggal_lahir" type="text" size='24'></td>
					</tr>
					<tr>
					<td >Jenis Kelamin </td>
                    <td> : </td>
					<td><select name="Jenis_Kelamin">
                    		<option value="laki-laki">Laki - laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
					</tr>
					<tr>
					<td >User Name </td>
                    <td> : </td>
					<td><input name="username" type="text"  size='24'></td>
					</tr>
					<tr>
					<td>Password </td>
                    <td> : </td>
					<td><input name="password" type="password" id="password" size='24' onKeyUp="passwordStrength(this.value)"></td>
					</tr>
					<tr>
					<td >Confirm Password </td>
                    <td> : </td>
					<td><input name="c_password" type="password" id="c_password" size='24'></td>
					</tr>
                    <tr>
                    <td><label for="passwordStrength">Password strength</label></td>
                    <td>:</td>
                    <td id="passwordDescription"><i>-Password not entered-</i></td>
                    </tr>
                    <tr>
					<td>Email </td>
                    <td> : </td>
					<td><input name="Email" type="text" size='24'></td>
					</tr>
					<tr>
					<td colspan="3">&nbsp;</td>
					</tr>
					<tr>
					</tr>
					<table>
					<tr>
					<td><input type="submit" name="submit" value="Register"></td>
                    <td><input type="reset" name="reset" value="Reset" /></td>
					<td>&nbsp;</td>
					</tr>
					</table>
					</table>
				</form>
</div>
<!--div id="colThree"> <a href="#"><img src="images/ad_120x600.jpg" alt="" height="600" width="120" /></a> </div-->
<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
</div>
</body></html>