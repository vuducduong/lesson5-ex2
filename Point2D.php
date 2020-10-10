<?php


class Point2D
{
protected $x;
protected $y;
public function __construct($x,$y){
    $this->x=$x;
    $this->y=$y;
}
public function getX(){
    return $this->x;
}
public function getY(){
    return $this->y;
}
public function  setX($value){
    $this->x=$value;
}
public function setY($value){
    $this->y=$value;
}
public function setXY($x,$y){
    $this->getX();
    $this->getY();
}
public function getXY(){
    return array($this->x,$this->y);
}
public function toString(){
    return "$this->x,$this->y";
}

}