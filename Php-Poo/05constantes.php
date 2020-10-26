<?php
class Usuario{
    public $nombre;
    const URL_COMPLETa="http//localhost";

}

class Alumno{
    public $nombre;
    public $apellido;
    public function __construct()
    {
        $this->nombre="brayan";
        $this->apellido="capcha";
        echo "iniciamos <br>";
    }
    public function __toString()
    {
        return "hola, {$this->nombre},estas registrado con {$this->apellido}";
    }
    public function __destruct()
    {
        echo " <br> termino wl proceso <br>";
    }
}

$alu=new Alumno();
echo $alu, "<br>";
//var_dump($alu);

/* for ($i=0; $i <=15 ; $i++) { 
    echo "$i <br>";
} */