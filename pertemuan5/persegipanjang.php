<?php
class persegiPanjang
{
    public $PersegiPanjang;
    const panjang = 10;
    const lebar = 15;

    public function luas()
    {
        $luas = self::panjang * self::lebar;
        return $luas;
    }

    public function keliling()
    {
        $keliling = 2 * (self::panjang + self::lebar);
        return $keliling;
    }
}