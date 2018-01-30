<?php

namespace ambimaxTest\adapter;

class AdapterCsvTest extends \PHPUnit\Framework\TestCase {

  public function testFileCreated() {
    $ac = new \ambimax\adapter\AdapterCsv();
    $file = $ac->export(["test" => "test"]);
    $this->assertTrue(\file_exists($file));
  }

  public function testFileExtension() {
    $ac = new \ambimax\adapter\AdapterCsv();
    $file = $ac->export(["test" => "test"]);
    $this->assertEquals('csvdd' , \pathinfo($file, \PATHINFO_EXTENSION));
  }
  
  //todo: more testcases

}
