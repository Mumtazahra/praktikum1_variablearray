<?php
require_once 'class_persegipanjang.php';
$kotak = new PersegiPanjang(8,5);
echo "<br/>";

echo "<br/> Luas Persegi Panjang adalah = " .$kotak->getluas();

echo "<br/> Keliling Persegi Panjang adalah = " .$kotak->getkeliling();
?>