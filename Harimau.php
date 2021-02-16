<?php
require_once('Hewan.php');
require_once('Fight.php');

class Harimau
{
  use Hewan, Fight;
}

$harimau2 = new Harimau();

$harimau2->nama = "harimau_2";
$harimau2->jumlahKaki = 4;
$harimau2->keahlian = "berlari cepat";

$harimau2->attackPower = 7;
$harimau2->defendPower = 8;

echo $harimau2->atraksi() . PHP_EOL;
