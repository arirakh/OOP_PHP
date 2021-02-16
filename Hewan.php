<?php
trait Hewan
{
  public $nama,
    $darah = 50,
    $jumlahKaki,
    $keahlian;

  public function atraksi()
  {
    return "$this->nama sedang $this->keahlian" . PHP_EOL;
  }
}
