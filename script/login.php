<?PHP
session_start();
include "config.php";

$sql = mysql_query("SELECT * FROM user WHERE Username = '$_POST[ds_user]' AND Password = '$_POST[password]'");
$data = mysql_fetch_array($sql);
$hasil = mysql_num_rows($sql);
if(!empty($hasil))
{
	$_SESSION['Nama']=$data['Nama'];
	$_SESSION['tanggal']=$data['tanggal'];
	$_SESSION['tanggal_lahir']=$data['Tanggal_Lahir'];
	$_SESSION['Jenis_Kelamin'] = $data['Jenis_Kelamin'];
	$_SESSION['Tinggi_Badan'] = $data['Tinggi_Badan'];
	$_SESSION['Berat_Badan'] = $data['Berat_Badan'];
	$_SESSION['email'] = $data['Email'];
	$_SESSION['user']=$data['Username'];
	$_SESSION['password']=$data['Password'];
	
	header('location:../index.php');
}
else
{
	header('location:../failed_to_login.php');
}
?>