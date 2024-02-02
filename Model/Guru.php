<?php
require 'Model/Orang.php';

class Guru extends Orang{

    public function aktifitasGuru(){
        echo 'saya mengajar TIK';
    }

    public function sayHello(){ //mengoverride method parent
        echo 'hallo saya adalah guru';
    }

    static public function StaticMethod(){
        echo 'saya adalah static';
    }
}