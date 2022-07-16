<html>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<div class="card">
	  <div class="card-header">
		<h2>Terimakasih!!</h2>
	  </div>
	  <div class="card-body">
		<h5 class="card-title">Anda mencoba menambahkan akun baru, cek status input!!</h5>
		<p class="card-text">Klik tombol "Selesai" untuk kembali ke tab login</p>
		<p>
		<?php
			include("koneksi.php");
			echo "	";
			if(isset($_POST['submit'])){
				$email=$_POST['email'];
				$pass=$_POST['pass'];
			
				$sql=mysqli_query($db,"INSERT INTO tuser(username,password) VALUES ('$email','$pass')");
					if($sql){
						echo "Status : Input Sukses";
					}
					else{
						echo "Status : Input Gagal";
					}
			}
		?>
		</p>
		<a href="login.php" class="btn btn-primary">Selesai
		</a>
	  </div>
	</div>

	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>