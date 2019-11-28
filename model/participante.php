<?php
class Participante
{
	private $pdo;
    
    public $ID_ASIGNAR;
    public $ID_MOBRA;
    public $PARTICIPANTE;
    public $N_DNI;


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

			$stm = $this->pdo->prepare("CALL PROC_BUSCAR_PARTICIPANTES('$criterio')");
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

			$stm = $this->pdo->prepare("CALL PROC_LISTAR_PARTICIPANTES()");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	/*
	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("CALL PROC_BUSCAR_PARTICIPANTES(?)");
			          

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
			            ->prepare("CALL PROC_BAJA_PERSONA(?)");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	*/

	public function Actualizar($data)
	{
		try 
		{
			$sql = "CALL PROC_ACTUALIZAR_PARTICIPANTES(?,?,?,?)";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->ID_ASIGNAR,
				    	$data->ID_MOBRA, 
                        $data->PARTICIPANTE,                        
                        $data->N_DNI
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Participante $data)
	{
		try 
		{
		$sql = "CALL PROC_REGISTRAR_PARTICIPANTES(?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->ID_MOBRA, 
                    $data->PARTICIPANTE,                        
                    $data->N_DNI
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}