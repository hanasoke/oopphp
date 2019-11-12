<?php 

class Bookstore {
  public $head,
          $writer,
          $publisher,
          $price,
          $pages,
          $time,
          $type;

  public function __construct($head = "Head", $writer="Anonim", $publisher = "Anonim", $price = 0, $pages = 0, $time = 0, $type = "Tipe") {

    $this->head = $head;
    $this->writer = $writer;
    $this->publisher = $publisher;
    $this->price = $price;
    $this->pages = $pages;
    $this->time = $time;
    $this->type = $type;
  }

  public function getLabel() {
    return "{$this->head} | {$this->writer} | {$this->publisher}"; 
  }

  public function getInfoLengkap() {
    $produk = "{$this->getLabel()} | Rp. {$this->price}";

    if ($this->type == "Komik" || $this->type == "Novel") {
      $produk .= " - {$this->pages} Pages.";
    } else if($this->type = "Cartoon") {
      $produk .= " ~ {$this->time} Hours.";
    }

    return $produk;
  }

}

$produk1 = new Bookstore("Spongebob SquarePants","Stephen Hillenburg", "United Plankton Picture", 30000, 0, 2, "Cartoon" , 0);

$produk2 = new Bookstore("Laskar Pelangi", "Andrea Hirata", "Bentang Pustaka", 40000, 529, 0, "Novel", 0);

$produk3 = new Bookstore("5cm", "Donny Dhirgantoro", "Grasindo", 55000, 382, 0, "Novel", 0);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<br>";
echo $produk3->getInfoLengkap();