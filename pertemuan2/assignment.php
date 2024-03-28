<?php 
$nama = "Rizky";
$namabelakang = "Wafi";
$nama .= "Wafi";
echo $nama;
echo "<br>";
echo $nama . $namabelakang;
echo "<br>";
//incremental
$angka1 = 10;
echo $angka1;
echo "<br>";
$angka1++;
echo $angka1;
echo "<br>";
$angka2 = 5;
if ($angka1 > $angka2 and $angka1 != $angka2) {
    echo "angka 1 lebih besar dari angka 2";
}
echo "<br>";
if (1 === "1"){
    echo "ya sama";
} else {
    echo  "tidak sama";
}