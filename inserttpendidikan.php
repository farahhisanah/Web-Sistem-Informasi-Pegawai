<html>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<div class="card">
	  <div class="card-header">
		<h2>Terimakasih Admin!!</h2>
	  </div>
	  <div class="card-body">
		<h5 class="card-title">Anda mencoba menambahkan data baru, cek status input!!</h5>
		<p class="card-text">Klik tombol "Selesai" untuk kembali ke tab admin</p>
		<p>
		<?php
			include("koneksi.php");
			echo "	";
			if(isset($_POST['submit'])){
				$nip=$_POST['nip'];
				$tingkat=$_POST['tingkat'];
				$instansi=$_POST['instansi'];
				$lokasi=$_POST['lokasi'];
				$jurusan=$_POST['jurusan'];
				$tglijazah=$_POST['tglijazah'];
				$noijazah=$_POST['noijazah'];
			
				$sql=mysqli_query($db,"INSERT INTO tpendidikan(nip,tingkat,namainstansi,lokasi,jurusan,tglijazah,noijazah) VALUES ('$nip','$tingkat','$instansi','$lokasi','$jurusan','$tglijazah','$noijazah')");
					if($sql){
						echo "Status : Input Sukses";
					}
					else{
						echo "Status : Input Gagal";
					}
			}
		?>
		</p>
		<a href="aksipendidikan.php" class="btn btn-primary">Selesai
		</a>
	  </div>
	</div>

	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>