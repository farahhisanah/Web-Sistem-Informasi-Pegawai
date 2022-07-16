
	
		<?php
			include("koneksi.php");
			echo "	";
			if(isset($_POST['submit'])){
				$nip=$_POST['nip'];
				$tanggal_pengajuan=$_POST['tanggal_pengajuan'];
				$tanggal_masuk=$_POST['tanggal_masuk'];
				$alasan=$_POST['alasan'];
				$status=$_POST['status'];
				
			
				$sql=mysqli_query($db,"INSERT INTO tcuti(nip,tanggal_pengajuan,tanggal_masuk,alasan,status) VALUES ('$nip','$tanggal_pengajuan','$tanggal_masuk','$alasan','$status')");
					if($sql){
						echo "<script>alert('Data Berhasil Di Masukkan')</script>";
						header("location: aksicuti.php");
					}
					else{
						echo "Status : Input Gagal";
					}
			}
		?>