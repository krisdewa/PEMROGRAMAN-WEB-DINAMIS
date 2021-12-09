<?php
    // memanggil library FPDF
    require('fpdf/fpdf.php');
    // intance object dan memberikan pengaturan halaman PDF
    $pdf = new FPDF('l','mm','A5');
    // membuat halaman baru
    $pdf->AddPage();
    // SETTING jenis font yang akan digunakan
    //DISINI MENGGUNAKAN FONT ARIAL dengan ukuran 16
    $pdf->SetFont('Arial','B',16);

    // MENCETAK STRING
    $pdf->Cell(190,7,'PROGRAM STUDI TEKNIK INFORMATIKA',0,1,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,7,'DAFTAR MAHASISWA MATKUL PEMROGRAMAN WEB DINAMIS',0,1,'C');
    // Memberikan space kebawah agar tidak terlalu rapat
    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(20,6,'NIM',1,0);
    $pdf->Cell(50,6,'NAMA MAHASISWA',1,0);
    $pdf->Cell(25,6,'J KEL',1,0);
    $pdf->Cell(50,6,'ALAMAT',1,0);
    $pdf->Cell(30,6,'TANGGAL LHR',1,1);
    $pdf->SetFont('Arial','',10);
    
    include 'koneksi.php'; //include merupakan salah satu fungsi bawaan PHP untuk memanggil file PHP lain dan menyisipkan semua isi file PHP tersebut.
    $mahasiswa = mysqli_query($con, "SELECT * FROM mahasiswa"); //melakukan query/menampilkan semua data pada table mahasiswa

    //mysql_fetch_array() berfungsi untuk menangkap data dari hasil perintah query dan membentuknya ke dalam array asosiatif dan array numerik.
    while ($row = mysqli_fetch_array($mahasiswa)){ 
        $pdf->Cell(20,6,$row['nim'],1,0);
        $pdf->Cell(50,6,$row['nama'],1,0);
        $pdf->Cell(25,6,$row['jkel'],1,0);
        $pdf->Cell(50,6,$row['alamat'],1,0);
        $pdf->Cell(30,6,$row['tgllhr'],1,1);
    }
    $pdf->Output(); //berfungsi untuk mengirim PDF ke browser dan memaksa unduhan file dengan nama yang diberikan oleh nama pdf
?>