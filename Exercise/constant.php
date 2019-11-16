<?php 

define('NAME', 'Hanas Bayu Pratama');
echo NAME;

echo "<br>";

const AGE = 20;
echo AGE;

echo "<br>";

class Product {
  const Tea = "Teh Botol Sosro";
}

print Product::Tea;

echo "<br>";

// menampilkan baris dimana constan ini ditulis
echo "Baris Codingan ke " . __LINE__;
echo "<br>";

// menampilkan alamat dari file yang bersangkutan
print "File ini terletak di " . __FILE__;

echo "<br>";

// menampilkan direktori dari file yang bersangkutan
echo "Direktori file ini adalah" . __DIR__;

// untuk mengetahui nama dari sebuah function
function Airport() {
  return __FUNCTION__;
}

print "<br>";

echo Airport();

print "<br>";

// menampilkan Class Coba
class Airship {
  public $transport = __CLASS__;

  public function Sail() {
    return __METHOD__;
  }
}

$trans = new Airship();
print $trans->transport;
echo "<br>";
print $trans->Sail();