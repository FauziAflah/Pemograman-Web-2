<?php
$nilai = 90;

switch ($nilai) {
    case $nilai > 80 and $nilai < 90:
        echo "anda hebat";
        break;
    case $nilai >= 90 and $nilai < 100:
        echo "sangat hebat";
    default :
        echo "anda kurang hebat";
        break;
}
 ?>