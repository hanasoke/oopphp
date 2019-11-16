<?php 

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