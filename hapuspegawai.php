<?php
	include 'koneksi.php';
	$tjabatan=mysqli_query($db,"DELETE FROM tjabatan where nip='$_GET[nip]'");
	$tpangkat=mysqli_query($db,"DELETE FROM tpangkat where nip='$_GET[nip]'");
	$tpendidikan=mysqli_query($db,"DELETE FROM tpendidikan where nip='$_GET[nip]'");
	$tkeluarga=mysqli_query($db,"DELETE FROM tkeluarga where nip='$_GET[nip]'");
	$tcuti=mysqli_query($db,"DELETE FROM tcuti where nip='$_GET[nip]'");
	$hapus=mysqli_query($db,"DELETE FROM tpegawai where nip='$_GET[nip]'");
		
    if($tjabatan && $tpangkat && $tpendidikan && $tkeluarga && $tcuti && $hapus){
		echo "<script>alert('Data Berhasil Di Hapus')</script>";
			header("location: aksipegawai.php");
		}
		else{
			print "Gagal menghapus data";
		}
?>