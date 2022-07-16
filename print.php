<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    body{
        padding-top: 100px;
    }
    </style>
</head>
<body>
    <div class="container">
    <a href="print.php" target="_blank" class="btn btn-info btn-sm float-left mr-3"><i class="fas fa-print"></i> Print</a>

    <div class="row mt-3">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>Foto Pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>No. HP</th>
                    <th>Agama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Golongan Darah</th>
                    <th>Status Pernikahan</th>
                    <th>Status Kepegawaian</th>
                    <th>Status User</th>
                
                </tr>
            </thead>
            <tbody>
            <?php
                    include("koneksi.php");
                    $tampil=mysqli_query($db,"select*from tpegawai");
                    $no=0;
                    while ($data=mysqli_fetch_assoc($tampil)){ 
                        $no++;
                ?>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $data['nip'];?></td>
                        <td><?php echo "<img src='img/$data[fotopegawai]' width='70' height='90' />";?></td>
                        <td><?php echo $data['namapegawai'];?></td>
                        <td><?php echo $data['tempatlahir'];?></td>
                        <td><?php echo $data['tanggallahir'];?></td>
                        <td><?php echo $data['jeniskel'];?></td>
                        <td><?php echo $data['nohp'];?></td>
                        <td><?php echo $data['agama'];?></td>
                        <td><?php echo $data['email'];?></td>
                        <td><?php echo $data['alamat'];?></td>
                        <td><?php echo $data['goldar'];?></td>
                        <td><?php echo $data['statuspernikahan'];?></td>
                        <td><?php echo $data['statuskepegawaian'];?></td>
                        <td><?php echo $data['statususer'];?></td>
                    </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<script src="js/bootstrap.bundle.min.js"></script>

<!-- DataTables -->
<script type="text/javascript">
	window.print();

  function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

    oFReader.onload = function (oFREvent) {
      document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
  };
</script>
</body>
</html>