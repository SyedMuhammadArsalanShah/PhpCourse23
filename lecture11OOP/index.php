<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <style>
        h1 {
            text-align: center;
            color: aliceblue;
            background-color: royalblue;
        }

        h2 {
            text-align: center;
            color: royalblue;
            background-color:aliceblue;
        }

    </style>
</head>

<body>



    <h1>OOP => Object Oriented Programming 📖📔📚 </h1>
</body>

</html>





<?php



class Car
{

    public $name;
    public $price;
    public $engine;
    public $plateNo;
    public $speed;
    public $trans;
    public $km;





    public function __construct($name, $price, $engine, $plateNo, $speed, $trans, $km)
    {
      

        $this->name = $name;
        $this->price = $price;
        $this->engine = $engine;
        $this->plateNo = $plateNo;
        $this->speed = $speed;
        $this->trans = $trans;
        $this->km = $km;

        echo "<hgroup>";
        echo "  <h1>name = " . $name . "</h1>";
        echo "  <h2>price = " . $price . "</h2>";
        echo "  <h2>engine = " . $engine . "</h2>";
        echo "  <h2>plateNo= " . $plateNo . "</h2>";
        echo "  <h2>speed = " . $speed . "</h2>";
        echo "  <h2>trans = " . $trans . "</h2>";
        echo "  <h2>Km = " . $km . "</h2>";
        echo "</hgroup>";
    }

    public function setName($name)
    {

        $this->name = $name;
    }


    public function getName()
    {

        echo "<h1>" . $this->name . "</h1>";
    }
}







// $car1 = new Car();
// $car1->setName("Honda");
// $car1->getName();






// $car2 = new Car();
// $car2->setName("Toyota");
// $car2->getName();




// $car3 = new Car();
// $car3->setName("Suzuki");
// $car3->getName();



// $car4 = new Car();
// $car4->setName("KiA");
// $car4->getName();







$mycar1 = new Car("honda", "1430000", "2700cc", "GLS-404", "250", "auto gear", "5000km");
$mycar2 = new Car("suzuki", "1430000", "2700cc", "GLS-404", "250", "auto gear", "5000km");
$mycar3 = new Car("kia", "1430000", "2700cc", "GLS-404", "250", "auto gear", "5000km");
$mycar4 = new Car("unique", "1430000", "2700cc", "GLS-404", "250", "auto gear", "5000km");
$mycar5 = new Car("united", "1430000", "2700cc", "GLS-404", "250", "auto gear", "5000km");
$mycar6 = new Car("toyota", "1430000", "2700cc", "GLS-404", "250", "auto gear", "5000km");


// echo "Name =" . $mycar1->name . "<br>";
// echo "Name =" . $mycar2->name . "<br>";
// echo "Name =" . $mycar3->name . "<br>";
// echo "Name =" . $mycar4->name . "<br>";
// echo "Name =" . $mycar5->name . "<br>";
// echo "Name =" . $mycar6->name . "<br>";










?>