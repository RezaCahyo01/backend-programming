<?php

# membuat class Person
Class Person
{
    # membuat property
    public $nama;
    public $alamat;
    public $jurusan;

    function __construct($nama, $alamat, $jurusan) {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
    }

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
$reza = new Person('Reza Cahyo Wibowo', 'Depok', 'Teknik Informatika');
$vionna = new Person('Vionna Nurisma', 'Kudus', 'Akuntansi');

echo $reza->getNama();