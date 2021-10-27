<?php

# membuat class Person
Class Person
{
    public $nama;
    public $alamat;
    public $jurusan;
}

# membuat project
$reza = new Person();
$reza->nama = "Reza Cahyo Wibowo";
$reza->alamat = "Depok";
$reza->jurusan = "Teknik Informatika";
echo $reza->nama;
echo "<br>";

$vionna = new Person();
$vionna->nama = "Vionna Nurisma";
$vionna->alamat = "Kudus";
$vionna->jurusan = "Akuntansi";
echo $vionna->nama;