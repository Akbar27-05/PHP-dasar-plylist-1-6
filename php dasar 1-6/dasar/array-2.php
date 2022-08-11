<?php

$apel = ['manalagi', 'merah', 'hijau'];
$buah = ['melon' => 2000, 'jeruk' => 3000, 'apel' => $apel];

var_dump($buah);
echo "<pre>";
print_r($buah);
echo "</pre>";


foreach ($buah as $key => $value) {
    if (!is_array($value)) {
        echo $key . "=>" . $value;
        echo "<br>";
    } else {
        echo $key;
        foreach ($value as $key => $value) {
            echo "<li>";
            echo $value;
            echo "</li>";
        }
    }
}
