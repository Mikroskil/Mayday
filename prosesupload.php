<?php

include "script\config.php";

$namafolder="gambar/"; //folder tempat menyimpan file
if (!empty($_FILES["Filegambar"]["tmp_name"]))
{
    $jenis_gambar=$_FILES['Filegambar']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
    {           
        $gambar = $namafolder . basename($_FILES['Filegambar']['name']); 
        $user = $_POST['user'];
        if (move_uploaded_file($_FILES['Filegambar']['tmp_name'], $gambar)) {
            $query = mysql_query("UPDATE user SET nama_image='$gambar' WHERE Username='$user'",$connection)or die(mysql_error());
            echo "<script>alert('Gambar berhasil dikirim');</script>";
            echo "<script>history.back(-1);</script>";
        } else {
           echo "<script>alert('Gambar gagal dikirim');</script>";
           echo "<script>history.back(-1);</script>";
        }
   } else {
        echo "<script>alert('Jenis gambar yang anda kirim salah. Harus .jpg .gif .png');</script>";
        echo "<script>history.back(-1);</script>";
   }
} else {
    echo "<script>alert('Anda belum memilih gambar');</script>";
    echo "<script>history.back(-1);</script>";
}
?>