<?php
class Trazabilidad
{
	private $pdo;	

    public $ID_DETEXPEDIENTE;
    public $ID_EXPEDIENTE;
    public $FECHA_DERIVACION;
    public $AREA_COMPETENTE;  
    public $FOLIOS;
	public $OBSERVACION;
	public $NUEVO_ESTADO;

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

	public function Buscar($criterio)
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("CALL PROC_VER_TRAZABILIDAD('$criterio')");
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

			$stm = $this->pdo->prepare("CALL PROC_LISTAR_TRAZABILIDAD()");
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
			          ->prepare("CALL PROC_VER_TRAZABILIDAD(?)");
			          

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
			            ->prepare("CALL PROC_BAJA_TRAZABILIDAD(?)");			          

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
			$sql = "CALL PROC_ACTUALIZAR_TRAZABILIDAD(?,?,?,?,?,?,?)";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->ID_DETEXPEDIENTE,
				    	$data->ID_EXPEDIENTE, 
                        $data->FECHA_DERIVACION,                        
                        $data->AREA_COMPETENTE,
                        $data->FOLIOS,
                        $data->OBSERVACION, 
                        $data->NUEVO_ESTADO
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Trazabilidad $data)
	{
		try 
		{
		$sql = "CALL PROC_REGISTRAR_TRAZABILIDAD(?,?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->ID_EXPEDIENTE, 
                    $data->FECHA_DERIVACION,                        
                    $data->AREA_COMPETENTE,
                    $data->FOLIOS,
                    $data->OBSERVACION, 
                    $data->NUEVO_ESTADO
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}