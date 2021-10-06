<?php
    $myDir = "D:/Xampp/htdocs/PWD/Prak1/Upload FILE/";
    $dir = opendir($myDir);
    echo "Isi folder (klik link untuk download : <br>";
    while($tmp = readdir($dir)){
        echo "<a href='$tmp' target='_blank'>$tmp</a><br>";
    }
    closedir($dir);
?>