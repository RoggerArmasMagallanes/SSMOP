<?php
	require_once 'model/entidad.php';
class EntidadController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Entidad();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/entidad/entidad.php'; 
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $entidad = new Entidad();
        
        if(isset($_REQUEST['id'])){
            $entidad = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/entidad/entidad-editar.php';
        require_once 'view/footer.php';    
    }
    
    public function Guardar(){
        $entidad = new Entidad();
        
        $entidad->ID_ENTIDAD = $_REQUEST['id'];   
        $entidad->TIPO_ENTIDAD = $_REQUEST['tipo_entidad'];
        $entidad->RAZON_SOCIAL = $_REQUEST['razon_social'];
        $entidad->N_RUC = $_REQUEST['n_ruc'];
        $entidad->TELEFONO = $_REQUEST['telefono'];
        $entidad->DIRECCION = $_REQUEST['direccion'];  
        $entidad->CORREO = $_REQUEST['correo']; 
      
        $entidad->ID_ENTIDAD > 0 
            ? $this->model->Actualizar($entidad)
            : $this->model->Registrar($entidad);
        
        header('Location: main_entidad.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: main_entidad.php');
    }

    public function ClienteBuscar()
    {
        print_r(json_encode(
            $this->model->Buscar($_REQUEST['criterio'])
        ));
    }

}