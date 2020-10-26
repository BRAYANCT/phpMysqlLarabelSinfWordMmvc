<?php

class Persona{

    public $nombre;    
    public $apellido;
    public $altura;
    public $edad;
    public $fecha;
    public function __construct()
    {
        $this->nombre="brayan";
        $this->apellido="capcha";
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getFecha(){
        return $this->fecha;
    }
    
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function setAltura($altura){
        $this->altura=$altura;
    }
    public function setEdad($edad){
        $this->edad=$edad;
    }
    public function setFecha($fecha){
        $this->fecha=$fecha;
    }
    public function hablar(){
        return "Estopy hablando";
    }
    public function caminar(){
        return "Estopy caminando";
    }
}
class Informatico extends Persona{
    public $lenguajes;
    public function __construct()
    {
        $this->lenguajes="PHP,CSS,HTML,NODE,ANGULAR,REACT,VUE";

    }
    public function sabeLenguajes($lenguaje){
        $this->lenguajes=$lenguaje;
        return $this->lenguajes;
    } 
    public function programar(){
        return "programar";
    }    
    public function repararOrdenador(){
        return "repararOrdenador";
    }    
    
}
class TecnicoRedes extends Informatico{
    public $auditarredes;
    public $experiencia;
    public function __construct()
    {
        parent::__construct();
        $this->auditarredes="EXPERTO";
        $this->experiencia=5;


    }
    public function auditoria(){
        return "estoy en una red";
    }
}
?>