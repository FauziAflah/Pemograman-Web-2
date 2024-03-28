<?php 
require_once('Mahasiswa.php');
class IPK extends mahasiswa
{
    public $ipk;

    public  function __construct($nama, $nim, $programStudy, $tahunAngkatan, $ipk)
    {
        $this->ipk = $ipk;
        parent::__construct($nama, $nim, $programStudy, $tahunAngkatan);
    }

    public function getInfo()
    {
        parent::getInfo() ;
        echo "IPK Mahasiswa : ".  $this -> ipk . "<br>";
        echo "Predikat Mahasiswa : ". $this->predikat();
    }

    public function Predikat ()
    {
        if ($this->ipk < 2.0) {
            return "Cukup";
        } elseif ($this-> ipk >= 2.0 and $this->ipk < 3.0){
            return "Baik";
        }elseif ($this->ipk >= 3.0 and $this->ipk < 3.75){
            return "Memuaskan";
        }elseif ($this->ipk >= 3.75){
            return "Cumlaude";
        }else{
            return "error!";
        }
    }
}

$mahasiswa2 = new IPK ("0110223192", "Fauzi Aflah", "Teknik Informatika", 2023, 4.0);
$mahasiswa2 -> getInfo();

?>