
<html lang="en">

<head>
    
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Data</title>
</head>

<?php 
    include("koneksi.php");
    $sql = mysqli_query($db, "SELECT* FROM tpegawai INNER JOIN tcuti ON tpegawai.nip=tcuti.nip WHERE idcuti ='$_GET[id]'");
    $data = mysqli_fetch_array($sql);

?>

<body>
    <div class="card text-white bg-info mb-3" style="margin: 50px 500px auto">
	<span class="border border-primary">
        <div class="card-body">
            <form class="input-form" id="formInput" method="POST" action="">
			    <fieldset>
			    <legend class="card-header text-center"><h3>Update Data Cuti</h3></legend>  
                       
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nomor Induk Pegawai</label>
                  <div class="col-sm-9">
                  <input type="text" name="nip" placeholder="Masukkan Nomor Induk Pegawai" class="form-control" value=<?php echo "$data[nip]";?>>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal Pengajuan</label>
                    <div class="col-sm-9">
                   		<input type="date" class="form-control" value="<?= date('Y-m-d'); ?>" id="tanggalpengajuan" name="tanggal_pengajuan" placeholder="Tanggal Pengajuan" required value=<?php echo "$data[tanggal_pengajuan]";?>>
               			</div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal Masuk</label>
                    <div class="col sm-9">
                    <input type="date" class="form-control" value="<?= date('Y-m-d'); ?>" id="tanggalmasuk" name="tanggal_masuk" placeholder="Tanggal Masuk" required value=<?php echo "$data[tanggal_masuk]";?>>
                     </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Alasan</label>
                    <div class="col sm-9">
					<input type="text" class="form-control" id="alasan" placeholder="Alasan" required autocomplete="off" name="alasan" value=<?php echo "$data[alasan]";?>>
                    </div>
                </div>
			
				<div class="form-group row">
                    <label class="col-sm-3 col-form-label">Status</label></br>
                    <div class="col-sm-9">
							<div class="form-check form-check-inline">
								<input type="radio" id="kls1" name="status" value="Terima" class="form-check-input" checked>
								<label for="kls1" class="form-check-label">Terima</label>
							</div>
							<div class="form-check form-check-inline">
								<input type="radio" id="kls2" name="status" value="Tolak" class="form-check-input">
								<label for="kls2" class="form-check-label">Tolak</label>
							</div>
                    <?php echo "$data[status]";?>
                    </div>
                </div>
				        

                <div class="card-footer">
                    <button type="submit" onclick="onSubmit()" style="margin: 10px 0 0" value="edit" name="submit" class="btn btn-success"><i class="fas fa-fw fa-save"></i> Edit </button>
					<a href="aksicuti.php" class="btn btn-primary" style="margin: 10px 0 0">Selesai</a>
                </div>
                </fieldset>          
                </form>
                
                <?php
                    if (isset($_POST['submit'])) {
                        $sql = mysqli_query($db, "UPDATE tcuti SET nip='$_POST[nip]',tanggal_pengajuan='$_POST[tanggal_pengajuan]',tanggal_masuk='$_POST[tanggal_masuk]',alasan='$_POST[alasan]',status='$_POST[status]' WHERE idcuti=$_GET[id]");

                    if ($sql) {
                            echo "<script>alert('Data berhasil di edit!')</script>";
                            echo "<script>location=aksicuti.php</script>";
                        }
                    }
                    ?>
                
                </div>
	</span>
</div>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
	
</html>