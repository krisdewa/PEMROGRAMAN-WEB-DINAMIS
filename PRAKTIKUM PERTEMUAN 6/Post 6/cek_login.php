<?php
session_start();
include "koneksi.php";
$id_user = $_POST['id_user'];
$pass = md5($_POST['paswd']);
$sql = "SELECT * FROM users WHERE id_user='$id_user' AND password='$pass'";
if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {
    $login = mysqli_query($con, $sql);
    $ketemu = mysqli_num_rows($login);
    if ($ketemu > 0) {
        $r = mysqli_fetch_array($login);
        if ($r['level'] == "admin") {
            $_SESSION['iduser'] = $r['id_user'];
            $_SESSION['passuser'] = $r['password'];
            $_SESSION['admin'] = $r['level'];

            echo "USER BERHASIL LOGIN<br>";

            echo "id user =", $_SESSION['iduser'], "<br>";
            echo "password=", $_SESSION['passuser'], "<br>";
            echo "level=", $_SESSION['admin'], "<br><br>";

            echo "<a href=logout.php><b>LOGOUT</b></a></center><br><br>";
            echo "<a href=tampil_user.php><b>TAMPIL USER</b></a></center>";
        } elseif ($r['level'] == "anggota") {
            $_SESSION['iduser'] = $r['id_user'];
            $_SESSION['passuser'] = $r['password'];
            $_SESSION['anggota'] = $r['level'];

            echo "USER BERHASIL LOGIN<br>";

            echo "id user =", $_SESSION['iduser'], "<br>";
            echo "password=", $_SESSION['passuser'], "<br>";
            echo "level=", $_SESSION['anggota'], "<br><br>";
            echo "<a href=logout.php><b>LOGOUT</b></a></center>";
        } else {
            echo "<center>Tidak Ada akses<br>";
            echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>";
        }
    } else {
        echo "<center>Login gagal! username & password tidak benar<br>";
        echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>";
    }
    mysqli_close($con);
} else {
    echo "<center>Login gagal! Captcha tidak sesuai<br>";
    echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>";
}