<?php 
require_once('lingkaran.php');
require_once('persegipanjang.php');

$lingkaran1 = new Lingkaran(8);
echo "luas lingkaran tersebut adalah" . $lingkaran1->luas();
echo "<br>";
$lingkaran1->keliling();

$PersegiPanjang = new persegiPanjang(10,8);
echo "<br>";
echo "Luas Persegi Panjang tersebut adalah : ". $PersegiPanjang -> luas();
echo "<br>";
echo "keliling persegi tersebut adalah" . $PersegiPanjang -> keliling();

?>