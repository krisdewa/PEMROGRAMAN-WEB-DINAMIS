<?php
    session_start();
    session_destroy();
    echo "Anda telah sukses keluar sistem <b>LOGOUT</b><br>";
    echo "Kembali ke <a href=form_login.php><b>LOGIN</b></a></center>";
?>