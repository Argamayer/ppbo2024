<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$waktu = date('H:i');

// Menentukan sapaan berdasarkan waktu saat ini
if ($waktu >= 5 && $waktu < 11) {
    $sapaan = "Selamat pagi";
} elseif ($waktu >= 11 && $waktu < 15) {
    $sapaan = "Selamat siang";
} elseif ($waktu >= 15 && $waktu < 19) {
    $sapaan = "Selamat sore";
} else {
    $sapaan = "Selamat malam";
}

echo "{$sapaan}, {$nama}, sekarang pukul {$waktu}\n"; 
