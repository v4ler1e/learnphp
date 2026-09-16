<?php
$number = array(1, 2, 3);
$number = [1, 2, 3];
var_dump($number[1]);
$number[2] = 5;
var_dump($number);
$test = [1, 'dodik', true, [1, 2, 3]];
var_dump($test);
var_dump($test[3][1]);

$test = [
    'name' => 'Popopipi',
    'age' => 67,
    'city' => 'Tartu',
    1,
    2,
    3,
    'color' => 'red',
    'music' => 'rock',
    5,
    100 => 6,
    7,
];
var_dump($test);
var_dump($test['name']);

$combined = [1, 2, 3] + [4, 5, 6, 7];
var_dump($combined);

$text = implode('-', $test);
var_dump($text);

array_push($test, 67, 'bibibibibi', 6677);
var_dump($test);
$test[] = 'value';
unset($test[102]);
var_dump($test);


while (false) {
    var_dump('while');
}
 
do {
        var_dump('do');
    } while (false);
 
$fruits = ['apple', 'banana', 'cherry', 'pear'];
 
for ($i=0; $i<count($fruits); $i++) {
    var_dump($fruits[$i]);
}
foreach ($fruits as $fruit) {
    var_dump($fruit);
}
 
foreach($fruits as $key => $fruit) {
    var_dump($key, $fruit);
}
 
function recursive($i) {
    if ($i < 10) {
        var_dump($i);
        recursive($i+1);
    }
}
recursive(0);

class Box {
    public $width;
    public $length;
    public $height;
 
    public function volume() {
        return $this->width * $this->length * $this->height;
    }
 }
 
 $box1 = new Box();
 $box1->width = 5;
 $box1->length = 10;
 $box1->height = 15;
 var_dump($box1, $box1->volume());
 
 $box2 = new Box();
 $box2->width = 3;
 $box2->length = 4;
 $box2->height = 5;
 var_dump($box2, $box2->volume());

$num1 = 1;
$num2 = &$num1;
$num1 = 2;
var_dump($num1, $num2);
 
$box1 = new Box();
$box1->width = 1;
$box2 =clone $box1;
$box2->width = $box1->width;
$box1->width = 2;
var_dump($box1, $box2);

?>


