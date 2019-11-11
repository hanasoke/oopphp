<?php 

class Land {
    public $name,
           $type,
           $driver,
           $wheels;

    public function getDesc() 
    {
        return "$this->name, $this->type, $this->driver, $this->wheels";
    }

    public function __construct($name = "Land Transportation", $type = "Manual", $driver = "Anonymous", $wheels = 2)
    {
        $this->name = $name;
        $this->type = $type;
        $this->driver = $driver;
        $this->wheels = $wheels;
        
    }
    
}

$car = new Land("Pajero", "Matic", "Hanas", 4);
$motorcycle = new Land("Honda Blade", "Manual", "Carolina", 2);
$bus = new Land("Sanrush", "Manual", "Joseph", 4);
$sepeda = new Land();

echo "Mobil : " . $car->getDesc();

echo "<br>";

echo "Motor : " . $motorcycle->getDesc();

echo "<br>";

echo "Motor : " . $bus->getDesc();

print "<br>";

echo "Sepeda : " . $sepeda->getDesc();