<?php
require_once 'model/participante.php';

class ParticipanteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Participante();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/persona/persona.php';        
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $participante = new Participante();
        
        if(isset($_REQUEST['id'])){
            $participante = $this->model->Buscar($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/movimiento/ver-participantes.php';
        require_once 'view/footer.php';   
    }
    
    public function Guardar(){
        $participante = new Participante();
           
        $participante->ID_ASIGNAR = $_REQUEST['id'];   
        $participante->ID_MOBRA = $_REQUEST['id_mobra'];
        $participante->PARTICIPANTE = $_REQUEST['participante'];
        $participante->N_DNI = $_REQUEST['dni'];
      
        $participante->ID_PERSONA > 0 
            ? $this->model->Actualizar($participante)
            : $this->model->Registrar($participante);
        
        header('Location: main_inspeccion.php.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: main_inspeccion.php.php');
    }
}