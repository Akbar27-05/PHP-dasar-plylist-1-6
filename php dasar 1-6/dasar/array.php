<?php
    $buah = ['melon', 'jeruk', 2000, 'durian'];
    var_dump($buah);
    echo "<br>";

    echo $buah[0];
    echo "<br>";

    foreach ($buah as $key => $value){
        echo $key ."=>". $value;
        echo "<br>";
    }


    // array asosiatif

    $harga = ['kucing' => 2000, 'kelinci' => 4000, 'ular' => 1000];

    var_dump($harga);
    echo "<br>";

    echo $harga['kucing']; //cara memanggil array asosiatif
    echo "<br>";

    foreach ($harga as $key => $value) { // $key digunakan untuk melihat bagaimna cra pemnggilan
        echo $key. " Harganya " .$value;
        echo "<br>";
    }
    echo "<br>";

    $isi = array_keys($harga);
    var_dump($isi);
    echo "<br>";

    echo $isi[2]; //cara memanggil array asosiatif menggunakan staples anggka 
