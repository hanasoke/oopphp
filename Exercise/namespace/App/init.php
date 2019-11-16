<?php

// require_once 'Bookstore/InfoProduct.php';
// require_once 'Bookstore/Bookstore.php';
// require_once 'Bookstore/Novel.php';
// require_once 'Bookstore/Cartoon.php';
// require_once 'Bookstore/PrintProductInfo.php';

// require_once 'Bookstore/User.php';
// require_once 'Service/User.php';

spl_autoload_register(function($class) {
  $class = explode('\\', $class);
  $class = end($class);
  require_once __DIR__ . '/Bookstore/' . $class . '.php';
});

spl_autoload_register(function($class) {
  $class = explode('\\', $class);
  $class = end($class);
  require_once __DIR__ . '/Service/' . $class . '.php';
});