<?php
require_once 'model/solicitud.php';

class SolicitudController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Solicitud();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/solicitud/solicitud.php';        
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $solicitud = new Solicitud();
        
        if(isset($_REQUEST['id'])){
            $solicitud = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/solicitud/solicitud-editar.php';
        require_once 'view/footer.php';    
    }
    
    public function Guardar(){
        $solicitud = new Solicitud();
           
        $solicitud->ID_SOLICITUD = $_REQUEST['id'];   
        $solicitud->ID_REPRESENTANTE = $_REQUEST['id_representante'];
        // $solicitud->ID_ENTIDAD = $_REQUEST['id_entidad'];
        $solicitud->FECHA_ING = $_REQUEST['fecha_ing'];
        $solicitud->SERIE_SOL = $_REQUEST['serie_sol'];
        $solicitud->CONTEXTO_SOL = $_REQUEST['contexto_sol'];  
        $solicitud->ID_TIPO = $_REQUEST['id_tipo'];  
      
        $solicitud->ID_SOLICITUD > 0 
            ? $this->model->Actualizar($solicitud)
            : $this->model->Registrar($solicitud);
        
        header('Location: main_solicitud.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: main_solicitud.php');
    }

    public function RepresentanteBuscar()
    {
        print_r(json_encode(
            $this->model->Buscar($_REQUEST['criterio'])
        ));
    }
}