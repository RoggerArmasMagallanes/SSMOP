<?php
class Obra
{
	private $pdo;

	public $ID_OBRA;			
	public $ID_EXPEDIENTE;	
	public $NOMBRE_OBRA;		
	public $FECHA_INICIO;	
	public $FECHA_FIN;		
	public $TOTAL_DIAS;		
	public $MONTO_APTO;		
	public $FINANCIA_UNO;	
	public $FINANCIA_DOS;	
	public $ID_TIPO_EJECUCION;

	public $N_EXPEDIENTE;
	public $CONTEXTO;
	public $FECHA_APROBADO;
	public $MONTO_APROBADO;


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

			$stm = $this->pdo->prepare("CALL PROC_FILTRAR_EXPEDIENTE('$criterio')");
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

			$stm = $this->pdo->prepare("CALL PROC_LISTAR_OBRA()");
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
			          ->prepare("CALL PROC_BUSCAR_OBRA(?)");
			          

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
			            ->prepare("CALL PROC_BAJA_OBRA(?)");			          

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
			$sql = "CALL PROC_ACTUALIZAR_OBRA(?,?,?,?,?,?,?,?,?,?)";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->ID_OBRA,
				    	$data->ID_EXPEDIENTE, 
                        $data->NOMBRE_OBRA,                        
                        $data->FECHA_INICIO,
                        $data->FECHA_FIN,
						$data->TOTAL_DIAS,
                        $data->MONTO_APTO,
                        $data->FINANCIA_UNO,
                        $data->FINANCIA_DOS,
                        $data->ID_TIPO_EJECUCION
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Obra $data)
	{
		try 
		{
		$sql = "CALL PROC_REGISTRAR_OBRA(?,?,?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->ID_EXPEDIENTE, 
					$data->NOMBRE_OBRA,                        
					$data->FECHA_INICIO,
					$data->FECHA_FIN,
					$data->TOTAL_DIAS,
					$data->MONTO_APTO,
					$data->FINANCIA_UNO,
					$data->FINANCIA_DOS,
					$data->ID_TIPO_EJECUCION
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Listar_TipoEjecucion()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("CALL PROC_CARGAR_TIPOEJECUCION()");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
}