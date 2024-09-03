<?php
// Mendefinisikan sebuah class bernama 'Kendaraan'
class Kendaraan {
    
    // Mendeklarasikan properti
    public $jenis;
    public $warna;
    public $merk;

    // Mendefinisikan metode untuk menampilkan informasi kendaraan
    public function tampilkanInfo() {
        echo "Jenis kendaraan ini adalah " . $this->jenis . ", berwarna " . $this->warna . ", dengan merk " . $this->merk . ".\n";
    }
}

// Membuat objek dari class 'Kendaraan'
$kendaraan1 = new Kendaraan();
$kendaraan2 = new Kendaraan();

// Mengatur properti objek kendaraan1
$kendaraan1->jenis = "Mobil";
$kendaraan1->warna = "Hitam";
$kendaraan1->merk = "Nissan GT-R";

// Mengatur properti objek kendaraan2
$kendaraan2->jenis = "Motor";
$kendaraan2->warna = "Merah";
$kendaraan2->merk = "Ducati";

// Memanggil metode dari objek
$kendaraan1->tampilkanInfo();
$kendaraan2->tampilkanInfo();
?>

