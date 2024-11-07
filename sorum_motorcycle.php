<?php 
    require_once 'class_motorcycle.php';

    $honda = new motorcycle();
    $suzuki = new motorcycle();

    $honda->set_tipe('Honda');
    $honda->set_merk('PCX');
    $suzuki->set_tipe('Suzuki');
    $suzuki->set_merk('Fiz R');

    echo 'Tipe Motor '.$honda->get_tipe().' Merknya '.$honda->get_merk();
    echo '<br/>Tipe Motor '.$suzuki->get_tipe().' Merknya '.$suzuki->get_merk();
?>