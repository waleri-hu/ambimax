<?php

namespace ambimax;

/**
 * Description of AAdapter
 *
 * @author ambimax
 */
abstract class AAdapter {

  abstract function export(array $data);

  protected function writeFile(string $string, string $extension = 'txt') {
    $counterFile = $this->getRootDir() . '/files/counter.txt';
    $filename = \intval(\file_get_contents($counterFile));
    \file_put_contents($counterFile, $filename + 1);
    $outputFile = $this->getRootDir() . '/files/export/' . $filename . '.' . $extension;
    \file_put_contents($outputFile, $string);
    /*
    echo '<dir>' 
    . $outputFile
    . '<div>' . \htmlentities($string) . '</div>'
    . '</dir>';
    */
    return $outputFile;
  }

  private function getRootDir(){
    return __DIR__.'/..';
  }

}
