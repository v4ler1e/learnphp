<?php
 
function hello(): void {
    var_dump('hello');
}
 
var_dump(hello());
hello();
 
function helloname($name = 'Nameless', $age = 0) {
    var_dump("hello, $name! You are $age years old");
}
 
helloname('Valeria', 20);
 
function square(int $a): ?int {
    if ($a < 0) {
        return null;
    }
    return $a * $a;
 
}
 
$answer = square(-4);
$answer = square(4);
var_dump($answer);
var_dump(square(5));
 
?>



<?php 
$number = 10;
if($number > 5) {
    var_dump('Bigger');
} elseif($number < 5) {
    var_dump('Smaller');
} else {
    var_dump('Equal');
}

$day = (int) date('w');
var_dump($day);

if($day === 0) {
    var_dump('Sunday');
} else if ($day === 1) {
    var_dump('Monday');
} else  if ($day === 2) {
    var_dump('Tuesday');
} elseif ($day === 3) {
    var_dump('Wednesday');
} else if ($day === 4) {
    var_dump('Thursday');
} elseif ($day === 5) {
    var_dump('Friday');
} else if ($day === 6) {
    var_dump('Saturday');
}

switch($day) {
    case 0:
        var_dump('Sunday');
        break;
    case 1:
        var_dump('Monday');
        break;
    case 2:
        var_dump('Tuesday');
        break;
    case 3:
        var_dump('Wednesday');
        break;
    case 4:
        var_dump('Thursday');
        break;
    case 5:
        var_dump('Friday');
        break;
    case 6:
        var_dump('Saturday');
        break;
    default:
        var_dump('Weirdday');
}

