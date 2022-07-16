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
				$namap=$_POST['namap'];
				$jenispangkat=$_POST['jenispangkat'];
				$tamatpangkat=$_POST['tamatpangkat'];
				$sahsk=$_POST['sahsk'];
				$pengesahsk=$_POST['pengesahsk'];
				$nosk=$_POST['nosk'];
				$statuspangkat=$_POST['statuspangkat'];
			
				$sql=mysqli_query($db,"INSERT INTO tpangkat(nip,namapangkat,jenispangkat,tamat,sahsk,pengesahsk,nosk,status) VALUES ('$nip','$namap','$jenispangkat','$tamatpangkat','$sahsk','$pengesahsk','$nosk','$statuspangkat')");
					if($sql){
						echo "Status : Input Sukses";
					}
					else{
						echo "Status : Input Gagal";
					}
			}
		?>
		</p>
		<a href="aksipangkat.php" class="btn btn-primary">Selesai
		</a>
	  </div>
	</div>

	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>