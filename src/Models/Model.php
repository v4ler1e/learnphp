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

    public function save() {
        $db = new DB();
        $fields = get_object_vars($this);
        unset($fields['id'], $fields['created_at'], $fields['updated_at']);
        $db->insert(static::$table, $fields);
    }
}