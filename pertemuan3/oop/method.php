<?php

# membuat class Person
Class Person
{
    # membuat property
    public $nama;
    public $alamat;
    public $jurusan;

    # membuat method
    function setNama($data)
    {
        $this->nama = $data;
    }
    function getNama()
    {
        return $this->nama;
    }

    # buat setter dan getter untuk  alamat dan jurusan
    function setAlamat($data)
    {
        $this->alamat = $data;
    }
    function getAlamat()
    {
        return $this->alamat;
    }

    function setJurusan($data)
    {
        $this->jurusan = $data;
    }
    function getJurusan()
    {
        return $this->jurusan;
    }
}

# membuat project
$reza = new Person();
$reza->setNama ("Reza Cahyo Wibowo");
$reza->setAlamat ("Depok");
$reza->setJurusan ("Teknik Informatika");


$vionna = new Person();
$vionna->setNama ("Vionna Nurisma");
$vionna->setAlamat ("Kudus");
$vionna->setJurusan ("Akuntansi");