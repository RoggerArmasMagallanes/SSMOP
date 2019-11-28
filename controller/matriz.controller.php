<?php
require_once 'model/matriz.php';

class MatrizController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Matriz();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/matriz/matriz.php';        
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $matriz = new Matriz();
        
        if(isset($_REQUEST['id'])){
            $matriz = $this->model->Buscar($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/matriz/matriz-editar.php';
        require_once 'view/footer.php';    
    }
    
    public function Guardar(){
        $matriz = new Matriz();
           
        $matriz->ID_PERSONA = $_REQUEST['id'];   
        $matriz->APE_PATERNO = $_REQUEST['ape_paterno'];
        $matriz->APE_MATERNO = $_REQUEST['ape_materno'];
        $matriz->NOMBRES = $_REQUEST['nombres'];
        $matriz->N_DNI = $_REQUEST['n_dni'];
        $matriz->GENERO = $_REQUEST['genero'];  
        $matriz->CORREO = $_REQUEST['correo']; 
      
        $matriz->ID_PERSONA > 0 
            ? $this->model->Actualizar($matriz)
            : $this->model->Registrar($matriz);
        
        header('Location: main_matriz.php');
    }
  
}