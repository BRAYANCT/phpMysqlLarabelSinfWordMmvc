<?php

class Usuario{
    public $nombre;
    public $apellido;
    public $email;
    public $password;

    public function setNombre(){
        return $this->nombre;
    }
    public function setApellido(){
        return $this->apellido;
    }
    public function setEmail(){
        return $this->email;
    }
    public function setPassword(){
        return $this->password;
    }

    public function getNombre($nombre){
         $this->nombre=$nombre;
    }
    public function getApellido($apellido){
        $this->apellido=$apellido;
    }
    public function getEmail($email){
        $this->email=$email;
    }
    public function getPassword($password){
        $this->password=$password;
    }

    public function conseguirTodos(){
        return "Todos los usuarios";
    }

}