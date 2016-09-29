<?php

class Model
{
  private $attributes = array();
  protected static $table;

  public static function getTableName()
  {
    return static::$table;
  }

  public function __set($name, $value)
  {
    $this->attributes[$name] = $value;
  }

  public function __get($name)
  {
    return $this->attributes[$name];
  }
}
