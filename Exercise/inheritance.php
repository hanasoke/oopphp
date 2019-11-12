<?php 

class Bookstore {
  public $head,
          $writer,
          $publisher,
          $price,
          $pages,
          $time;

  public function __construct($head = "Head", $writer="Anonim", $publisher = "Anonim", $price = 0, $pages = 0, $time = 0) {

    $this->head = $head;
    $this->writer = $writer;
    $this->publisher = $publisher;
    $this->price = $price;
    $this->pages = $pages;
    $this->time = $time;
  }

  public function getLabel() {
    return "{$this->head} | {$this->writer} | {$this->publisher}"; 
  }

  public function getInfoProduk() {
    $produk = "{$this->getLabel()} | Rp. {$this->price}";
    return $produk;
  }
}

class Cartoon extends Bookstore {
  public function getInfoProduk() {
    $produk = "Cartoon : {$this->getLabel()} | {$this->price} | {$this->time} Hours.";

    return $produk;
  }
}

class Novel extends Bookstore {
  public function getInfoProduk() {
    $produk = "Novel : {$this->getLabel()} | {$this->price} | {$this->pages} Pages";

    return $produk;
  }
}

$produk1 = new Cartoon("Spongebob SquarePants","Stephen Hillenburg", "United Plankton Picture", 30000, 0, 2, 0);

$produk2 = new Novel("Laskar Pelangi", "Andrea Hirata", "Bentang Pustaka", 40000, 529, 0, 0);

$produk3 = new Novel("5cm", "Donny Dhirgantoro", "Grasindo", 55000, 382, 0, 0);

$produk4 = new Cartoon("Doraemon", "Fujiko F.Fujjio", "Shogakukan", 40000,0, 5, 0);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();
print "<br>";
echo $produk4->getInfoProduk();