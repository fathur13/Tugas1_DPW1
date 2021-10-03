<?php


class animal {
    public $jumlah_kaki, $bisa_terbang;
}

class sapi extends animal 
{
    function bersuara ()
    {
        return "mmoooo";
    }
}

class kodok extends animal 
{
    function bersuara ()
    {
        return "ngrokkk";
    }
}

class kucing extends animal 
{
    function bersuara ()
    {
        return "meomeoo";
    }
}

class ayam extends animal 
{
    function bersuara ()
    {
        return "kukuruyukkkkk";
    }
}

// sapi
$apit = new sapi;
$apit->jumlah_kaki = 4;
$apit->bisa_terbang = "Tidak Bisa Terbang";

echo "apit Adalah sapi <br>";
echo "Punya Kaki Sebanyak: " . $apit->jumlah_kaki . "<br>";
echo $apit->bisa_terbang . "<br>";
echo "Suaranya: " . $apit->bersuara() . "<br>";


echo "<hr>";

// kodok
$dhanu = new kodok;
$dhanu->jumlah_kaki = 4;
$dhanu->bisa_terbang = "Tidak Bisa Terbang";

echo "dhanu Adalah kodok <br>";
echo "Punya Kaki Sebanyak: " . $dhanu->jumlah_kaki . "<br>";
echo $dhanu->bisa_terbang . "<br>";
echo "Suaranya: " . $dhanu->bersuara() . "<br>";

echo "<hr>";

// kucing
$sapar = new kucing;
$sapar->jumlah_kaki = 4;
$sapar->bisa_terbang = "Tidak Bisa Terbang";

echo "sapar Adalah kucing <br>";
echo "Punya Kaki Sebanyak: " . $sapar->jumlah_kaki . "<br>";
echo $sapar->bisa_terbang . "<br>";
echo "Suaranya: " . $sapar->bersuara() . "<br>";

echo "<hr>";

// ayam
$mumu = new ayam;
$mumu->jumlah_kaki = 2;
$mumu->bisa_terbang = "Tidak Bisa Terbang";

echo "mumu Adalah ayam <br>";
echo "Punya Kaki Sebanyak: " . $mumu->jumlah_kaki . "<br>";
echo $mumu->bisa_terbang . "<br>";
echo "Suaranya: " . $mumu->bersuara() . "<br>";

echo "<hr>";
