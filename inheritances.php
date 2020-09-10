<?php
class Mobil{
    public $nama, $merk, $warna, $kecepatanMaksimal, $jumlahPenumpang;

    public function tambahKecepatan(){
        return "Kecepatan bertambah";
    }

}

class MobilSport extends Mobil{
    public $turbo = false;

    public function aktifkanTurbo(){
        $this->turbo=true;
        return "Turbo diaktifkan";
    }
}

$mobilKu = new MobilSport();
echo $mobilKu->tambahKecepatan();
echo "<br>";
echo $mobilKu->aktifkanTurbo();
?>