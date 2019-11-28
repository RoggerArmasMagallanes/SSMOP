<?php
require_once 'model/Trazabilidad.php';
require_once 'model/Expediente.php';

class TrazabilidadController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Trazabilidad();
        $this->model1 = new Expediente();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/trazabilidad/trazabilidad.php';        
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $traza = new Trazabilidad();
        
        if(isset($_REQUEST['id'])){
            $traza = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/trazabilidad/trazabilidad-editar.php';
        require_once 'view/footer.php';    
    }
    
    public function Guardar(){
        $traza = new Trazabilidad();
           
        $traza->ID_DETEXPEDIENTE = $_REQUEST['id'];   
        $traza->ID_EXPEDIENTE = $_REQUEST['id_expediente'];
        $traza->FECHA_DERIVACION = $_REQUEST['fecha_derivacion'];
        $traza->AREA_COMPETENTE = $_REQUEST['area'];
        $traza->FOLIOS = $_REQUEST['folio'];
        $traza->OBSERVACION = $_REQUEST['observacion'];  
        $traza->NUEVO_ESTADO = $_REQUEST['nestado'];  
        $traza->ID_DETEXPEDIENTE > 0 
            ? $this->model->Actualizar($traza)
            : $this->model->Registrar($traza);
        
        header('Location: main_persona.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: main_trazabilidad.php');
    }

    public function BuscarTodo(){
        $this->model->Buscar($_REQUEST['id']);
        header('Location: main_trazabilidad.php');
    }
}