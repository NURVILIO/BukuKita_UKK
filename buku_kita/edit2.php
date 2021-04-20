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
    <div class="container-insert">

        <nav class="nav_insert">
            <li><h2>Edit Buku</h2></li>
        </nav>
        
    </div>

    <div class="container-insert-dua">
    <section class="input-form">
            <form action="doEditProduct.php" method="post" enctype="multipart/form-data">
                <div class="form-buku">
                    <label>Judul Buku</label>
                    <input class="inpJudul" type="text" name="judul">
                </div>

                <div class="form-buku">
                    <label>Pengarang</label>
                    <input class="inpPengarang" type="text" name="pengarang">
                </div>
            
                <div class="form-buku">
                    <label>Penerbit</label>
                    <input class="inpPenerbit" type="text" name="penerbit"> 
                </div>

                <div class="form-buku">
                    <label>Persediaan</label>
                    <input class="inpPersediaan" type="number" name="persediaan"> 
                </div>

                <div class="form-buku">
                    <label>Gambar</label>
                </div>
                <div class="drag-area">
                    <input type="file" name="gambar" class="btn-telusuri">
                </div>
                <div class="simpan-buku">
                    <input type="submit" name="submit" value="Simpan" class="button_simpan">
                </div>
            </form>
            <?php 
            if(isset($_SESSION["message"])){
                echo $_SESSION["message"];
                unset($_SESSION["message"]);
            }
        ?>
        </section>
    </div>
</body>
</html>