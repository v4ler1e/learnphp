<?php

namespace App\Models;

use App\DB;

abstract class Model {
    protected static $table;

    public $id;

    public static function all() {
        $db = new DB();
        return $db->all(static::$table, static::class);
    }
}