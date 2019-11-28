<?php
require_once 'model/Movimiento.php';
require_once 'model/Participante.php';
class InspeccionController{
      
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Movimiento();
        $this->model1 = new Participante();
    }
    

    public function Index(){
        require_once 'view/header.php';
        require_once 'view/movimiento/asignacion.php';        
        require_once 'view/footer.php';
    }

    public function Crud(){
        $movi = new Movimiento();
        
        if(isset($_REQUEST['id'])){
            $movi = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/movimiento/asignacion-editar.php';
        require_once 'view/footer.php';    
    }
    
    public function Crud1(){
        $participante = new Participante();
        
        if(isset($_REQUEST['id'])){
            $participante = $this->model1->Buscar($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/movimiento/asignacion-editar.php';
        require_once 'view/footer.php';    
    }

    public function Guardar(){
        $movi = new Movimiento();

        $movi->ID_MOBRA = $_REQUEST['id'];   
        $movi->ID_OBRA = $_REQUEST['id_obra'];
        $movi->NOTIFICACION = $_REQUEST['notificacion'];
        $movi->OBSERVACION = $_REQUEST['observacion'];
        $movi->ESTADO_NOTIFICAR = $_REQUEST['enotificar'];
        $movi->TIPO = $_REQUEST['tipo'];  
        $movi->MOTIVO_SUPER = $_REQUEST['motivo'];  
        $movi->FECHA_INICIO = $_REQUEST['fecha_ini'];  
        $movi->FECHA_FIN = $_REQUEST['fecha_fin'];  
        $movi->OBSERVACION_GENERAL = $_REQUEST['obs'];  
      
        $movi->ID_MOBRA > 0 
            ? $this->model->Actualizar($movi)
            : $this->model->Registrar($movi);
        
        header('Location: main_movimiento.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: main_movimiento.php');
    }

    public function PersonaBuscar()
    {
        print_r(json_encode(
            $this->model->Buscar($_REQUEST['criterio'])
        ));
    }
}
?>