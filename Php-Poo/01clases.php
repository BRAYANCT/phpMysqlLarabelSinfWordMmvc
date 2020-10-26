<style>
*{
    background-color: #000000;
    color: #ffffff;
}
</style>
<?php
//programacion orientada a objetos

//clases modelo para crear mas objetos de tipo coche con caracteristicas parecidas
class Coche{
    //atributos o propiedades variables

    public $color;
    /* protected $modelo;
    private $marca;
     */
    public $modelo;
    public $marca;
    
/*     public $marca;
    public $velocidad;
    public $caballaje;
    public $plazas; */
    //constructos

    public function __construct($color,$modelo,$marca)
    {
        $this->color=$color;
        $this->modelo=$modelo;
        $this->marca=$marca;
    }
    public function mostrarInformacion(Coche $miObjeto){

        if (is_object($miObjeto)) {
        
            $informacion  ="<h1>Informacion del objeto<h1>";
            $informacion .= "<br>Modelo : $miObjeto->color";
            $informacion .= "<br>Modelo : $miObjeto->modelo";
            $informacion .= "<br>Modelo : $miObjeto->marca";

        }else{
            $informacion = "No es un objeto : $miObjeto";
        }
        return $informacion;
    }

    //metodos son acciones que hace el objeto antes de que funcione

/*     public function getColor()
    {
        //el this significa busca esta clase de propiedad
        return $this->color;

    }
     public function setColor($color)
    {
        $this->color=$color;
    }

    public function acelerar()
    {
        $this->velocidad++;
    }
    public function frenar()
    {
        $this->velocidad--;
    }
    public function getVelocidad()
    {
        return $this->velocidad;
    } */
}

/* $coche=new Coche();

var_dump($coche); */

//metodos
/* echo'<br>';
echo $coche->getVelocidad();

echo'<br>';
 $coche->setColor("verde");
 var_dump( $coche);
echo'<br>';

echo $coche->getColor();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();
echo'<br>';

echo $coche->getVelocidad(); */
?>