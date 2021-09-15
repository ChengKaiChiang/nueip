<?php
interface Template
{
    public function open_door();
}

class Transportation
{
    private $_name = null;
    private $_wheels = 0;

    public function __construct($name, $wheels)
    {
        $this->_name = $name;
        $this->_wheels = $wheels;
    }
    public function walk()
    {
        echo "GO \n";
    }
    public function stop()
    {
        echo "STOP \n";
    }

    public function get_info()
    {
        echo "Name: ". $this->_name . "\n";
        echo "Number of wheels: ". $this->_wheels . "\n";
    }
}

class Motorcycle extends Transportation
{
    public function __construct()
    {
        parent::__construct("Motorcycle", 2);
    }
    public function walk()
    {
        echo "Motorcycle GO \n";
    }
}

class Car extends Transportation implements Template
{
    public function __construct()
    {
        parent::__construct("Car", 4);
    }
    public function walk()
    {
        echo "Car GO \n";
    }
    public function open_door()
    {
        echo "Car Open Door \n";
    }
}

echo "=====Motorcycle=====\n";
$motor = new Motorcycle();
$motor->walk();
$motor->stop();
$motor->get_info();

echo "=====Car=====\n";
$car = new Car();
$car->walk();
$car->stop();
$car->get_info();
$car->open_door();
