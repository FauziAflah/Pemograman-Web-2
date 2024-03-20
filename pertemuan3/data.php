<?php
$prodi = [
    "SI" => "Sistem Informasi",
    "TI" => "Teknik Informatika",
    "BD" => "Bisnis Digital",
];
$skills = [
    "HTML" => 10,
    "CSS" => 10,
    "JavaScript" => 20,
    "RWD Bootstrap" => 20,
    "PHP" => 30,
    "Python" => 30,
    "Java" => 50,
];
$domisili = [
    "Jakarta",
    "Bogor",
    "Depok",
    "Bekasi",
];
function tentukan_predikat($point) {
    if ($point < 0) {
        return "Tidak Memadai";
    } elseif ($point <= 40 )  {
        return "Kurang Baik";
    } elseif ($point <= 60) {
        return "Cukup Baik";
    } elseif  ($point <= 100) {
        return "Baik";
    } elseif ($point <= 150) {
        return "Sangat Baik";
    } else {
        return "Nilai di luar rentang yang valid";
    }
}
?>