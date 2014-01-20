<?php

session_start();
if(!empty($_SESSION['user'])) {
  include "script\config.php";

  $namafolder="gambar/"; //folder tempat menyimpan file
  if (!empty($_FILES["Filegambar"]["tmp_name"]))
  {
      $jenis_gambar=$_FILES['Filegambar']['type'];
      if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
      {           
          $gambar = $namafolder . basename($_FILES['Filegambar']['name']); 
          $user = $_POST['user'];
          if (move_uploaded_file($_FILES['Filegambar']['tmp_name'], $gambar)) {
              $query = mysql_query("UPDATE user SET nama_image='$gambar' WHERE Username='$user'",$connection)or die(mysql_error());
              echo "<script>history.back(-1);</script>";
          } else {
             $_SESSION['error'] = "Gambar gagal dikirim";
             echo header('location:http://localhost/kesehatan/failed_to_upload.php');
          }
     } else {
          $_SESSION['error'] = "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
          echo header('location:http://localhost/kesehatan/failed_to_upload.php');
          //echo "<script>history.back(-1);</script>";
     }
  } else {
      $_SESSION['error'] = "Anda belum memilih gambar";
      echo header('location:http://localhost/kesehatan/failed_to_upload.php');
      //echo "<script>history.back(-1);</script>";
  }
}
?>