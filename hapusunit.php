<?php
	include 'koneksi.php';
	
	$hapus=mysqli_query($db,"DELETE FROM unit where id_unit='$_GET[id]'");
		
    if( $hapus){
            echo "<script>alert('Data Berhasil Di Hapus')</script>";
			header("location: aksiunit.php");
		}
		else{
			print "Gagal menghapus data";
		}
?>