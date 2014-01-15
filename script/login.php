<?PHP
session_start();
include "config.php";

$sql = mysql_query("SELECT * FROM user WHERE Username = '$_POST[ds_user]' AND Password = '$_POST[password]'");
$data = mysql_fetch_array($sql);
$hasil = mysql_num_rows($sql);
if(!empty($hasil))
{
	session_register("ds_user"); 
	session_register("password"); 
	$_SESSION[Nama]=$data[Nama]; 
	$_SESSION[user]=$data[Username]; 
	$_SESSION[password]=$data[Password];
	header('location:../index.php');
}
else
{
	header('location:../failed_to_login.php');
}
?>