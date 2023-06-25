<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <?php
        include "header.php";
        include "koneksi.php";
        $qry_detail_buku=mysqli_query($conn, "select * from  buku where id_buku = '".$_GET['id_buku']."'");
        $dt_buku=mysqli_fetch_array($qry_detail_buku);
    ?>
    <main class="container">
    <section class="py-5 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-primary">Details </h1>
        </div>
    </section>

    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="image_view.php?id_buku=<?=$dt_buku['gambar']?>" height="auto" width="300px"><br><br><br><hr><br>
            </div>
            <div class="col-md-8">
            <div class="card-body">
            <form>
                <input type="hidden" name="id_buku" value="<?=$data_buku['id_buku']?>">
                <table class="table table-hover table-stripped">
                    <thead>
                        <tr>
                            <td>Judul Buku : <?=$dt_buku['judul_buku']?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi : <?=$dt_buku['deskripsi']?></td>
                        </tr>
                        <tr>
                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</td>                 
                        </tr>
                    </thead>
                </table>
            </form>
            </div>
            </div>
        </div>
    </div>