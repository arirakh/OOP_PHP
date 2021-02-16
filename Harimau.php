<?php
require_once('Hewan.php');
require_once('Fight.php');

class Harimau
{
  use Hewan, Fight;

  public function getInfoHewan()
  {
    return "nama $this->nama, jumlah kaki $this->jumlahKaki, keahlian $this->keahlian, attack power $this->attackPower, defend power $this->defendPower, jenis hewan " . get_class($this) . PHP_EOL;
  }
}

$harimau2 = new Harimau();

$harimau2->nama = "harimau_2";
$harimau2->jumlahKaki = 4;
$harimau2->keahlian = "berlari cepat";

$harimau2->attackPower = 7;
$harimau2->defendPower = 8;

echo $harimau2->atraksi();

echo $harimau2->getInfoHewan();
