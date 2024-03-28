<?php
$ar_array = array( "budi" , "andi" , "caca" );
$ar_array2 = [ "budi" , "andy" , "caca" ];
print_r($ar_array);
echo  "<br>";
echo $ar_array[1];
echo "<br>";
foreach ($ar_array as $key => $value){
    echo $key . "=>" . $value . "<br>";
}
echo "jumlah data dalam array adalah" . count($ar_array);
echo  "<br>";

//nambah array
$ar_array[] = "dedi";
//unset($ar_array[1])
print_r($ar_array);
//ngurut aray
sort( $ar_array );
echo  "<br>";
print_r( $ar_array );
echo   "<br>";
//menghapus array terakhir
array_pop($ar_array);
print_r( $ar_array );
//menambahkan aray dengan push
array_push($ar_array, "Lia");
print_r($ar_array);
//fucntion shift untuk menghapus value  pertama di array
echo "<br>";
array_shift($ar_array);
print_r( $ar_array );
echo  "<br>";
// function unshift untuk menambahkan value array pertaman
array_unshift($ar_array,"OG");
print_r($ar_array);
//array associative
$buah_buahan = [
    "apel" => "merah",
    "jeruk" => "orange",
    "nanas" => "kuning"
];
echo "<br>";
foreach($buah_buahan as $buah) {
    echo "$buah <br>";
}

//array multidemensi
$siswa = [
[
    "nama" => "budi",
    "kelas" => "XII",
    "alamat" => "jakarta"
],
[
    "nama" => "Ani",
    "kelas" => "XI",
    "alamat" => "jakarta"
],
[
    "nama" => "caca",
    "kelas" => "X",
    "alamat" => "jakarta"
]
];
echo "<br>";
foreach ($siswa as $row) {
    echo "nama :" . $row["nama"]. "<br>";
    echo "Kelas :". $row ["kelas"] . "<br>";
    echo "Alamat : ". $row ["alamat"] . "<br>";
}