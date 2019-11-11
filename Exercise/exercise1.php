<?php 

class Land {
    public $name = 'Land Transportation',
           $type = ['Manual', 'Matic'],
           $driver = 'Anonymous',
           $wheels = [2,4];
    
    // public function describe()
    // {
    //     return "These are The Land Transportation";
    // } 

    public function getDesc() 
    {
        return "$this->name, $this->type, $this->driver, $this->wheels";
    }
    
}

// $car = new Land();
// $motorcycle = new Land();
// $bus = new Land();

// var_dump($car);
// var_dump($motorcycle);
// var_dump($bus);

$car = new Land();
$motorcycle = new Land();
$bus = new Land();

// var_dump($car);
// Car Description
$car->name = 'Pajero';
$car->type = 'Matic';
$car->driver = 'Hanas';
$car->wheels = 4;
$car->penumpang = 'Anonymous';
// var_dump($car);

// Motorcycle Description
$motorcycle->name = "Honda Blade";
$motorcycle->type = "Manual";
$motorcycle->driver = "Carolina";
$motorcycle->wheels = 2;

// Bus Description
$bus->name = "Sanrush";
$bus->type = "Manual";
$bus->type = "Matic";
$bus->wheels = 4;

print "This Transportation is $car->name, The Type of $car->name is $car->type, The Driver of $car->name is $car->driver";

// echo "<br>";
// echo "<br>";

// print $car->describe();

print "<br>";
print "<br>";

echo "Mobil : " . $car->getDesc();

echo "<br>";

echo "Motor : " . $motorcycle->getDesc();

echo "<br>";

echo "Motor : " . $bus->getDesc();