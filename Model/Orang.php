<?php

class Orang {
    public $nama, $umur;

    public function __construct($nama, $umur)
    {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    public function sayHello()
    {
        return "halo, nama saya {$this->nama} dan umur saya {$this->umur} tahun";
    }

    public static function sayaStatic()
    {
        return 'saya static orang.php';
    }
}