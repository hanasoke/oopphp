<?php 

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';

spl_autoload_register(function($class) {
  // App\Produk\User = ["App", "Produk", "User"]
  // memecahkan string pada suatu pemisah tertentu
  $class = explode('\\', $class);
  // untuk mengambil element terakhir pada array
  $class = end($class);
  // Jika tidak ada namespace nya maka akan seperti dibawah
  // Game = ["Game"];
  require_once __DIR__ . '/Produk/' . $class . '.php';
});

spl_autoload_register(function($class) {
  // App\Produk\User = ["App", "Produk", "User"]
  // memecahkan string pada suatu pemisah tertentu
  $class = explode('\\', $class);
  // untuk mengambil element terakhir pada array
  $class = end($class);
  // Jika tidak ada namespace nya maka akan seperti dibawah
  // Game = ["Game"];
  require_once __DIR__ . '/Service/' . $class . '.php';
});


