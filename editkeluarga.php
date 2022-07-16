<html lang="en">

<head>
    
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Data</title>
</head>

<?php 
    include("koneksi.php");
    
    $sql = mysqli_query($db, "SELECT* FROM tpegawai INNER JOIN tkeluarga ON tpegawai.nip=tkeluarga.nip WHERE nik ='$_GET[nik]'");
    $data = mysqli_fetch_array($sql);

?>

<body>
    <div class="card text-white bg-info mb-3" style="margin: 50px 500px auto">
	<span class="border border-primary">
        <div class="card-body">
            <form class="input-form" id="formInput" method="POST" action="">
			    <fieldset>
			    <legend class="card-header text-center"><h3>Update Data Keluarga</h3></legend> 

              <div class="form-group row">
                <label for="nip" class="col-sm-3 col-form-label">Nama Pegawai</label>
                <div class="col-sm-9">
                    <input type="hidden" name="nip" id="nip" class="form-control" value=<?php echo "$data[nik]";?>>
                    <input type="hidden" name="nik_awal" id="nik_awal" class="form-control" value="<?= $nik ?>">
                    <input type="text" name="nip2" id="nip2" class="form-control" value="<?= ucwords($data['namapegawai']) .' - '.$data['nip'] ?>" readonly>
                </div>
            </div>

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">NIK</label>
                  <div class="col-sm-9">
                  <input type="text" name="nik" placeholder="Masukkan NIK Pegawai" class="form-control" value=<?php echo "$data[nik]";?>>
                    </div>
                </div>

                <div class="form-group row">
					<label class="col-sm-3 col-form-label">Nama Keluarga</label>
                    <div class="col-sm-9">
					<input type="text" class="form-control" placeholder="Nama Keluarga" required autocomplete="off" name="namakel" value=<?php echo "$data[namakel]";?> >		
                    </div>
                </div>

                <div class="form-group row">
					<label class="col-sm-3 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-9">
					<input type="text" class="form-control" placeholder="Tempat Lahir" required autocomplete="off" name="tempatlahir" value=<?php echo"$data[tempatlahir]";?> >		
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                  <div class="col-sm-9">
                  <input type="date"  placeholder="Tanggal Lahir" name="tgllahir" class="form-control" value=<?php echo"$data[tgllahir]";?>>
                  </div>
                </div>

						
				<div class="form-group row">
					<label class="col-sm-3 col-form-label" >Pendidikan</label>
                    <div class="col-sm-9">
					<input type="text" class="form-control" placeholder="Pendidikan" required autocomplete="off" name="pendidikan" value=<?php echo"$data[pendidikan]";?>>
                    </div>
                </div>
				
                <div class="form-group row">
					<label class="col-sm-3 col-form-label" >Pekerjaan</label>
                    <div class="col-sm-9">
					<input type="text" class="form-control" placeholder="Pekerjaan" required autocomplete="off" name="pekerjaan" value=<?php echo"$data[pekerjaan]";?>>
                    </div>
                </div>
                
                <div class="form-group row">
				        <label  class="col-sm-3 col-form-label">Hubungan</label>
                        <div class="col-sm-9">
						<select name="hubungan"  class="form-select" required autocomplete="off">
								<option value="" disabled selected>Hubungan Kel</option>
								<option value="Ayah">Ayah</option>
								<option value="Ibu">Ibu</option>
								<option value="Ayah">Ayah</option>
								<option value="Suami">Suami</option>
								<option value="Istri">Istri</option>
								<option value="Anak">Anak</option>
							</select>
                            <?php echo"$data[hubungan]";?>
						</div>
                </div>     

                <div class="card-footer">
                    <button type="submit" onclick="onSubmit()" style="margin: 10px 0 0" value="edit" name="submit" class="btn btn-success"><i class="fas fa-fw fa-save"></i> Edit </button>
					<a href="aksikeluarga.php" class="btn btn-primary" style="margin: 10px 0 0">Selesai</a>
                </div>
                </fieldset>         
                </form>
                
                <?php
                    if (isset($_POST['submit'])) {
                        
                        $sql = mysqli_query($db, "UPDATE tkeluarga SET nik='$_POST[nik]',namakel='$_POST[namakel]',tempatlahir='$_POST[tempatlahir]',tgllahir='$_POST[tgllahir]',pendidikan='$_POST[pendidikan]',pekerjaan='$_POST[pekerjaan]',hubungan='$_POST[hubungan]' WHERE nik='$_GET[nik]' ");

                    if ($sql) {
                            echo "<script>alert('Data berhasil di edit!')</script>";
                            echo "<script>location=aksipendidikan.php</script>";
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