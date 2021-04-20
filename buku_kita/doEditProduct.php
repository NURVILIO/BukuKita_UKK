<?php
    
    session_start();
    if(isset($_POST["judul"])){
        include 'koneksi.php';

        $id = $_POST["id"];
        $judul = $_POST["judul"];
        $pengarang = $_POST["pengarang"];
        $penerbit = $_POST["penerbit"];
        $persediaan = $_POST["persediaan"];
        $gambar = $_FILES["gambar"];

        $message        ="";

        if($judul==""){
            $message    = "Judul harus diisi!";
        }else if($pengarang==""){
            $message    = "Nama Pengarang harus diisi!";
        }else if($penerbit==""){
            $message    ="Penerbit harus diisi!";
        }else if($persediaan==""){
            $message    ="Jumlah Persediaan harus diisi!";
        }else{

            if(isset($gambar["tmp_name"]) && $gambar["tmp_name"]!=""){
                $filePath = "upload/".basename($gambar["name"]);
                move_uploaded_file($gambar["tmp_name"], $filePath);

                $connection->query("UPDATE tabel_buku SET gambar='".$filePath."' WHERE id= ".$id);
            }
            $connection->query("UPDATE tabel_buku SET judul='".$judul."', pengarang='".$pengarang."', penerbit='".$penerbit."', persediaan='".$persediaan."' WHERE id=".$id);

            //$message    = "Berhasil Edit Buku!";
        }

        $_SESSION["message"] = $message;

        header("location:view2.php?id=".$id);
        exit();
    }
    header("location:view2.php");
    exit();
?>