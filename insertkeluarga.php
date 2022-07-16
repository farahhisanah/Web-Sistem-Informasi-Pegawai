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
            <form class="input-form" id="formInput" method="POST" action="inserttkeluarga.php">
				<fieldset>
					<legend class="card-header text-center"><h1>Insert Data Keluarga</h1></legend>
						<div>
								<label for="id">NIP Pegawai</label>
								<input type="text" class="form-control" id="id" placeholder="NIP " required autocomplete="off" name="nip"/>
						</div>
						
						<div>
								<label for="id">NIK Pegawai</label>
								<input type="text" class="form-control" id="id" placeholder="XXXXXXXXXXXX " required autocomplete="off" name="nik"/>
						</div>
						
						<div>
								<label for="id">Nama Keluarga</label>
								<input type="text" class="form-control" id="namakeluarga" placeholder="Nama Keluarga" required autocomplete="off" name="namakeluarga"/>
							
						</div>
						
						<div>
								<label for="id">Tempat Lahir</label>
								<input type="text" class="form-control" id="tempatlahir" placeholder="Tempat Lahir" required autocomplete="off" name="tempatlahir"/>
							
						</div>
						
						<div>
								<label for="id">Tanggal Lahir</label>
								<div class="col">
                    			<input type="date" class="form-control" value="<?= date('Y-m-d'); ?>" id="tanggallahir" name="tanggallahir" placeholder="Tanggal Lahir" required>
                				</div>
							
						</div>
						
						<div>
								<label for="id">Pendidikan</label>
								<input type="text" class="form-control" id="noijazah" placeholder="Pendidikan Keluarga" required autocomplete="off" name="pendidikankel"/>
							
						</div>
						
						<div>
								<label for="id">Pekerjaan</label>
								<input type="text" class="form-control" id="pekerjaankel" placeholder="Pekerjaan Keluarga" required autocomplete="off" name="pekerjaankel"/>
							
						</div>
						
						<div >
							<label for="id">Hubungan</label>
							<select name="hubkel" id="hubkel" class="form-select" required autocomplete="off">
								<option value="" disabled selected>Hubungan Kel</option>
								<option value="Ayah">Ayah</option>
								<option value="Ibu">Ibu</option>
								<option value="Ayah">Ayah</option>
								<option value="Suami">Suami</option>
								<option value="Istri">Istri</option>
								<option value="Anak">Anak</option>
							</select>
						</div>
						
						<input type="submit" class="btn btn-primary" onclick="onSubmit()" style="margin: 10px 0 0" value="Submit" name="submit">
				</fieldset>
            </form>
        </div>
	</span>
    </div>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>