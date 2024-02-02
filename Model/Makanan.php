<?php
class Makanan {
    public $nama = 'Semangka';
    private $jenis = 'buah';
    protected $harga = 15000;

    public function getJenis() {
        return $this->jenis;
    }
}
class Buah extends Makanan {
    public function getHarga(){
        return $this->harga;
    }
}
// diluar class

// echo $makanan1->harga; //Fatal error: Uncaught Error: Cannot access protected property 
$buah1 = new Buah();
// echo $buah1->harga; //Fatal error: Uncaught Error: Cannot access protected property
echo $buah1->getHarga(); // 15000

