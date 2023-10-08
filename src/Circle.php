<?php 
class Circle 
{
 public float $radius;
 public string $color;
 
public function __construct (float $radius, 
                              string $color) 
{
    $this->radius = $radius;
    $this->color = $color;                        
}

public function getRadius(): float {
    return $this->radius;
}

public function getColor(): string {
    return $this->color;
}

public function getArea(): float {
    return pi() * $this->radius * $this->radius;
}

public function __toString(): string {
    return "Circle radius: $this->radius - Color: $this->color - Area: ". $this->getArea();
}
}

