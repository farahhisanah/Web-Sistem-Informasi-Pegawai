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
            <form class="input-form" id="formInput" method="POST" action="inserttpendidikan.php">
				<fieldset>
					<legend class="card-header text-center"><h1>Insert Data Pendidikan</h1></legend>
						<div>
								<label for="id">NIP Pegawai</label>
								<input type="text" class="form-control" id="id" placeholder="NIP " required autocomplete="off" name="nip"/>
						</div>
						
						<div>
								<label for="id">Tingkat</label>
								<input type="text" class="form-control" id="tingkat" placeholder="Tingkat pendidikan" required autocomplete="off" name="tingkat"/>
							
						</div>
						
						<div>
								<label for="id">Nama Instansi Pendidikan</label>
								<input type="text" class="form-control" id="instansi" placeholder="Instansi Pendidikan" required autocomplete="off" name="instansi"/>
							
						</div>
						
						<div>
								<label for="id">Lokasi</label>
								<input type="text" class="form-control" id="lokasi" placeholder="Alamat Instansi Pendidikan" required autocomplete="off" name="lokasi"/>
							
						</div>
						
						<div>
								<label for="id">Jurusan</label>
								<input type="text" class="form-control" id="jurusan" placeholder="Jurusan Pendidikan" required autocomplete="off" name="jurusan"/>
							
						</div>
						
						<div>
								<label for="id">Tanggal Ijazah</label>
								<div class="col">
                    			<input type="date" class="form-control" value="<?= date('Y-m-d'); ?>" id="tglijazah" name="tglijazah" placeholder="Tanggal Ijazah" required>
                				</div>
						</div>
						
						<div>
								<label for="id">No. Ijazah</label>
								<input type="text" class="form-control" id="noijazah" placeholder="No. Ijazah" required autocomplete="off" name="noijazah"/>
							
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