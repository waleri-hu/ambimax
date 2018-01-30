<?php

namespace ambimax\adapter;

/**
 * Description of AdapterCsv
 *
 * @author ambimax
 */
class AdapterCsv extends \ambimax\AAdapter {

  public function export(array $data) {
    $result = $this->arrayToCsv($data);
    return $this->writeFile($result, 'csv');
  }

  private function arrayToCsv(array $item) {
    $data = [$item];
    $handle = fopen('php://temp', 'r+b');
    foreach ($data as $row) {
      fputcsv($handle, $row);
    }

    rewind($handle);
    $string = rtrim(stream_get_contents($handle), PHP_EOL);
    fclose($handle);

    return $string;
  }

}
