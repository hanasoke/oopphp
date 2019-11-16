<?php 

interface InfoProduct {
  public function getInfoProduct();
}

abstract class Bookstore {
  protected $head,
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
  
  abstract protected function getInfo();
}

class Cartoon extends Bookstore implements InfoProduct {

  public $time;

  public function __construct($head = "Head", $writer="Anonim", $publisher = "Anonim", $price = 0, $time = 0) {

    parent::__construct($head, $writer, $publisher, $price);

    $this->time = $time;

  }

  protected function getInfo(){
    $produk = "{$this->getLabel()} | Rp. {$this->price}";
    return $produk;
  }

  public function getInfoProduct() {
    $produk = "Cartoon : ". $this->getInfo()." ~ {$this->time} Hours.";

    return $produk;
  }

}

class Novel extends Bookstore implements InfoProduct {

  public $pages;

  public function __construct($head = "Head", $writer="Anonim", $publisher = "Anonim", $price = 0, $pages = 0) {

    parent::__construct($head, $writer, $publisher, $price);

    $this->pages = $pages;
  }
  
  protected function getInfo(){
    $produk = "{$this->getLabel()} | Rp. {$this->price}";
    return $produk;
  }

  public function getInfoProduct() {
    $produk = "Novel : ". $this->getInfo()." ~ {$this->pages} Pages.";
    return $produk;
  }

}

class PrintProductInfo {
  public $listProduct = [];

  public function addProduct(Bookstore $books) {
    $this->listProduct[] = $books;
  }

  public function print() {
    $str = "List Product : <br>";

    foreach ($this->listProduct as $p) {
      $str .= "-{$p->getInfoProduct()} <br>";
    }

    return $str;
  }
}

$produk1 = new Cartoon("Spongebob SquarePants","Stephen Hillenburg", "United Plankton Picture", 30000, 2);

$produk2 = new Novel("Laskar Pelangi", "Andrea Hirata", "Bentang Pustaka", 40000, 529);

$produk3 = new Novel("5cm", "Donny Dhirgantoro", "Grasindo", 55000, 382);

$produk4 = new Cartoon("Doraemon", "Fujiko F.Fujjio", "Shogakukan", 40000, 5);

$printProduct = new PrintProductInfo();
$printProduct->addProduct($produk1);
$printProduct->addProduct($produk2);
$printProduct->addProduct($produk3);
$printProduct->addProduct($produk4);

print $printProduct->print();