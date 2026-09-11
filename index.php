<?php
 
function hello(): void {
    var_dump('hello');
}
 
var_dump(hello());
hello();
 
function helloname($name = 'Nameless', $age = 0) {
    var_dump("hello, $name! You are $age years old");
}
 
helloname('Valeria', 18);
 
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
