<?php 

class Land {
    public $name,
           $type,
           $driver,
           $wheels;

    public function getDesc() 
    {
        return "{$this->name} | {$this->type}";
    }

    public function __construct($name = "Land Transportation", $type = "Manual", $driver = "Anonymous", $wheels = 2)
    {
        $this->name = $name;
        $this->type = $type;
        $this->driver = $driver;
        $this->wheels = $wheels;
        
    }
}

class PrintLandInfo {
    public function print(Land $trans) {
        $str = "{$trans->getDesc()} | {$trans->driver} | {$trans->wheels}";
        return $str;
    }
}

$car = new Land("Pajero", "Matic", "Hanas", 4);
$motorcycle = new Land("Honda Blade", "Manual", "Carolina", 2);
$bus = new Land("Sanrush", "Manual", "Joseph", 4);
$bicycle = new Land();

$infoTrans = new PrintLandInfo();
echo $infoTrans->print($motorcycle);