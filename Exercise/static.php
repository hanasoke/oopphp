<?php 

class ContohStatic {
  private static $name = "Hanas";
  private static $age = 20;

  // tidak berfungsi untuk static
  // public static function __setName($name) {
  //   self::$name;
  // }

  public static function __getName() {
    return self::$name;
  }

  private static function halo() {
    return "Halo " . self::$name . ",Umurmu adalah " . self::$age . " Tahun";
  }

  public static function __getHalo() {
    return self::halo();
  }


}

print ContohStatic::__getName();
echo "<br>";
print ContohStatic::__getHalo();
echo "<br>";
echo "<br>";

class Example {
  private static $num = 1;
  private static $num2 = 10;

  public static function __getNum() {
    return self::$num;
  }

  public static function __getNum2() {
    return self::$num2;
  }

  private static function calculate() {
    return "Angka ke ". self::$num++ ." lawannya adalah angka " . self::$num2-- ."<br>";
  }
  
  public static function __getcalculate() {
    return self::calculate();
  }
}

$obj = new Example;
echo $obj->__getcalculate();
echo $obj->__getcalculate();
echo $obj->__getcalculate();
echo $obj->__getcalculate();
echo $obj->__getcalculate();

$obj2 = new Example;
echo $obj2->__getcalculate();
echo $obj2->__getcalculate();
echo $obj2->__getcalculate();
echo $obj2->__getcalculate();
echo $obj2->__getcalculate();
echo $obj2->__getcalculate();
echo $obj2->__getcalculate();
echo $obj2->__getcalculate();