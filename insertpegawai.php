<!DOCTYPE html>
<html lang="en">

<head>
    
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Insert Data</title>
</head>

<body >
    <div class="card text-white bg-info mb-3" style="margin: 50px 500px auto">
	<span class="border border-primary">
        <div class="card-body">
            <form class="input-form" id="formInput" method="POST" action="inserttpegawai.php">
				<fieldset>
					<legend class=" text-center"><h3>Insert Data Pegawai</h3></legend>
						<div>
								<label for="id">NIP Pegawai</label>
								<input type="text" class="form-control" id="id" placeholder="NIP " required autocomplete="off" name="nip"/>
						</div>
						
						<div>
								<label for="id">Nama Lengkap</label>
								<input type="text" class="form-control" id="nama" placeholder="Nama Pegawai" required autocomplete="off" name="nama"/>
							
						</div>
						
						<div>
								<label for="id">Foto</label>
								<input type="file" class="form-control" name="foto" id="foto"/>
								<input type="button" value=Upload />
						</div>
						
						<div>
								<label for="id">Tempat Lahir</label>
								<input type="text" class="form-control" id="tempatlahir" placeholder="Tempat Lahir" required autocomplete="off" name="tempatlahir"/>
							
						</div>
						
						<div>
								<label for="id">Tanggal Lahir</label>
								<div class="col">
                    			<input type="date" class="form-control" value="<?= date('Y-m-d'); ?>" name="tanggallahir" placeholder="Tanggal Lahir" required>
                				</div>
							
						</div>
						
						<div>
								<label for="id">Jenis Kelamin</label></br>
							<div class="form-check form-check-inline">
								<input type="radio" id="kls1" name="jk" value="Laki-laki" class="form-check-input" checked>
								<label for="kls1" class="form-check-label">Laki-laki</label>
							</div>
							<div class="form-check form-check-inline">
								<input type="radio" id="kls2" name="jk" value="Perempuan" class="form-check-input">
								<label for="kls2" class="form-check-label">Perempuan</label>
							</div>
						</div>
						
						<div>
								<label for="id">No. Hp</label>
								<input type="text" class="form-control" placeholder="08XXXXXXXXXX" required autocomplete="off" name="nohp"/>
							
						</div>
						
						<div>
								<label for="id">Agama</label>
								<input type="text" class="form-control" placeholder="Agama Pegawai" required autocomplete="off" name="agama"/>
							
						</div>
						
						<div>
								<label for="id">Email</label>
								<input type="text" class="form-control" placeholder="pegawai@email.com" required autocomplete="off" name="email"/>
							
						</div>
						
						<div>
							<label for="id">Alamat</label>
							<textarea name="alamat" id="alamat" class="form-control" required size="20" placeholder="Alamat" autocomplete="off"></textarea>
						</div>

						<div>
							<div>
								<label for="id">Gol. Darah</label></br>
							<div class="form-check form-check-inline">
								<input type="radio" id="golA" name="golongan" value="A" class="form-check-input" checked>
								<label for="golA" class="form-check-label">A</label>
							</div>
							<div class="form-check form-check-inline">
								<input type="radio" id="golB" name="golongan" value="B" class="form-check-input">
								<label for="golB" class="form-check-label">B</label>
							</div>
							<div class="form-check form-check-inline">
								<input type="radio" id="golAB" name="golongan" value="AB" class="form-check-input">
								<label for="golAB" class="form-check-label">AB</label>
							</div>
							<div class="form-check form-check-inline">
								<input type="radio" id="golO" name="golongan" value="O" class="form-check-input">
								<label for="golO" class="form-check-label">O</label>
							</div>
						</div>
							
							<div >
							<label for="id">Status Penikahan</label>
							<select name="statuspernikahan" id="statuspernikahan" class="form-select" required autocomplete="off">
								<option value="" disabled selected>Status Pernikahan</option>
								<option value="Kawin">Kawin</option>
								<option value="Lajang">Lajang</option>
							</select>
							</div>
						
							<div >
							<label for="id">Status Kepegawaian</label>
							<select name="statuskepegawaian" id="statuskepegawaian" class="form-select" required autocomplete="off">
								<option value="" disabled selected>Status Kepegawaian</option>
								<option value="PNS">PNS</option>
								<option value="HONOR">Honor</option>
							</select>
							</div>
							
							<div >
							<label for="id">Status User</label>
							<select name="statususer" id="statususer" class="form-select" required autocomplete="off">
								<option value="" disabled selected>Status User</option>
								<option value="Aktif">Aktif</option>
								<option value="Nonaktif">Nonaktif</option>
							</select>
							</div>
						
						</div>
						
						<div class="card-footer">
                    		<button type="submit" onclick="onSubmit()" style="margin: 10px 0 0" value="submit" name="submit" class="btn btn-success"><i class="fas fa-fw fa-save"></i> Submit </button>
							<a href="aksipegawai.php" class="btn btn-primary" style="margin: 10px 0 0">Selesai</a>
                		</div>
				</fieldset>
            </form>
        </div>
	</span>
    </div>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>