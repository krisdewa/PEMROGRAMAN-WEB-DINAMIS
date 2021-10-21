<?php
    // Deklarasi host,username,password, dan nama database nya.
    $host="localhost";
    $username="root";
    $password="";
    $databasename="akademik";

    // Koneksi untuk ke database nya 
    $con = mysqli_connect($host, $username, $password, $databasename);
    
    // percabangan jika database tidak terkoneksi
    if (!$con) {
        echo "Error: " . mysqli_connect_error();
    exit();
    }
?>