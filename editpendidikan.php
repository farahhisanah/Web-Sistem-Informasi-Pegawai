<html lang="en">

<head>
    
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Data</title>
</head>

<?php 
    include("koneksi.php");
    $sql = mysqli_query($db, "SELECT* FROM tpegawai INNER JOIN tpendidikan ON tpegawai.nip=tpendidikan.nip WHERE idpendidikan ='$_GET[id]'");
    $data = mysqli_fetch_array($sql);

?>

<body>
<div class="card text-white bg-info mb-3" style="margin: 50px 500px auto">
	<span class="border border-primary">
        <div class="card-body text-center">
            <form class="input-form" id="formInput" method="POST" action="">
			    <fieldset>
			    <legend class="card-header"><h3>Update Data Pendidikan</h3></legend> 

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nomor Induk Pegawai</label>
                  <div class="col-sm-9">
                  <input type="text" name="nip" placeholder="Masukkan Nomor Induk Pegawai" class="form-control" value=<?php echo "$data[nip]";?>>
                    </div>
                </div>

                <div class="form-group row">
					<label class="col-sm-3 col-form-label">Tingkat</label>
                    <div class="col-sm-9">
					<input type="text" class="form-control" placeholder="Tingkat" required autocomplete="off" name="tingkat" value=<?php echo "$data[tingkat]";?> >		
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nama Instansi Pendidikan</label>
                  <div class="col-sm-9">
                  <input type="text" name="namainstansi" placeholder="Nama Instansi Pendidikan" class="form-control" value=<?php echo"$data[namainstansi]";?>>
                  </div>
                </div>

                <div class="form-group row">
					<label class="col-sm-3 col-form-label" >Lokasi</label>
                    <div class="col-sm-9">
					<input type="text" class="form-control" placeholder="Alamat Instansi Pendidikan" required autocomplete="off" name="lokasi" value=<?php echo"$data[lokasi]";?>>
                    </div>
                </div>
						
				<div class="form-group row">
					<label class="col-sm-3 col-form-label" >Jurusan</label>
                    <div class="col-sm-9">
					<input type="text" class="form-control" placeholder="Jurusan" required autocomplete="off" name="jurusan" value=<?php echo"$data[jurusan]";?>>
                    </div>
                </div>
				
                <div class="form-group row">
					<label class="col-sm-3 col-form-label" >Tanggal Ijazah</label>
                    <div class="col-sm-9">
					<input type="date" class="form-control" placeholder="Tanggal Ijazah" required autocomplete="off" name="tglijazah" value=<?php echo"$data[tglijazah]";?>>
                    </div>
                </div>
                
                <div class="form-group row">
					<label class="col-sm-3 col-form-label" >No Ijazah</label>
                    <div class="col-sm-9">
					<input type="text" class="form-control" placeholder="XXXXXX" required autocomplete="off" name="noijazah" value=<?php echo"$data[noijazah]";?>>
                    </div>
                </div>
                      

                <div class="card-footer">
                    <button type="submit" onclick="onSubmit()" style="margin: 10px 0 0" value="edit" name="submit" class="btn btn-success"><i class="fas fa-fw fa-save"></i> Edit </button>
					<a href="aksipendidikan.php" class="btn btn-primary" style="margin: 10px 0 0">Selesai</a>
                </div>
                </fieldset>         
                </form>
                
                <?php
                    if (isset($_POST['submit'])) {
                        $sql = mysqli_query($db, "UPDATE tpendidikan SET nip='$_POST[nip]',tingkat='$_POST[tingkat]',namainstansi='$_POST[namainstansi]',lokasi='$_POST[lokasi]',
                        jurusan='$_POST[jurusan]',tglijazah='$_POST[tglijazah]',noijazah='$_POST[noijazah]' WHERE idpendidikan=$_GET[id]");

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