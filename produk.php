<?php 

// Jualan Produk
// Komik 
// Game

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
    
    // public function sayHello() {
    //     return "Hello World!";
    // }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }


}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2->judul);
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Harry Potter";
$produk3->penulis = "Jk Rowling";
$produk3->penerbit = "Studio Inc";
$produk3->harga = 50000;
// var_dump($produk3);

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->sayHello();
// echo $produk3->getLabel();

// echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 2500000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();



