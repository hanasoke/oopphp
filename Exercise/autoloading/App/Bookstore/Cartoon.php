<?php 

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