<?php
class Movimiento
{
	private $pdo;

    public $ID_MOBRA;
    public $ID_OBRA;
    public $NOTIFICACION;
    public $OBSERVACION;  
    public $ESTADO_NOTIFICAR;
	public $TIPO;
	public $MOTIVO_SUPER;
	public $FECHA_INICIO;
	public $FECHA_FIN;
	public $OBSERVACION_GENERAL;

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

	/*
	public function Buscar($criterio)
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("CALL PROC_FILTRAR_PERSONA('$criterio')");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	*/

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("CALL PROC_LISTAR_MOVIMIENTO()");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListarObra()
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
			          ->prepare("CALL PROC_BUSCAR_MOVIMIENTO(?)");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	
	/*
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
			$sql = "CALL PROC_ACTUALIZAR_MOVIMIENTO(?,?,?,?,?,?,?,?,?,?)";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->ID_MOBRA,
				    	$data->ID_OBRA, 
                        $data->NOTIFICACION,                        
                        $data->OBSERVACION,
                        $data->ESTADO_NOTIFICAR,
                        $data->TIPO, 
                        $data->MOTIVO_SUPER, 
                        $data->FECHA_INICIO, 
                        $data->FECHA_FIN, 
						$data->OBSERVACION_GENERAL
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Movimiento $data)
	{
		try 
		{
		$sql = "CALL PROC_REGISTRAR_MOVIMIENTO(?,?,?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
						$data->ID_OBRA, 
                        $data->NOTIFICACION,                        
                        $data->OBSERVACION,
                        $data->ESTADO_NOTIFICAR,
                        $data->TIPO, 
                        $data->MOTIVO_SUPER, 
                        $data->FECHA_INICIO, 
                        $data->FECHA_FIN, 
						$data->OBSERVACION_GENERAL
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}