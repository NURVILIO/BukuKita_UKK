<?php 
    $connection = new mysqli("localhost", "root", "", "buku");

    if(!$connection){
        echo "koneksi dengan databse gagal";
        exit();
    }