<?php 

require_once '../App/init.php';

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

echo "<br>";

// untuk memberi alias maka gunakan as
use App\Service\User as ServiceUser;
new ServiceUser();

// new App\Service\User();

echo "<br>";

use App\Bookstore\User as UserBookstore;
new UserBookstore;