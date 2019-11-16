<?php 

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