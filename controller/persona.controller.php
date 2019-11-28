<?php
require_once 'model/persona.php';

class PersonaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Persona();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/persona/persona.php';        
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $persona = new Persona();
        
        if(isset($_REQUEST['id'])){
            $persona = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/persona/persona-editar.php';
        require_once 'view/footer.php';    
    }
    
    public function Guardar(){
        $persona = new Persona();
           
        $persona->ID_PERSONA = $_REQUEST['id'];   
        $persona->APE_PATERNO = $_REQUEST['ape_paterno'];
        $persona->APE_MATERNO = $_REQUEST['ape_materno'];
        $persona->NOMBRES = $_REQUEST['nombres'];
        $persona->N_DNI = $_REQUEST['n_dni'];
        $persona->GENERO = $_REQUEST['genero'];  
        $persona->CORREO = $_REQUEST['correo'];  
        $persona->FECHA_NAC = $_REQUEST['fecha_nac'];  
        $persona->TELEFONO = $_REQUEST['telefono'];  
        $persona->CELULAR = $_REQUEST['celular'];  
      
        $persona->ID_PERSONA > 0 
            ? $this->model->Actualizar($persona)
            : $this->model->Registrar($persona);
        
        header('Location: main_persona.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: main_persona.php');
    }

    public function PersonaBuscar()
    {
        print_r(json_encode(
            $this->model->Buscar($_REQUEST['criterio'])
        ));
    }
}