<?php
 class Box {
    public $width;
    public $length;
    public $height;
   
    public function volume() {
        return $this->width * $this->length * $this->height;
    }
 }
 
class MetalBox extends Box {
    public $weightPerUnit;
    public function mass() {
        return $this->volume() * $this->weightPerUnit;
    }
}
$metal1 = new MetalBox();
var_dump($metal1);
?>