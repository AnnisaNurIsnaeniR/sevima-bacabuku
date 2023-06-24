<?php
if($_POST){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='register.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into siswa (nama, username, password) value ('".$nama."','".$username."','".md5($password)."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses melakukan register');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal melakukan register');location.href='login.php';</script>";
        }
    }
}
?>