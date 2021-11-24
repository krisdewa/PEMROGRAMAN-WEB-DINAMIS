<?php
    include "koneksi.php";
    $id_user = $_POST['id_user'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $level = "";

    $sql = "INSERT INTO users(id_user, password, nama_lengkap, email, level) VALUES ('$id_user', '$pass', '$nama_lengkap','$email','$level')";
    $query = mysqli_query($con, $sql);
    
    mysqli_close($con);
    header('location:tampil_user.php');
?>