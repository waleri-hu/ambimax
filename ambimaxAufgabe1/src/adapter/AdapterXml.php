<?php

namespace ambimax\adapter;

/**
 * Description of AdapterXml
 *
 * @author ambimax
 */
class AdapterXml extends \ambimax\AAdapter {

  public function export(array $data) {
    $result = $this->arrayToXml($data);
    return $this->writeFile($result, 'xml');
  }

  private function arrayToXml(array $data) {
    $res = '';
    foreach ($data as $k => $v) {
      $key = preg_replace("/[^A-Za-z]/", '', $k);
      $res .= '<' . $key . '>' . \htmlentities($v) . '</' . $key . '>' . "\n";
    }
    return "<data>\n" . $res . "</data>";
  }

}
