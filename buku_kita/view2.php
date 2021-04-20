<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style2.css">
    <title>Document</title>
</head>
<body>
    <div class="container">

        <div class="logo">
            <img src="assets/img/logo.png" class="logo">
        </div>

        <nav class="nav_links">
            <li><h2>Daftar Buku</h2></li>
        </nav>
        <a href="insert2.php" ><button class="cta">Tambah Buku</button></a>

        
    </div>
    <?php 
            include 'koneksi.php';
            $getProduct = $connection->query("SELECT * FROM tabel_buku");
            while($fetchProduct = $getProduct->fetch_assoc()){
        ?>

    <div class="container-dua">
    


        <div class="layanan satu">
            <img src="<?=$fetchProduct["gambar"]?>" class="poto">
            <p class="judul-buku"><?=$fetchProduct["judul"]?></p>
            <a href="edit2.php?id=<?=$fetchProduct["id"]?>"><button>Edit</button></a>
            <a href="hapus.php?id=<?=$fetchProduct["id"]?>"><button class="hapus">Hapus</button></a>
        </div>
        <?php

            }
        ?>
    </div>
</body>
</html>