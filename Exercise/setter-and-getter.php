<?php 

class Bookstore {
  private $head,
    $writer,
    $publisher,
    $discount,
    $price;

  public function __construct($head = "Head", $writer="Anonim", $publisher = "Anonim", $price = 0) {

    $this->head = $head;
    $this->writer = $writer;
    $this->publisher = $publisher;
    $this->price = $price;
  }

  public function __setHead($head) {
    if (!is_string($head)) {
      throw new Exception("Head must be String");
    }
    $this->head = $head;
  }

  public function __getHead() {
    return $this->head;
  }

  public function __setWriter($writer) {
    if (!is_string($writer)) {
      throw new Exception("Head must be String");
    }
    $this->writer = $writer;
  }

  public function __getWriter() {
    return $this->writer;
  }

  public function __setPublisher() {
    if (!is_string($publisher)) {
      throw new Exception("Head must be String");
    }
    $this->publisher = $publisher;
  }

  public function __getPublisher() {
    return $this->publisher;
  }

  public function __setPrice() {
    if (is_string($price)) {
      throw new Exception("Head must be Integer");
    }
    $this->price = $price;
  }

  public function __getPrice() {
    return $this->price - ($this->price * $this->discount / 100);
  }

  public function __setDiscount($discount) {
    if (is_string($discount)) {
      throw new Exception("Head must be Integer");
    }
    $this->discount = $discount;
  }

  public function __getDiscount() {
    return $this->discount;
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
    $produk = "Novel : ". parent::getInfoProduk()." ~ {$this->pages} Pages.";
    return $produk;
  }
}

$produk1 = new Cartoon("Spongebob SquarePants","Stephen Hillenburg", "United Plankton Picture", 30000, 2);

$produk2 = new Novel("Laskar Pelangi", "Andrea Hirata", "Bentang Pustaka", 40000, 529);

$produk3 = new Novel("5cm", "Donny Dhirgantoro", "Grasindo", 55000, 382);

$produk4 = new Cartoon("Doraemon", "Fujiko F.Fujjio", "Shogakukan", 40000, 5);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();
print "<br>";
echo $produk4->getInfoProduk();
echo "<br>";
echo "<br>";
echo "<br>";

$produk2->__setDiscount(50);
echo "Harga Buku Laskar Pelangi setelah Diskon adalah Rp. " . $produk2->__getPrice();
print "<br>";

$produk3->__setDiscount(40);
echo "Harga Buku 5cm setelah Diskon adalah Rp. " . $produk3->__getPrice();

print "<br>";
echo "<br>";

$produk1->__setHead("Waifu");
print "Judul buku ini adalah " . $produk1->__getHead();