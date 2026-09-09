<?php
$test = "Hello";
$test = "Hello" . "World" . "!";
$test = $test . "!!!!!";
$test .= "!!!!!";
$name = "miha";
$age = 18;
$test = $name . " is " . $age . " years old";
$test = "$name is $age years old";
$test = "hello\n\nworld";
$test = <<<END
cool kakashki here
OMG
END;
var_dump($test);
var_dump($name);
var_dump($age);
?>