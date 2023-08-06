<?php

class Car {
    private $make;
    private $model;
    private $year;

    public function __construct($make,$model,$year){
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    /**
     * @param mixed $make
     */
    public function setMake($make)
    {
        $this->make = $make;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }
    public function display_info () {
        echo "Car Make ". $this->getMake()."\n";
        echo "Car Make ". $this->getModel()."\n";
        echo "Car Make ". $this->getYear()."\n";

    }
}


$object = new Car("Toyota", "Corolla", 2015);

$object->display_info();


// output

//Car Make Toyota
//Car Make Corolla
//Car Make 2015

echo "\n";

$object->setMake('Honda ');
$object->setModel('Civic ');
$object->setYear(2015 );

$object->display_info();

// output

//Car Make Honda
//Car Make Civic
//Car Make 2015












