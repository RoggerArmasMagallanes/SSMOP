<?php
class Solicitud
{
	private $pdo;
    
    public $ID_SOLICITUD;
    // public $ID_PERSONA;
    // public $ID_ENTIDAD;
    public $ID_REPRESENTANTE;
    public $FECHA_ING;  
    public $SERIE_SOL;
	public $CONTEXTO_SOL;
	public $ID_TIPO;

	public $PERSONAS;
	public $RAZON_SOCIAL;
	public $N_RUC;
	public $N_DNI;
	public $CARGO_ENTIDAD;

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

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("CALL PROC_LISTAR_SOLICITUDES()");
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
			          ->prepare("CALL PROC_BUSCAR_SOLICITUDES(?)");
			          

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
			            ->prepare("CALL PROC_BAJA_SOLICITUD(?)");			          

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
			$sql = "CALL PROC_ACTUALIZAR_SOLICITUD(?,?,?,?,?,?)";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						
						$data->ID_SOLICITUD,
				    	// $data->ID_PERSONA, 
                        $data->ID_REPRESENTANTE,                        
                        $data->FECHA_ING,
                        $data->SERIE_SOL,
                        $data->CONTEXTO_SOL, 
						$data->ID_TIPO
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Solicitud $data)
	{
		try 
		{
		$sql = "CALL PROC_REGISTRAR_SOLICITUD(?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					// $data->ID_PERSONA, 
                    $data->ID_REPRESENTANTE,                        
                    $data->FECHA_ING,
                    $data->SERIE_SOL,
                    $data->CONTEXTO_SOL, 
					$data->ID_TIPO
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Listar_Tipos()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("CALL PROC_LISTAR_TIPOS()");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar_Persona()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("CALL PROC_CARGAR_PERSONA()");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar_Entidad()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("CALL PROC_CARGAR_ENTIDAD()");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Buscar($criterio)
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("CALL PROC_FILTRAR_REPRESENTANTE('$criterio')");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
}