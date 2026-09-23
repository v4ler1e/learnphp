<?php
 
class box {
 
    public static $count;
 
    public function __construct(public int $width, private int $height, protected int $length) {
 
    }
    public function volume() {
        var_dump(self::$count);
        return $this->width * $this->height * $this->length;
    }
 
    public static function test() {
        var_dump(self::$count);
        var_dump(self::class);
        var_dump(static::class);
    }
}
 
class MetalBox extends Box{
 
}
 
Box::$count = 1;
Box::$count = 2;
box::test();
var_dump(Box::$count, Box::$count);