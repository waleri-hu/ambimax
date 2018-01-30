<?php

namespace ambimax;

/**
 * Description of App
 *
 * @author ambimax
 */
class App {

  public static function export(array $arr, string $type) {
    $className = '\ambimax\adapter\Adapter' . \ucfirst(\strtolower($type));


    /* @var \ambimax\AAdapter  */
    $class = new $className();

    $class->export($arr);
  }

}
