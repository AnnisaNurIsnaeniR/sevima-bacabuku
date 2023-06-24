<?php
    include "header.php";
    ?>
    <h2>Selamat Datang <?=$_SESSION['nama']?> di website Baca Buku Online.</h2>
    <p>Coba Fitur baru kami</p>
    <form action="" method="post">
    <input type="text" placeholder="ketikan sesuatu" name="command">
    <button>send</button>
</form>
<?php
    include "footer.php";
    ?>