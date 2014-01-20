<?php
include "config.php";

$nama = filter_var($_POST['nama'], FILTER_SANITIZE_STRING);
$tanggal_lahir = filter_var($_POST['tanggal_lahir'], FILTER_SANITIZE_STRING);
$tinggi = filter_var($_POST['tinggi'], FILTER_SANITIZE_STRING);
$berat = filter_var($_POST['berat'], FILTER_SANITIZE_STRING);
$Gender = filter_var($_POST['Jenis_Kelamin'], FILTER_SANITIZE_STRING);
$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$c_password = filter_var($_POST['c_password'], FILTER_SANITIZE_STRING);
$Email = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);

$cek = "SELECT * FROM user WHERE Username='$username'";
$user_exists = mysql_query($cek);
$hasil =mysql_num_rows($user_exists);

if ($nama == '') {
	$error[] = '- Nama Lengkap harus diisi';
}
if ($username == '') {
	$error[] = '- Username harus diisi';
}
else if ($hasil > 0){
	$error[] = '- Username sudah ada';
}
if ($password == '') {
	$error[] = '- Password harus diisi';
}
if ($c_password == '') {
	$error[] = '- Confirm Password harus diisi';
}
if($password != $c_password) {
	$error[] = '- Password Tidak Sama';
}
if($Email == '' || !filter_var($Email, FILTER_VALIDATE_EMAIL)){
	$error[] = '- Email tidak valid ';
}
if ($tanggal_lahir == '') {
	$error[] = '- Tanggal Lahir harus diisi';
}


if (isset($error)) {
	echo '<b>Error</b>: <br />'.implode('<br />', $error);
} else {
	$data = '';
	foreach ($_POST as $k => $v) {
		$data .= "$k : $v<br />";
	}
	echo '<b>Berhasil mendaftar. Selamat bergabung di Program diet Sehat.<br>
	Berikut ini data anda:</b><br />';
	echo $data;
	$query = mysql_query("INSERT INTO user (Nama, Tanggal_Lahir,Tinggi_Badan,Berat_Badan, Jenis_Kelamin, Username, Password,Confirm_Pass,Email,tanggal)
	values ('$nama','$tanggal_lahir','$tinggi','$berat','$Gender','$username','$password','$c_password','$Email' ,NOW())",$connection)or die(mysql_error());
}

?>