<?php

// Jualan Produk
// Komik
// Game
class Produk
{
    public $judul = "judul",
        $penulis = "penulias",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);
// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->propertyBaru = "sembarang";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony computer";
$produk4->harga = 250000;

echo "Komik : $produk3->penulis, $produk3->penerbit"; // manual
echo "<br>";
echo "Komik : " . $produk3->getLabel(); // dengan method
echo "<br>";
echo "Game : " . $produk4->getLabel(); // dengan method beda object
