<head>
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
<ul>
<li ><a href="index.php" accesskey="1" title="">Home</a></li>
<li><a href="NutrisiSuplemen.php" accesskey="2" title="">Tips Kesehatan</a></li>
<li><a href="MenuDiet.php" accesskey="3" title="">Menu Diet</a></li>
<li><a href="FAQ.php" accesskey="4" title="">FAQ </a></li>
<li class="active"><a href="register.php" accesskey="5" title="">Register</a></li>
</ul>
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
					<td>Tinggi Badan </td>
                    <td> : </td>
					<td><input name="tinggi" type="text" size='3'> Cm</td>
					</tr>
					<td>Berat Badan </td>
                    <td> : </td>
					<td><input name="berat" type="text" size='3'> Kg</td>
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