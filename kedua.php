<?php

function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}

function kelilingLingkaran($jari) : float {
    $keliling = 2 * 3.14 * $jari;
    return $keliling;
}

function volumeBola($jari) : float {
    $volume = (4 / 3) * 3.14 * pow($jari, 3);
    return $volume;
}

function volumeTabung($jari, $tinggi) : float {
    $volume = 3.14 * pow($jari, 2) * $tinggi;
    return $volume;
}

function volumeKerucut($jari, $tinggi) : float {
    $volume = (1 / 3) * 3.14 * pow($jari, 2) * $tinggi;
    return $volume;
}


$luas_tanah = luasLingkaran(45);
$keliling_lingkaran = kelilingLingkaran(10);
$volume_bola = volumeBola(10);
$volume_tabung = volumeTabung(10, 10);
$volume_kerucut = volumeKerucut(10, 10);

echo "Luas tanah budi adalah {$luas_tanah}\n";
echo "Keliling lingkaran adalah {$keliling_lingkaran}\n";
echo "Volume bola adalah {$volume_bola}\n";
echo "Volume tabung adalah {$volume_tabung}\n";
echo "Volume kerucut adalah {$volume_kerucut}";