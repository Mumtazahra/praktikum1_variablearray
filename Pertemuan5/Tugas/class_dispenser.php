<?php
class Dispenser{
    public $namaMinuman;
    protected $volume;
    protected $hargaSegelas;
    const volumeGelas = 250;
    public $hasilVolume;

    public function isi ($vol){
        return $this->volume = $vol;
    }
    public function harga ($hrg){
        return $this->hargaSegelas = $hrg;
    }
    public function hasilVolume($vol){
        $this->volume = $vol - self::volumeGelas;
        echo "Hasil Volume Sekarang Adalah" .$this->volume ." " . "Ml";
    }
}
$aqua = new Dispenser();
echo $aqua -> namaMinuman = 'Nama Minuman : Aqua';
echo "<hr>";
echo "</br>";
echo $aqua -> isi ('Volume galon nya adalah 1000 Ml');
echo "</br>";
echo $aqua -> harga ('Harga segelas nya adalah 3000 Rupiah');
echo "</br>";
echo "Andi membeli air 1 gelas yang volumenya " .Dispenser::volumeGelas ." " . "Ml";
echo "</br>";
$aqua->hasilVolume(1000);
?>