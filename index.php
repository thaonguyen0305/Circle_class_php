<?php 
include_once "./src/Circle.php";
include_once "./src/Cylinder.php";

$circle = new Circle (3, "blue");
$cylinder = new Cylinder (3, "blue",5);
echo "Circle radius: " . $circle->radius . "<br/>";
echo "Circle area: " . $circle->getArea() . "<br/>";
echo "Cylinder hegight: " . $cylinder->height . "<br/>";
echo "Cylinder volume: " . $cylinder->getVolume() . "<br/>";

?>