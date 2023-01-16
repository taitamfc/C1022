<?php

class Cylinder
{
    private $radius;
    private $height;
    public function __construct($radius, $height){
        $this->radius = $radius;
        $this->height = $height;
    }
    // tinh the tich
    public function getVolume()
    {
        // Tinh dien tich
        $baseArea = $this->tinh_dien_tich();
        // Tinh chu vi
        $perimeter = $this->tinh_chu_vi();
        
        return $perimeter * $this->height + 2 * $baseArea;
    }
    // Tinh dien tich
    public function tinh_dien_tich(){
        $baseArea = pi() * $this->radius * $this->radius;
        return $baseArea;
    }
    // Tinh chu vi
    public function tinh_chu_vi(){
        $perimeter = 2 * pi() * $this->radius;
        return $perimeter;
    }
}

$objCylinder = new Cylinder(1,2);
echo $objCylinder->getVolume();