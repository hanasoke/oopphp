<?php 

require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";

// untuk memberi alias maka gunakan as
use App\Service\User as ServiceUser;
new ServiceUser();
// new App\Service\User();

print "<br>";

// new App\Produk\User();
use App\Produk\User as ProdukUser;
new ProdukUser;








