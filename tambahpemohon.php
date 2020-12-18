<?php
  include "database.php";
  $nama_mahasiswa  = $_REQUEST['nama-mahasiswa'];
  $ipk_mahasiswa  = $_REQUEST['ipk-mahasiswa'];
  $penghasilan_ortu  = $_REQUEST['penghasilan-ortu'];
  $tanggungan_ortu  = $_REQUEST['tanggungan-ortu'];
  $prestasi_mahasiswa  = $_REQUEST['prestasi-mahasiswa'];
  $mysqli  = "INSERT INTO `seleksibeasiswa`.`tb_pemohon` (`nama_mahasiswa`, `ipk_mahasiswa`, `penghasilan_ortu`, `tanggungan_ortu`, `prestasi_mahasiswa`) VALUES ('$nama_mahasiswa', '$ipk_mahasiswa', '$penghasilan_ortu', '$tanggungan_ortu', '$prestasi_mahasiswa')";
  $result  = mysqli_query($connect, $mysqli);
  mysqli_close($connect);
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>