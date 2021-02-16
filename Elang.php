<?php
require_once('Hewan.php');
require_once('Fight.php');
require_once('Harimau.php');

class Elang
{
  use Hewan, Fight;

  public function getInfoHewan()
  {
    return "nama $this->nama, jumlah kaki $this->jumlahKaki, keahlian $this->keahlian, attack power $this->attackPower, defend power $this->defendPower, jenis hewan " . get_class($this) . PHP_EOL;
  }
}

$elang1 = new Elang();

$elang1->nama = "elang_1";
$elang1->jumlahKaki = 2;
$elang1->keahlian = "terbang tinggi";

$elang1->attackPower = 10;
$elang1->defendPower = 5;

echo $elang1->atraksi();
echo $elang1->serang($elang1->nama, $harimau2->nama);

echo $elang1->getInfoHewan();
