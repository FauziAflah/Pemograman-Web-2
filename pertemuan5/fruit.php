<?php 
class Fruit {
    public $name = "asdas" ;
    const Jenis = "buah";

    public function __construct($_name)
    {
        $this->name=$_name;
    }

    public function getName ()
    {
        echo self::Jenis . "Namanya" . $this->name;
    }
}

$mangga = new Fruit("apple");
$mangga->name = "mangga";
echo $mangga->name;
echo $mangga::Jenis
?>