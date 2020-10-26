<?php
class ConfiguracionStatic{
    public static $color;
    public static $newletter;
    public static $entorno;



    public function getColor(){
        return self::$color;
    }
   
    public function getNewletter(){
        return self::$newletter;
    }
    public function getEntorno(){
        
        return self::$entorno;
    }
   
    
    public function setColor($color){
        self::$color=$color;
    }
    public function setNewletter($newletter){
        self::$newletter=$newletter;
    }
    public function setEntorno($entorno){
        self::$entorno=$entorno;
    }
  




}