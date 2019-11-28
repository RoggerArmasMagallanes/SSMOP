<?php
require_once 'model/movimiento.php';
require_once 'model/obra.php';
require_once 'model/participante.php';
require_once 'model/matriz.php';

class MovimientoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Movimiento();
        $this->model1 = new Obra();
        $this->model2 = new Participante();
        $this->model3 = new Matriz();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/movimiento/movimiento.php';        
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $movi = new Movimiento();
        
        if(isset($_REQUEST['id'])){
            $movi = $this->model1->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/movimiento/movimiento-editar.php';
        require_once 'view/footer.php';    
    }

    public function Crud1(){
        $movi = new Movimiento();
        
        if(isset($_REQUEST['id'])){
            $movi = $this->model1->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/movimiento/movimiento-matriz.php';
        require_once 'view/footer.php';    
    }

    public function Crud2(){
        $matriz = new Matriz();
        
        if(isset($_REQUEST['id'])){
            $matriz = $this->model3->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/movimiento/ver-matriz.php';
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
    
    public function Guardar1(){
        $participante = new Participante();
           
        $participante->ID_ASIGNAR = $_REQUEST['id'];   
        $participante->ID_MOBRA = $_REQUEST['id_mobra'];
        $participante->PARTICIPANTE = $_REQUEST['participante'];
        $participante->N_DNI = $_REQUEST['dni'];
      
        $participante->ID_ASIGNAR > 0 
            ? $this->model2->Actualizar($participante)
            : $this->model2->Registrar($participante);
        
        header('Location: main_inspeccion.php');
    }
    

    public function Guardar2(){
        $matriz = new Matriz();

        $matriz->ID_MATRIZ = $_REQUEST['id'];   
        $matriz->ID_OBRA = $_REQUEST['id_obra'];
        $matriz->N_RIESGO = $_REQUEST['n_riesgo'];
        $matriz->DESCRIPCION = $_REQUEST['descripcion'];
        $matriz->ESTRATEGIA = $_REQUEST['estrategia'];
        $matriz->ACCIONES = $_REQUEST['acciones'];  
        $matriz->ASIGNACION = $_REQUEST['asignacion']; 
      
        $matriz->ID_MATRIZ > 0 
            ? $this->model3->Actualizar($matriz)
            : $this->model3->Registrar($matriz);
        
        header('Location: main_movimiento.php');
    }

    public function Eliminar(){
        $this->model3->Eliminar($_REQUEST['id']);
        require_once 'view/header.php';
        require_once 'view/movimiento/ver-matriz.php';
        require_once 'view/footer.php'; 
    }

    public function PersonaBuscar()
    {
        print_r(json_encode(
            $this->model->Buscar($_REQUEST['criterio'])
        ));
    }
}