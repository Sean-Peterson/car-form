<?php
class Car
{
    private $make_model;
    private $price;
    public $miles;

    function __construct($car_type, $car_price, $car_miles)
    {
        $this->make_model = $car_type;
        $this->price = $car_price;
        $this->miles = $car_miles;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getModel()
    {
        return $this->make_model;
    }

    function getMiles()
    {
        return $this->miles;
    }
}



$porsche = new Car("2014 Porsche 911", 114991, 7864);

$ford = new Car("2011 Ford F450", 55995, 14241);

$lexus = new Car("2013 Lexus RX 350", 44700, 20000);

$mercedes = new Car("Mercedes Benz CLS550", 39900, 37979);

$mazda = new Car("2016 Mazda 6", 25000, 50000);




$cars = array($porsche, $ford, $lexus, $mercedes);

$cars_matching_search = array();
foreach ($cars as $car) {
    if ($car->getPrice() < $_GET["price"]) {
        array_push($cars_matching_search, $car);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
        <?php
            foreach ($cars_matching_search as $car) {
                $our_price = $car->getPrice();
                $our_model = $car->getModel();
                $our_miles = $car->getMiles();
                echo "<li> $our_model </li>";
                echo "<ul>";
                    echo "<li> $$our_price </li>";
                    echo "<li> Miles: $our_miles </li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
