<?php


class Car
{

    //Properties / Fiels
    private $brand;
    private  $color;
    

    //Constructor
    public function __construct($brand, $color = "none")
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    //Getter & setter methods
    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {

        $this->brand = $brand;
    }
    public function getColor($color)
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $allowedColors = [
            "red",
            "blue",
             "green",
             "yellow"
        ];
        
        if (in_array($color,  $allowedColors)) {
             
            $this->color = $color;

        }

    }


    //Method
    public function getCarInfo()
    {
        return "Brand: " . $this->brand  . "Color: " . $this->color;
    }
}
