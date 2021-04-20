<?php
    
    session_start();
    if(isset($_POST["judul"])){
        include 'koneksi.php';

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
        }else if(!isset($gambar["tmp_name"]) || $gambar["tmp_name"]==""){
            $message    ="Gambar harus dipilih!";
        }else{
            $filePath = "upload/".basename($gambar["name"]);
            move_uploaded_file($gambar["tmp_name"], $filePath);

            $connection->query("INSERT INTO tabel_buku VALUES (null,'".$judul."','".$pengarang."','".$penerbit."','".$persediaan."','".$filePath."')");

            //$message    = "Berhasil Menambah Buku!";
        }

        $_SESSION["message"] = $message;
    }
    header("location:view2.php");
    exit();
?>