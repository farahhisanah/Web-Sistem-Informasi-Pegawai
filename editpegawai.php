
<html lang="en">

<head>
    
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Data</title>
</head>

<?php 
    include("koneksi.php");
    $sql = mysqli_query($db, "SELECT * FROM tpegawai WHERE nip ='$_GET[nip]'");
    $data = mysqli_fetch_array($sql);

?>
<body>
    <div class="card text-white bg-info mb-3" style="margin: 50px 500px auto">
	<span class="border border-primary">
        <div class="card-body">
            <form class="input-form" id="formInput" method="POST" action="">
			    <fieldset>
			    <legend class="text-center"><h3>Update Data Pegawai</h3></legend>       
                
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nomor Induk Pegawai</label>
                  <div class="col-sm-9">
                  <input type="text" name="nip" placeholder="Masukkan Nomor Induk Pegawai" class="form-control" value=<?php echo "$data[nip]";?>>
                    </div>
                </div>

                <div class="form-group row">
					<label class="col-sm-3 col-form-label">Foto</label>
                    <div class="col-sm-9">
					    <input type="file" class="form-control" name="fotopegawai" id="foto" value=<?php echo "$data[fotopegawai]";?>/>
						<input type="button" value=Upload />
                        </div>
				</div>

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                  <div class="col-sm-9">
                  <input type="text" name="namapegawai" placeholder="Masukkan Nama Pegawai" class="form-control" value=<?php echo "$data[namapegawai]";?> >
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
                  <input type="date" name="tgl_lahir" placeholder="Masukkan Tempat, Tanggal Lahir" class="form-control" value=<?php echo"$data[tanggallahir]";?>>
                  </div>
                </div>

                <fieldset class="form-group">
                  <div class="row">
                  <legend class="col-form-label col-sm-3 pt-0">Jenis Kelamin</legend>
                    <div class="col-sm-9">
                  <div class="form-check form-check-inline">
					<input type="radio" id="kls1" name="jeniskel" value="Laki-laki" class="form-check-input" checked>
					<label for="kls1" class="form-check-label">Laki-laki</label>
				  </div>
				  <div class="form-check form-check-inline">
					<input type="radio" id="kls2" name="jeniskel" value="Perempuan" class="form-check-input">
					<label for="kls2" class="form-check-label">Perempuan</label>
				 </div>
                  <?php echo "$data[jeniskel]";?>
                     </div>
                  </div>
                </fieldset>

                <div class="form-group row">
					<label class="col-sm-3 col-form-label" >No. Hp</label>
                    <div class="col-sm-9">
					<input type="text" class="form-control" placeholder="08XXXXXXXXXX" required autocomplete="off" name="nohp" value=<?php echo"$data[nohp]";?>>
                    </div>
                </div>
						
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Agama</label>
                    <div class="col-sm-9">
					<input type="text" class="form-control" placeholder="Agama Pegawai" required autocomplete="off" name="agama" value=<?php echo"$data[agama]";?>>
                    </div>
                </div>
				
                <div class="form-group row">
					<label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
					<input type="text" class="form-control" placeholder="pegawai@email.com" required autocomplete="off" name="email" value=<?php echo"$data[email]";?>>
                    </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Alamat</label>
                  <div class="col-sm-9">
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Pegawai" rows="4" ><?php echo "$data[alamat]";?></textarea>
                  </div>
                </div>
                
                <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-3 pt-0">Golongan Darah</legend>
                    <div class="col-sm-9">
					        <div class="form-check form-check-inline">
						        <input type="radio" id="golA" name="goldar" value="A" class="form-check-input" checked>
						        <label for="golA" class="form-check-label">A</label>
					        </div>
					        <div class="form-check form-check-inline">
						        <input type="radio" id="golB" name="goldar" value="B" class="form-check-input">
						        <label for="golB" class="form-check-label">B</label>
					        </div>
					        <div class="form-check form-check-inline">
						        <input type="radio" id="golAB" name="goldar" value="AB" class="form-check-input">
						        <label for="golAB" class="form-check-label">AB</label>
					        </div>
					        <div class="form-check form-check-inline">
						        <input type="radio" id="golO" name="goldar" value="O" class="form-check-input">
						        <label for="golO" class="form-check-label">O</label>
					        </div>
                            <?php echo "$data[goldar]";?>
                    </div>
                </div>
                </fieldset>
							
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Status Penikahan</label>
                    <div class="col-sm-9">
					<select name="statuspernikahan" id="statuspernikahan" class="form-select" required autocomplete="off">
						<option value="" disabled selected>Status Pernikahan</option>
						<option value="Kawin">Kawin</option>
						<option value="Lajang">Lajang</option>
					</select>
                    <?php echo "$data[statuspernikahan]";?>
                    </div>
                </div>
						
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Status Kepegawaian</label>
                    <div class="col-sm-9">
					<select name="statuskepegawaian" id="statuskepegawaian" class="form-select" required autocomplete="off">
					    <option value="" disabled selected>Status Kepegawaian</option>
						<option value="PNS">PNS</option>
						<option value="HONOR">Honor</option>
					</select>
                    <?php echo "$data[statuskepegawaian]";?>
                    </div>
                </div>
							
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Status User</label>
                    <div class="col-sm-9">
					<select name="statususer" id="statususer" class="form-select" required autocomplete="off">
						<option value="" disabled selected>Status User</option>
						<option value="Aktif">Aktif</option>
						<option value="Nonaktif">Nonaktif</option>
					</select>
                    <?php echo "$data[statususer]";?>
                    </div>
                </div>             

                <div class="card-footer">
                    <button type="submit" onclick="onSubmit()" style="margin: 10px 0 0" value="edit" name="submit" class="btn btn-success"><i class="fas fa-fw fa-save"></i> Edit </button>
					<a href="aksipegawai.php" class="btn btn-primary" style="margin: 10px 0 0">Selesai</a>
                </div>
                </fieldset>        
                </form>
                
                <?php
                    if (isset($_POST['submit'])) {
                        $sql = mysqli_query($db, "UPDATE tpegawai SET nip='$_POST[nip]',fotopegawai='$_POST[fotopegawai]',namapegawai='$_POST[namapegawai]',jeniskel='$_POST[jeniskel]',tempatlahir='$_POST[tempatlahir]',
                        tanggallahir='$_POST[tgl_lahir]',nohp='$_POST[nohp]',agama='$_POST[agama]',email='$_POST[email]',alamat='$_POST[alamat]',goldar='$_POST[goldar]',
                        statuspernikahan='$_POST[statuspernikahan]',statuskepegawaian='$_POST[statuskepegawaian]',statususer='$_POST[statususer]' WHERE nip=$_GET[nip]");

                    if ($sql) {
                            echo "<script>alert('Data berhasil di edit!')</script>";
                            echo "<script>location=aksipegawai.php</script>";
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