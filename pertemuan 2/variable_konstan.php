<?php
    // mendefinisikan konstanta
    define("PHI", 3.14);
    define("DBNAME", "Inventori");
    define("DBSERVER", "localhost");

    $jari = 8;
    $luas = PHI * $jari * $jari;
    $kell = 2 * PHI * $jari;

    echo "Luas Lingkaran dengan Jari " .$jari." : " .$luas;
    echo "<br/>kelilingnya : " .$kell;
?>
<hr>
<?php
    echo "Nama Database : " .DBNAME;
    echo "<br/>Lokasi Database " .DBSERVER;
?>