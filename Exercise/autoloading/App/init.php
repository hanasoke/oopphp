<?php 

// require_once 'App/Bookstore/InfoProduct.php';
// require_once 'App/Bookstore/Bookstore.php';
// require_once 'App/Bookstore/Novel.php';
// require_once 'App/Bookstore/Cartoon.php';
// require_once 'App/Bookstore/PrintProductInfo.php';

spl_autoload_register(function($class) {
  require_once __DIR__ . '/Bookstore/' . $class . '.php';
});