<?php
require_once 'model/representante.php';

class RepresentanteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Representante();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/representante/representante.php';        
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $representante = new Representante();
        
        if(isset($_REQUEST['id'])){
            $representante = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/representante/representante-editar.php';
        require_once 'view/footer.php';    
    }
    
    public function Guardar(){
        $representante = new Representante();
           
        $representante->ID_REPRESENTANTE = $_REQUEST['id'];   
        $representante->ID_PERSONA = $_REQUEST['id_persona'];
        $representante->ID_ENTIDAD = $_REQUEST['id_entidad'];
        $representante->CARGO_ENTIDAD = $_REQUEST['cargo'];
        $representante->NACIONALIDAD = $_REQUEST['nacionalidad']; 
      
        $representante->ID_REPRESENTANTE > 0 
            ? $this->model->Actualizar($representante)
            : $this->model->Registrar($representante);
            
        header('Location: main_representante.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: main_representante.php');
    }

    public function LoadBuscar()
    {
        print_r(json_encode(
            $this->model->Buscar1($_REQUEST['criterio'])
        ));
    }

    public function LoadBuscar2()
    {
        print_r(json_encode(
            $this->model->Buscar2($_REQUEST['criterio'])
        ));
    }
}