<?php
class Matriz
{
	private $pdo;

    public $ID_MATRIZ;
    public $ID_OBRA;
    public $N_RIESGO;
    public $DESCRIPCION;  
    public $ESTRATEGIA;
	public $ACCIONES;
	public $ASIGNACION;

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

			$stm = $this->pdo->prepare("CALL PROC_BUSCAR_MATRIZ('$criterio')");
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

			$stm = $this->pdo->prepare("CALL PROC_LISTAR_MATRIZ()");
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
			            ->prepare("CALL PROC_BAJA_MATRIZ(?)");			          

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
			$sql = "CALL PROC_ACTUALIZAR_MATRIZ(?,?,?,?,?,?,?)";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->ID_MATRIZ,
				    	$data->ID_OBRA, 
                        $data->N_RIESGO,                        
                        $data->DESCRIPCION,
                        $data->ESTRATEGIA,
                        $data->ACCIONES, 
                        $data->ASIGNACION
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Matriz $data)
	{
		try 
		{
		$sql = "CALL PROC_REGISTRAR_MATRIZ(?,?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
						$data->ID_OBRA, 
                        $data->N_RIESGO,                        
                        $data->DESCRIPCION,
                        $data->ESTRATEGIA,
                        $data->ACCIONES, 
                        $data->ASIGNACION
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}