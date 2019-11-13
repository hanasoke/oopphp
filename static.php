<?php 

// class ContohStatic {
//   public static $angka = 1;

//   public static function halo() {
//     return "Halo " . self::$angka++ . " kali.";
//   }
// }

// print ContohStatic::$angka;
// echo "<br>";
// print ContohStatic::halo();
// echo "<br>";
// echo ContohStatic::halo();

class Contoh {
  public static $angka = 1;

  public function halo() {
    return "Halo " . self::$angka++  . " kali. <br>";
  }

}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

print "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

