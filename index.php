<?php
 
class box {
    use HasColor, HasSmell;
    public $width;
    public $height;
    public $length;
 
    public function volume() {
        return $this->width * $this->height * $this->length;
    }
 
    public function setHeight(int $height) {
        if ($height < 0) {
            $this->height = 0;
        } else {
            $this->height = $height;
        }
    }
    public function getHeight(int $height) {
        return $this->height;
    }
 
        public function test2() {
        $this->length = 10;
        var_dump($this->length);
    }
}
 
class MetalBox extends box {
    use HasColor;
    public $weightPerUnit;
    public function mass() {
        return $this->weightPerUnit * $this->volume();
    }
        public function test2() {
        $this->height = 10;
        var_dump($this->height);
    }
}
 
trait HasColor {
    public $color;
    public function setColor(string $color) {
        $this->color = $color;
    }
}
 
trait HasSmell {
    public $smell;
    public function setSmell(string $smell) {
        $this->smell = $smell;
    }
}
 
$box = new box();
var_dump($box);
$metall = new MetalBox();
var_dump($metall);
?>