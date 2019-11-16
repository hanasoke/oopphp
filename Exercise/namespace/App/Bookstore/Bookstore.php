<?php 

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