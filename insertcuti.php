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
            <form class="input-form" id="formInput" method="POST" action="inserttcuti.php">
				<fieldset>
					<legend class="card-header text-center"><h1>Insert Data Pengajuan Cuti</h1></legend>
						<div>
								<label for="id">NIP Pegawai</label>
								<input type="text" class="form-control" id="id" placeholder="NIP " required autocomplete="off" name="nip"/>
						</div>
						
						
						<div>
								<label for="id">Tanggal Pengajuan</label>
								<div class="col">
                   				<input type="date" class="form-control" value="<?= date('Y-m-d'); ?>" id="tanggal_pengajuan" name="tanggal_pengajuan" placeholder="Tanggal Pengajuan" required>
               					</div>

						</div>
						
						<div>
                            <label for="id">Tanggal Masuk</label>
                            <div class="col">
                               <input type="date" class="form-control" value="<?= date('Y-m-d'); ?>" id="tanggal_masuk" name="tanggal_masuk" placeholder="Tanggal Masuk" required>
                               </div>

                        </div>
						
						<div>
								<label for="id">Alasan</label>
								<input type="text" class="form-control" id="alasan" placeholder="Alasan" required autocomplete="off" name="alasan"/>
							
						</div>
						
						<div>
								<label for="id">Status</label></br>
							<div class="form-check form-check-inline">
								<input type="radio" id="kls1" name="status" value="Terima" class="form-check-input" checked>
								<label for="kls1" class="form-check-label">Terima</label>
							</div>
							<div class="form-check form-check-inline">
								<input type="radio" id="kls2" name="status" value="Tolak" class="form-check-input">
								<label for="kls2" class="form-check-label">Tolak</label>
							</div>
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