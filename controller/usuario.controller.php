<?php
require_once 'model/usuario.php';

class UsuarioController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Usuario();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/usuario/usuario.php';        
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $usuario = new Usuario();
        
        if(isset($_REQUEST['id'])){
            $usuario = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/usuario/usuario-editar.php';
        require_once 'view/footer.php';    
    }
    
    public function Guardar(){
        $usuario = new Usuario();
           
        $usuario->ID_USUARIO = $_REQUEST['id'];   
        $usuario->ID_PERSONA = $_REQUEST['id_persona'];
        $usuario->ID_CARGO = $_REQUEST['id_cargo'];
        $usuario->NOMBRE_USUARIO = $_REQUEST['nombre_usuario'];
        $usuario->CLAVE_USUARIO = $_REQUEST['clave'];
      
        $usuario->ID_USUARIO > 0 
        ? $this->model->Actualizar($usuario)
            : $this->model->Registrar($usuario);
        
        header('Location:  main_usuario.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location:  main_usuario.php');
    }
/*
    public function login()
    {
        $this->model->login($_REQUEST['usuario'], $b = $_REQUEST['clave']);
        require_once 'view/header.php';        
        require_once 'view/footer.php';
    }
    public function login()
    {
        // run the login() method in the login-model, put the result in $login_successful (true or false)
        //$login_model = $this->model->login($_REQUEST['usuario'], $_REQUEST['clave']);
        // perform the login method, put result (true or false) into $login_successful
        $login_successful = $this->model->login($_REQUEST['usuario'], $_REQUEST['clave']);;
        // check login status
        if ($login_successful) {
            // if YES, then move user to dashboard/index (btw this is a browser-redirection, not a rendered view!)
            require_once 'view/header.php';        
            require_once 'view/footer.php';
            // header('location: ' . URL . 'dashboard/index');
        } else {
            // if NO, then move user to login/index (login form) again
            //header('location: ' . URL . 'login/index');
            echo "kelisita :V";
        }
    }*/
}