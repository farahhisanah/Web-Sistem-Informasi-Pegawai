
<html lang="en">

<head>
    
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Data</title>
</head>
<?php
include "koneksi.php";
$sql = mysqli_query($db, "SELECT * FROM tuser WHERE iduser = '$_GET[id]'");
$r = mysqli_fetch_array($sql);

?>

<body class="bg-gradient-info">
    <div class="card text-white bg-info mb-3" style="margin: 50px 500px auto">
	<span class="border border-primary">
        <div class="card-body">
            <form class="input-form" id="formInput" method="POST" action="">
			    <fieldset>
			    <legend class=" text-center"><h3>Update User</h3></legend> 
                <div class="mb-3">
                    <label  class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="email" value="<?php echo $r['username'] ?>" required>
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" value="<?php echo $r['password'] ?>" required>
                </div>
                <br>
                <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                <a href="user.php" class="btn btn-primary">Selesai</a>
                </fieldset>
            </form>

            <?php

if (isset($_POST['edit'])) {
    $sql = mysqli_query($db, "UPDATE tuser SET username='$_POST[username]',password='$_POST[password]' WHERE iduser=$_GET[id]");

if ($sql) {
        echo "<script>alert('Data berhasil di edit!')</script>";
        echo "<script>location=user.php</script>";
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
