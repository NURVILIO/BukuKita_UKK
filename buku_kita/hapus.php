<?php
    
    session_start();
    if(isset($_GET["id"])){
        include 'koneksi.php';

        $connection->query("DELETE FROM tabel_buku WHERE id=".$_GET["id"]);
    }
    header("location:view2.php");
    exit();
?>