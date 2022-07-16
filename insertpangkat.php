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
            <form class="input-form" id="formInput" method="POST" action="inserttpangkat.php">
				<fieldset>
					<legend class="card-header text-center"><h1>Insert Data Pangkat</h1></legend>
						<div>
								<label for="id">NIP Pegawai</label>
								<input type="text" class="form-control" id="id" placeholder="NIP " required autocomplete="off" name="nip"/>
						</div>
						
						<div>
								<label for="id">Nama Pangkat</label>
								<input type="text" class="form-control" id="namap" placeholder="Nama Pangkat" required autocomplete="off" name="namap"/>
							
						</div>
						
						<div>
								<label for="id">Jenis Pangkat</label>
								<input type="text" class="form-control" id="jenispangkat" placeholder="Jenis Pangkat" required autocomplete="off" name="jenispangkat"/>
							
						</div>
						
						<div>
								<label for="id">Tamat Pangkat</label>
								<div class="col">
                   				<input type="date" class="form-control" value="<?= date('Y-m-d'); ?>" id="tamatpangkat" name="tamatpangkat" placeholder="Tamat Pangkat" required>
               					</div>

						</div>
						
						<div>
								<label for="id">Sah SK</label>
								<div class="col">
                    			<input type="date" class="form-control" value="<?= date('Y-m-d'); ?>" name="sahsk" placeholder="Sah SK" required>
                				</div>
							
						</div>
						
						<div>
								<label for="id">Pengesah SK</label>
								<input type="text" class="form-control" id="pengesahsk" placeholder="Nama Pengesah SK" required autocomplete="off" name="pengesahsk"/>
							
						</div>
						
						<div>
								<label for="id">No. SK</label>
								<input type="text" class="form-control" id="nosk" placeholder="XXXXXXXXXXXX" required autocomplete="off" name="nosk"/>
							
						</div>
						
						<div>
								<label for="id">Status Pangkat</label></br>
							<div class="form-check form-check-inline">
								<input type="radio" id="kls1" name="statuspangkat" value="Aktif" class="form-check-input" checked>
								<label for="kls1" class="form-check-label">Aktif</label>
							</div>
							<div class="form-check form-check-inline">
								<input type="radio" id="kls2" name="statuspangkat" value="Nonaktif" class="form-check-input">
								<label for="kls2" class="form-check-label">Nonaktif</label>
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