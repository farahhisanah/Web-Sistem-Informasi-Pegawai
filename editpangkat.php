
<html lang="en">

<head>
    
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Data</title>
</head>

<?php 
    include("koneksi.php");
    $sql = mysqli_query($db, "SELECT* FROM tpegawai INNER JOIN tpangkat ON tpegawai.nip=tpangkat.nip WHERE id ='$_GET[id]'");
    $data = mysqli_fetch_array($sql);

?>

<body>
    <div class="card text-white bg-info mb-3" style="margin: 50px 500px auto">
	<span class="border border-primary">
        <div class="card-body">
            <form class="input-form" id="formInput" method="POST" action="">
			    <fieldset>
			    <legend class="card-header text-center"><h3>Update Data Pangkat</h3></legend> 

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nomor Induk Pegawai</label>
                  <div class="col-sm-9">
                  <input type="text" name="nip" placeholder="Masukkan Nomor Induk Pegawai" class="form-control" value=<?php echo "$data[nip]";?>>
                    </div>
                </div>

                <div class="form-group row">
					<label class="col-sm-3 col-form-label">Nama Pangkat</label>
                    <div class="col-sm-9">
					<input type="text" class="form-control" placeholder="Nama Pangkat" required autocomplete="off" name="namapangkat" value=<?php echo "$data[namapangkat]";?> >		
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Jenis Pangkat</label>
                  <div class="col-sm-9">
                  <input type="text" name="jenispangkat" placeholder="Jenis Pangkat" class="form-control" value=<?php echo"$data[jenispangkat]";?>>
                  </div>
                </div>

                <div class="form-group row">
					<label class="col-sm-3 col-form-label" >Tamat Pangkat</label>
                    <div class="col-sm-9">
					<input type="date" class="form-control" placeholder="Tamat Pangkat" required autocomplete="off" name="tamat" value=<?php echo"$data[tamat]";?>>
                    </div>
                </div>
						
				<div class="form-group row">
					<label class="col-sm-3 col-form-label" >Sah SK</label>
                    <div class="col-sm-9">
					<input type="date" class="form-control" placeholder="Sah SK" required autocomplete="off" name="sahsk" value=<?php echo"$data[sahsk]";?>>
                    </div>
                </div>
				
                <div class="form-group row">
					<label class="col-sm-3 col-form-label" >Pengesah SK</label>
                    <div class="col-sm-9">
					<input type="text" class="form-control" placeholder="Pengesah SK" required autocomplete="off" name="pengesahsk" value=<?php echo"$data[pengesahsk]";?>>
                    </div>
                </div>
                
                <div class="form-group row">
					<label class="col-sm-3 col-form-label" >No SK</label>
                    <div class="col-sm-9">
					<input type="text" class="form-control" placeholder="XXXXXX" required autocomplete="off" name="nosk" value=<?php echo"$data[nosk]";?>>
                    </div>
                </div>
                
						
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Status Pangkat</label>
                    <div class="col-sm-9">
					    <div class="form-check form-check-inline">
							<input type="radio" id="kls1" name="statuspangkat" value="Aktif" class="form-check-input" checked>
								<label for="kls1" class="form-check-label">Aktif</label>
					    </div>
							<div class="form-check form-check-inline">
								<input type="radio" id="kls2" name="statuspangkat" value="Nonaktif" class="form-check-input">
								<label for="kls2" class="form-check-label">Nonaktif</label>
							</div>
                    <?php echo "$data[status]";?>
                    </div>
                </div>
				        

                <div class="card-footer">
                    <button type="submit" onclick="onSubmit()" style="margin: 10px 0 0" value="edit" name="submit" class="btn btn-success"><i class="fas fa-fw fa-save"></i> Edit </button>
					<a href="aksipangkat.php" class="btn btn-primary" style="margin: 10px 0 0">Selesai</a>
                </div>
                
                </fieldset>
                </form>
                
                <?php
                    if (isset($_POST['submit'])) {
                        $sql = mysqli_query($db, "UPDATE tpangkat SET nip='$_POST[nip]',namapangkat='$_POST[namapangkat]',jenispangkat='$_POST[jenispangkat]',tamat='$_POST[tamat]',
                        sahsk='$_POST[sahsk]',pengesahsk='$_POST[pengesahsk]',nosk='$_POST[nosk]',status='$_POST[statuspangkat]' WHERE id=$_GET[id]");

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