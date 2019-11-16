<?php 

// define('NAMA', 'Hanas Bayu Pratama');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// class Coba {
//     // define tidak bisa diisi dikelas tetapi const dapat diisi dikelas
//     // define('NAMA', 'Hanas');
//     const NAMA = "Hanas";
// }

// echo Coba::NAMA;

// menampilkan baris dimana constan ini ditulis
echo __LINE__;
echo "<br>";
// menampilkan alamat dari file yang bersangkutan
echo __FILE__;
echo "<br>";
// untuk mengetahui direktori dari file yang bersangkutan
echo __DIR__;
echo "<br>";
// untuk mengetahui nama dari sebuah function
function coba() {
    return __FUNCTION__;
}

echo coba();
echo "<br>";
// untuk menampilkan Class Coba 
class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba();
echo $obj->kelas;
echo "<br>";

echo __TRAIT__;
class Ayo {
    public function Mencoba() {
        return __METHOD__; 
    }
}
$sample = new Ayo();
echo $sample->Mencoba();
echo __NAMESPACE__;