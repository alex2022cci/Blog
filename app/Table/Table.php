<?php

namespace App\Table;

use App\App;


class Table
{
    protected static $table;

    private static function getTable()
    {
        if(static::$table === null)
        {
            $class_name = explode('\\', get_called_class());
            static::$table =strtolower(end($class_name)).'s';
        }
        return static::$table;
    }

    public static function find($id)
    {
        return static::query("
        SELECT *
        FROM ".static::$table."
        WHERE id = ?
         ", [$id], true);
    }

    public static function query($statement, $attributes = null, $one = false)
    {
        if($attributes)
        {

        return App::getDB()->prepare($statement, $attributes, get_called_class(), $one);

        }
        else
        {
        return App::getDB()->query($statement, get_called_class(), $one);

        }
         
         
    }
    public static function all()
    {
        return App::getDB()->query("
        SELECT *
        FROM ".static::$table."
         ", get_called_class());
    }


    public function __get($key)
    {
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

}