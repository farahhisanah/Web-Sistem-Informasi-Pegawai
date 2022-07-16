<?php
    include ("koneksi.php");
    $hapus = mysqli_query($db, "DELETE FROM tuser WHERE iduser = $_GET[id]");
    
    if($hapus){
        echo "<script>alert('Data Berhasil Di Hapus')</script>";
        echo "<script>location = 'user.php'</script>";
    }else{
        echo "<script>alert('Data Gagal Di Hapus')</script>";
    }

?>