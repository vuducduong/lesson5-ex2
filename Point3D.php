<?php

include_once "Point2D.php";
class Point3D extends Point2D
{
protected $z;
public function __construct($x, $y,$z)
{
    parent::__construct($x, $y);
    $this->z=$z;
}
public function getZ(){
    return $this->z;
}
public function setZ($z){
    $this->z=$z;
}
public function getXYZ()
{
    return array(parent::getXY(),$this->z);

}
public function setXYZ($x,$y,$z){
    parent::setXY();
    $this->z=$z;
}
public function toString(){
   return "$this->x,$this->y,$this->z";

}
}