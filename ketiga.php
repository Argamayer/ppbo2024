<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;


    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }


    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
}



class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}


class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public function volume($tinggi) : float {
        return self::PHI*pow($this->jari_jari,2)*$tinggi;
    }
}


class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public function volume($tinggi) : float {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$tinggi;
    }
}

$lingkaran = new lingkaran();
$lingkaran->jari_jari = 4;
echo "Luas lingkaran: " . $lingkaran->luas() . " cm²\n";
echo "Keliling lingkaran: " . $lingkaran->keliling() . " cm\n";

$bola = new bola();
$bola->jari_jari = 4;
echo "Volume bola: " . $bola->volume() . " cm³\n";

$tabung = new tabung();
$tabung->jari_jari = 4;
echo "Volume tabung: " . $tabung->volume(10) . " cm³\n";

$nasi_tumpeng = new Kerucut();
$nasi_tumpeng->jari_jari = 4;
echo "Volume nasi tumpeng adalah: " . $nasi_tumpeng->volume(10) . " cm³";

?>