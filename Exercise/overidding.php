<?php 

class Bookstore {
  public $head,
          $writer,
          $publisher,
          $price;

  public function __construct($head = "Head", $writer="Anonim", $publisher = "Anonim", $price = 0) {

    $this->head = $head;
    $this->writer = $writer;
    $this->publisher = $publisher;
    $this->price = $price;
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

  public $time;

  public function __construct($head = "Head", $writer="Anonim", $publisher = "Anonim", $price = 0, $time = 0) {

    parent::__construct($head, $writer, $publisher, $price);

    $this->time = $time;

  }

  public function getInfoProduk() {
    $produk = "Cartoon : ". parent::getInfoProduk()." ~ {$this->time} Hours.";

    return $produk;

  }
}

class Novel extends Bookstore {

  public $pages;

  public function __construct($head = "Head", $writer="Anonim", $publisher = "Anonim", $price = 0, $pages = 0) {

    parent::__construct($head, $writer, $publisher, $price);

    $this->pages = $pages;

  }

  public function getInfoProduk() {
    $produk = "Novel : {$this->getLabel()} | {$this->price} | {$this->pages} Pages";
    return $produk;
  }
}

$produk1 = new Cartoon("Spongebob SquarePants","Stephen Hillenburg", "United Plankton Picture", 30000, 2);

$produk2 = new Novel("Laskar Pelangi", "Andrea Hirata", "Bentang Pustaka", 40000, 529);

$produk3 = new Novel("5cm", "Donny Dhirgantoro", "Grasindo", 55000, 382);

$produk4 = new Cartoon("Doraemon", "Fujiko F.Fujjio", "Shogakukan", 40000, 5);

$produk5 = new Novel();

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();
print "<br>";
echo $produk4->getInfoProduk();
echo "<br>";
print $produk5->getInfoProduk();