<html>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<div class="card">
	  <div class="card-body">
		<h5 class="card-title">Anda mencoba menambahkan data baru, cek status input!!</h5>
		<p class="card-text">Klik tombol "Selesai" untuk kembali</p>
		<p>
		<?php
			include("koneksi.php");
			echo "	";
			if(isset($_POST['submit'])){
				$nip=$_POST['nip'];
				$nik=$_POST['nik'];
				$namakeluarga=$_POST['namakeluarga'];
				$tempatlahir=$_POST['tempatlahir'];
				$tanggallahir=$_POST['tanggallahir'];
				$pendidikan=$_POST['pendidikankel'];
				$pekerjaan=$_POST['pekerjaankel'];
				$hubungan=$_POST['hubkel'];
			
				$sql=mysqli_query($db,"INSERT INTO tkeluarga(nik,nip,namakel,tempatlahir,tgllahir,pendidikan,pekerjaan,hubungan) VALUES ('$nik','$nip','$namakeluarga','$tempatlahir','$tanggallahir','$pendidikan','$pekerjaan','$hubungan')");
					if($sql){
						echo "Status : Input Sukses";
					}
					else{
						echo "Status : Input Gagal";
					}
			}
		?>
		</p>
		<a href="aksikeluarga.php" class="btn btn-primary">Selesai
		</a>
	  </div>
	</div>

	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>
