<?php

namespace App;

use PDO;

class DB
{
    private $conn;

    public function __construct()
    {
        $servername = "localhost:33061";
        $username = "root";
        $password = "example";
        $dbname = "learnphp";

        $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function all(string $table, string $class)
    {
        $sql = "SELECT * FROM $table";
        $result = $this->conn->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS, $class);
        return $result->fetchAll();
    }

    public function find(string $table, string $class, $id)
    {
        $sql = "SELECT * FROM $table WHERE id=$id";
        $result = $this->conn->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS, $class);
        return $result->fetch();
    }

    public function where(string $table, string $class, $field, $value)
    {
        $sql = "SELECT * FROM $table WHERE $field=$value";
        $result = $this->conn->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS, $class);
        return $result->fetchAll();
    }

    public function insert($table, $fields)
    {
        $fieldNames = array_keys($fields);
        $fieldNamesText = implode(', ', $fieldNames);
        $fieldValuesText = implode("', '", $fields);
        $sql = "INSERT INTO $table ($fieldNamesText)
                VALUES ('$fieldValuesText')";
        $this->conn->exec($sql);
    }

    public function update($table, $fields, $id)
    {
        $updateValuesText = '';
        foreach ($fields as $name => $value) {
            $updateValuesText .= "$name='$value', ";
        }
        $updateValuesText = substr($updateValuesText, 0, -2);
        $sql = "UPDATE $table SET $updateValuesText WHERE id = $id";
        $this->conn->exec($sql);
    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id=$id";
        $this->conn->exec($sql);
    }
}
