<?php
    $filecounter = "counter.txt";
    $fl = fopen($filecounter,"r+");
    $hit = fread($fl,filesize($filecounter));
    echo(" <table width=1000 align=center border = 1 cellspacing = 0 cellpadding=0 bordercolor=#0000FF><tr>");
    echo(" <td width=250 valign=middle align=center>");
    echo(" <font face=times new roman font size=10 color=#FF0000><b>");
    echo(" Anda pengunjung yang ke:"); echo($hit);
    echo(" </b></font>");
    echo(" </td>");
    echo(" </tr></table>");
    fclose($fl);
    $fl = fopen($filecounter,"w+");
    $hit = $hit+1;
    fwrite($fl, $hit, strlen($hit));
    fclose($fl);
?>
