<?php

class Penduduk
{
    private string $nik;
    private string $nama;
    private $alamat;
    private $tgllahir;
    private $agama;
    private $golDar;

    private KartuKeluarga $kartuKeluarga;
    /**
 * @return string
 */
public function getNik()
{
    return $this->nik;
}/**
 * @param string $nik
 */
public function setNik($nik)
{
    $this->nik = $nik;
}/**
 * @return string
 */
public function getNama()
{
    return $this->nama;
}/**
 * @param string $nama
 */
public function setNama($nama)
{
    $this->nama = $nama;
}/**
 * @return mixed
 */
public function getAlamat()
{
    return $this->alamat;
}/**
 * @param mixed $alamat
 */
public function setAlamat($alamat)
{
    $this->alamat = $alamat;
}/**
 * @return mixed
 */
public function getTgllahir()
{
    return $this->tgllahir;
}/**
 * @param mixed $tgllahir
 */
public function setTgllahir($tgllahir)
{
    $this->tgllahir = $tgllahir;
}/**
 * @return mixed
 */
public function getAgama()
{
    return $this->agama;
}/**
 * @param mixed $agama
 */
public function setAgama($agama)
{
    $this->agama = $agama;
}/**
 * @return mixed
 */
public function getGolDar()
{
    return $this->golDar;
}/**
 * @param mixed $golDar
 */
public function setGolDar($golDar)
{
    $this->golDar = $golDar;
}

}