<?php
trait Fight
{
  public $attackPower,
    $defendPower;

  public function serang($hewan1, $hewan2)
  {
    return "$hewan1 sedang menyerang $hewan2";
  }

  public function diserang($hewan1, $hewan2)
  {
    return "$hewan1 sedang diserang $hewan2";
  }
}
