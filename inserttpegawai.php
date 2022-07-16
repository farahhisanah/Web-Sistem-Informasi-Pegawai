
		<?php
			include("koneksi.php");
			echo "	";
			if(isset($_POST['submit'])){
				$nip=$_POST['nip'];
				$nama=$_POST['nama'];
				$foto=$_POST['foto'];
				$tempatlahir=$_POST['tempatlahir'];
				$tanggallahir=$_POST['tanggallahir'];
				$jk=$_POST['jk'];
				$nohp=$_POST['nohp'];
				$agama=$_POST['agama'];
				$email=$_POST['email'];
				$alamat=$_POST['alamat'];
				$golongan=$_POST['golongan'];
				$statuspernikahan=$_POST['statuspernikahan'];
				$statuskepegawaian=$_POST['statuskepegawaian'];
				$statususer=$_POST['statususer'];
			
				$sql=mysqli_query($db,"INSERT INTO tpegawai(nip,namapegawai,fotopegawai,tempatlahir,tanggallahir,jeniskel,nohp,agama,email,alamat,goldar,statuspernikahan,statuskepegawaian,statususer) VALUES ('$nip','$nama','$foto','$tempatlahir','$tanggallahir','$jk','$nohp','$agama','$email','$alamat','$golongan','$statuspernikahan','$statuskepegawaian','$statususer')");
					if($sql){
						echo "Status : Input Sukses";
						echo "<script>location=aksipegawai.php</script>";
					}
					else{
						echo "Status : Input Gagal";
					}
			}
		?>
		<a href="aksipegawai.php" class="btn btn-primary">Selesai
		</a>
		