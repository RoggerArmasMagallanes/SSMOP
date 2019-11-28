<?php
require_once 'model/obra.php';

class ObraController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Obra();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/obra/obra.php';        
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $obra = new Obra();
        
        if(isset($_REQUEST['id'])){
            $obra = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/obra/obra-editar.php';
        require_once 'view/footer.php';    
    }
    
    public function Guardar(){
        $obra = new Obra();

     	$obra->ID_OBRA = $_REQUEST['id'];   
        $obra->ID_EXPEDIENTE = $_REQUEST['id_expediente'];
        $obra->NOMBRE_OBRA = $_REQUEST['nombre_obra'];
        $obra->FECHA_INICIO = $_REQUEST['fecha_inicio'];
        $obra->FECHA_FIN = $_REQUEST['fecha_fin'];
        $obra->TOTAL_DIAS = $_REQUEST['total_dias'];  
        $obra->MONTO_APTO = $_REQUEST['monto_apto']; 
        $obra->FINANCIA_UNO = $_REQUEST['financia1']; 
        $obra->FINANCIA_DOS = $_REQUEST['financia2']; 
        $obra->ID_TIPO_EJECUCION = $_REQUEST['id_tipoejecucion'];
      
        $obra->ID_OBRA > 0 
            ? $this->model->Actualizar($obra)
            : $this->model->Registrar($obra);
        
        header('Location: main_obra.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: main_obra.php');
    }

    public function ExpedienteBuscar()
    {
        print_r(json_encode(
            $this->model->Buscar($_REQUEST['criterio'])
        ));
    }
}