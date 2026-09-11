<?php

for ($i = 0; $i<10; $i++) {
    var_dump($i);
}

for ($i = 9; $i>=0; $i--) {
    var_dump($i);
}

for($i=1; $i<=1000000; $i*=2) {
    var_dump($i);
}

$time = time();
$count = 0;
while($time+1 > time()) {
    $count++;
}
var_dump($count);