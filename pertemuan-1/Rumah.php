<?php

class Rumah
{
    var $alamat;
    var $luas;
    var $jumlahKamar;
    var $warna; // Menambahkan properti baru

    function ketok()
    {
        return "Tok Tok Tok!";
    }
}

$rumahSaya = new Rumah();

$rumahSaya->alamat = "Jl. Merpati No. 10";
$rumahSaya->luas = 120; // dalam meter persegi
$rumahSaya->jumlahKamar = 3;
$rumahSaya->warna = "Biru"; // Menambahkan properti baru secara dinamis

$rumahSaya->ketok();
