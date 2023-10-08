<?php 
class Cylinder extends Circle {
    public float $height;

    public function __construct (float $radius, 
                                 string $color, 
                                 float $height) {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getVolume() {
        return parent::getArea() * $this->height;
        //return $this->getArea() * $this->height;
    }

    public function toString() {
        return parent::__toString(). "- Height: $this->height - Volume: " . $this->getVolume();
    }
}