<?php
require_once 'model/expediente.php';

class ExpedienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Expediente();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/expediente/expediente.php';        
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $expediente = new Expediente();
        
        if(isset($_REQUEST['id'])){
            $expediente = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/expediente/expediente-editar.php';
        require_once 'view/footer.php';    
    }

    public function Crud1(){
        $expediente = new Expediente();
        
        if(isset($_REQUEST['id'])){
            $expediente = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/expediente/trazabilidad.php';
        require_once 'view/footer.php';    
    }
    
    public function Guardar(){
        $expediente = new Expediente();
        
     	$expediente->ID_EXPEDIENTE = $_REQUEST['id'];   
        $expediente->ID_MODALIDAD = $_REQUEST['id_modalidad'];
        $expediente->ID_REPRESENTANTE = $_REQUEST['id_representante'];
        $expediente->ID_USUARIO = $_REQUEST['id_usuario'];
        $expediente->N_EXPEDIENTE = $_REQUEST['n_expediente'];
        $expediente->CONTEXTO = $_REQUEST['contexto'];  
        $expediente->FECHA_APROBADO = $_REQUEST['fecha_aprobado']; 
        $expediente->MONTO_APROBADO = $_REQUEST['monto_aprobado']; 
        $expediente->OBSERVACION = $_REQUEST['observacion']; 
        $expediente->SUMILLA = $_REQUEST['sumilla']; 
        $expediente->UBICACION = $_REQUEST['ubicacion']; 
        $expediente->MOTIVO = $_REQUEST['motivo']; 
        $expediente->ESTADO = $_REQUEST['estado']; 
      
        $expediente->ID_EXPEDIENTE > 0 
            ? $this->model->Actualizar($expediente)
            : $this->model->Registrar($expediente);
        
        header('Location: main_expediente.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: main_expediente.php');
    }

    public function RepresentanteBuscar()
    {
        print_r(json_encode(
            $this->model->Buscar($_REQUEST['criterio'])
        ));
    }
}