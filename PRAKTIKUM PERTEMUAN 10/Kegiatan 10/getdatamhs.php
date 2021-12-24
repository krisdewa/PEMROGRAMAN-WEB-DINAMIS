<?php
    //Panggil file untuk koneksi ke database
    require_once "koneksi.php";
    //Buat query untuk mengambil data dari database
    $sql = "select * from mahasiswa";
    //Jalankan query
    $query = mysqli_query($con,$sql);
    //Masukkan setiap baris data yang didapat kedalam
    //Array $data
    while ($row = mysqli_fetch_assoc($query)) { // perulangan untuk memasukkan data ke array
        $data[] = $row;
    }
    //Deskripsikan jenis isi konten adalah json
    header('content-type: application/json');
    //Tampilkan data yang didapat dari database dengan format json
    echo json_encode($data);
    // menutup koneksi
    mysqli_close($con);
?>