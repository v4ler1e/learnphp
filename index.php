<?php
 
 class Box {
    public int $width;
    private int $height;
    protected int $length;
   
    public function volume() {
        return $this->width * $this->length * $this->height;
    }
    public function setHeight(int $height) {
        if ($height > 0) {
            $this->height = 0;
        } else {
            $this->height = $height;
        }
    }
    public function getHeight() {
        return $this->height;
    }
 
    public function test1() {
    $this->length = 10;
    var_dump($this->length);
 }
 
 }
 
class MetalBox extends Box {
    public $weightPerUnit;
    public function mass() {
        return $this->volume() * $this->weightPerUnit;
    }
 
    public function test2() {
    $this->height = 10;
    var_dump($this->height);
 }
}
 
$box1 = new Box();
$box1->length = 10;
var_dump($box1->length);
 
$metal1 = new MetalBox();
var_dump($metal1);
?>