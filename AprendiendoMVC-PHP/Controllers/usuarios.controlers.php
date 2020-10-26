<?php

class UsuarioController{
    public function mostrarTodos(){

        require_once 'Models/usuario.models.php';

        $usuario=new Usuario();
        $todosUsuarios= $usuario->conseguirTodos();

        require_once 'Views/usuarios.views.php';

    }
    public function crear(){

        require_once 'Views/crear.views.php';

    }
}



