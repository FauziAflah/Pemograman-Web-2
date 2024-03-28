<?php 
class Lingkaran {
    public $jariJari;
    const PHI = 3.14;

    public function __construct($jari)
    {
        $this->jariJari = $jari;
    }

    public function luas ()
    {
        $luas = self::PHI * $this -> jariJari * $this -> jariJari;
        return $luas;
    }

    public function keliling ()
    {
        $keliling = self ::PHI * 2 * $this -> jariJari;
        echo 'keliling dari lingkaran dengan jari jari'. $this-> jariJari .' adalah ' . $keliling ;
    }
}
?>