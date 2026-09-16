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

?>


