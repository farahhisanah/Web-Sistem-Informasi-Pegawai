
<html lang="en">

<head>
    
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Data</title>
</head>

<?php 
    include("koneksi.php");
    $sql = mysqli_query($db, "SELECT* FROM unit  WHERE id_unit ='$_GET[id]'");
    $data = mysqli_fetch_array($sql);

?>

<body>
    <div class="card text-white bg-info mb-3" style="margin: 50px 500px auto">
	<span class="border border-primary">
        <div class="card-body">
            <form class="input-form" id="formInput" method="POST" action="">
			    <fieldset>
			    <legend class="card-header text-center"><h3>Update Data Unit</h3></legend>  
                       
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nama Unit</label>
                  <div class="col-sm-9">
                  <input type="text" name="nama_unit" placeholder="Masukkan Nama Unit" class="form-control" value=<?php echo "$data[nama_unit]";?>>
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Kepala Unit</label>
                  <div class="col-sm-9">
                  <input type="text" name="kepala_unit" placeholder="Masukkan Nama Unit" class="form-control" value=<?php echo "$data[kepala_unit]";?>>
                    </div>
                </div>
				        

                <div>
                    <button type="submit" onclick="onSubmit()" style="margin: 10px 0 0" value="edit" name="submit" class="btn btn-success"><i class="fas fa-fw fa-save"></i> Edit </button>
					<a href="aksiunit.php" class="btn btn-primary" style="margin: 10px 0 0">Selesai</a>
                </div>
                </fieldset>          
                </form>
                
                <?php
                    if (isset($_POST['submit'])) {
                        $sql = mysqli_query($db, "UPDATE unit SET nama_unit='$_POST[nama_unit]',kepala_unit='$_POST[kepala_unit]' WHERE id_unit=$_GET[id]");

                    if ($sql) {
                            echo "<script>alert('Data berhasil di edit!')</script>";
                            echo "<script>location=aksiunit.php</script>";
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