<?php
 
class box {
 
    public function __construct(public int $width, private int $height, protected int $length) {
 
        var_dump('Box was created');
    }
 
    public function volume() {
        return $this->width * $this->height * $this->length;
    }
 
    public function __set($name, $value) {
        var_dump($name, $value);
    }
 
    public function __get($name) {
        var_dump($name);
        return 'Some value';
    }
 
    public function __call($name, $args) {
        var_dump($name, $args);
    }
 
    public function __invoke($a, $b) {
        var_dump($a, $b);
    }
 
    public function __toString() {
        return 'Im a booblick box';
    }
 
    public function __destruct() {
        var_dump('Box was destroyed(Boom)');
    }
}
 
function test() {
    $box2 = new box(1, 2, 3);
}
test();
 
for($i = 0; $i < 10; $i++) {
    $box2 = new box(1, 2, 3);
}
 
$box1 = new box(1, 2, 3);
$box1->hello = 'lol';
var_dump($box1->YOLO);
$box1->cool(1, 'hbchdi', 52);
$box1(1, 'world');
 
$box1 = 1;
var_dump($box1);
echo $box1;