<?php
class Representante
{
	private $pdo;

    public $ID_REPRESENTANTE;
    public $ID_PERSONA;
    public $ID_ENTIDAD;
    public $CARGO_ENTIDAD;  
	public $NACIONALIDAD;
	
    public $N_DNI;
    public $DATOS;
    public $N_RUC;
    public $RAZON_SOCIAL;
	

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

    
    public function Buscar1($criterio)
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("CALL PROC_FILTRAR1_PERSONA('$criterio')");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Buscar2($criterio)
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("CALL PROC_FILTRAR2_EMPRESA('$criterio')");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
    

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("CALL PROC_LISTAR_REPRESENTANTE()");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("CALL PROC_BUSCAR_REPRESENTANTE(?)");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("CALL PROC_BAJA_REPRESENTANTE(?)");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "CALL PROC_ACTUALIZAR_REPRESENTANTE(?,?,?,?,?)";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->ID_REPRESENTANTE,
				    	$data->ID_PERSONA, 
                        $data->ID_ENTIDAD,                        
                        $data->CARGO_ENTIDAD,
                        $data->NACIONALIDAD
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Representante $data)
	{
		try 
		{
		$sql = "CALL PROC_REGISTRAR_REPRESENTANTE(?,?,?,?)";
		
		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->ID_PERSONA, 
                    $data->ID_ENTIDAD,                        
                    $data->CARGO_ENTIDAD,
					$data->NACIONALIDAD
                )
			);
			
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}