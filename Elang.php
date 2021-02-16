<?php
require_once('Hewan.php');
require_once('Fight.php');
require_once('Harimau.php');

class Elang
{
  use Hewan, Fight;
}

$elang1 = new Elang();

$elang1->nama = "elang_1";
$elang1->jumlahKaki = 2;
$elang1->keahlian = "terbang tinggi";

$elang1->attackPower = 10;
$elang1->defendPower = 5;

echo $elang1->atraksi() . PHP_EOL;
echo $elang1->serang($elang1->nama, $harimau2->nama) . PHP_EOL;
