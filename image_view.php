<?php
include('koneksi.php');
if(isset($_GET['id_buku'])) 
{
    $query = mysqli_query($koneksi,"select * from buku where id_buku='".$_GET['id_buku']."'");
    $row = mysqli_fetch_array($query);
    header("Content-type: " . $row["tipe_gambar"]);
    echo $row["gambar"];
}
else
{
    header('location:home.php');
}
?>