<?php 
    require_once 'class_matematika.php';

    matematika::$counter++;
    matematika::$counter++;
    matematika::naikancounter();
    echo 'Counter Sekarang : '. matematika::$counter;
    echo '<hr/>';

    $x = matematika::tambahkan(4,5);
    echo "4 + 5 = $x";
    echo '<hr/>';

    echo 'Nilai PHI : '.matematika::PHI;
    $luas_lingkaran = matematika::luasLingkaran(8);
    echo '<br/>Luas Lingkaran dengan jari-jari 8 adalah : '.$luas_lingkaran;

    echo '<hr/>';
    $x = matematika::kurangkan(35,15);
    echo "35 - 15 = $x";
    echo '<hr/>';

?>
