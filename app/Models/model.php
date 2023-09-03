<?php


class model
{

    protected $id;
    protected static $db;

    public function getId()
    {
        return $this->id;
    }



    public static function databaseConnection()
    {
        if (is_null(static::$db)) {
            static::$db = new PDO('mysql:dbname=studentsApp;host=localhost', "root", "");
        }
        return static::$db;
    }

}