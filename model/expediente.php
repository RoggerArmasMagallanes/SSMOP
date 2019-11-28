<?php
class Expediente
{
	private $pdo;

	public $ID_EXPEDIENTE;	
	public $ID_MODALIDAD;	
	public $ID_REPRESENTANTE;
	public $ID_USUARIO;	
	public $N_EXPEDIENTE;	
	public $CONTEXTO;	
	public $FECHA_APROBADO;	
	public $MONTO_APROBADO;	
	public $OBSERVACION;	
	public $SUMILLA;	
	public $UBICACION;		
	public $MOTIVO;
	public $ESTADO;

	public $N_DNI;
	public $REPRESENTANTE;
	public $CARGO_ENTIDAD;
	public $RAZON_SOCIAL;
	public $N_RUC;


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

			$stm = $this->pdo->prepare("CALL PROC_FILTRAR_REPRESENTANTE('$criterio')");
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

			$stm = $this->pdo->prepare("CALL PROC_LISTAR_EXPEDIENTE()");
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
			          ->prepare("CALL PROC_BUSCAR_EXPEDIENTE(?)");
			          

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
			            ->prepare("CALL PROC_BAJA_EXPEDIENTE(?)");			          

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
			$sql = "CALL PROC_ACTUALIZAR_EXPEDIENTE(?,?,?,?,?,?,?,?,?,?,?,?,?)";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->ID_EXPEDIENTE,
				    	$data->ID_MODALIDAD, 
                        $data->ID_REPRESENTANTE,                        
                        $data->ID_USUARIO,
                        $data->N_EXPEDIENTE,
						$data->CONTEXTO,
                        $data->FECHA_APROBADO, 
                        $data->MONTO_APROBADO,
                        $data->OBSERVACION,
                        $data->SUMILLA,
                        $data->UBICACION,
                        $data->MOTIVO,
                        $data->ESTADO
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Expediente $data)
	{
		try 
		{
		$sql = "CALL PROC_REGISTRAR_EXPEDIENTE(?,?,?,?,?,?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    	$data->ID_MODALIDAD, 
                        $data->ID_REPRESENTANTE,                        
                        $data->ID_USUARIO,
                        $data->N_EXPEDIENTE,
						$data->CONTEXTO,
                        $data->FECHA_APROBADO, 
                        $data->MONTO_APROBADO,
                        $data->OBSERVACION,
                        $data->SUMILLA,
                        $data->UBICACION,
                        $data->MOTIVO,
                        $data->ESTADO
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Listar_Modalidad()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("CALL PROC_CARGAR_MODALIDAD()");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar_Usuario()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("CALL PROC_CARGAR_USUARIO()");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}



	public function FiltrarExpediente($criterio)
	{    //$opt
		$rows = null;
		$modelo = new Database();
		$conexion = $modelo->StartUp();
		
		//$opcion = $opt;
		$dato = $criterio;
		$sql = "CALL PROC_BUSQUEDA_EXPEDIENTE('$dato')";
		$statement = $conexion->prepare($sql);
		$statement->execute();

		while ($resultado = $statement->fetch()) {
						$rows[] = $resultado;	
		}
		return $rows;
		$statement->close();
	}

	public function FiltrarRango($criterio1, $criterio2)
	{    //$opt
		$rows = null;
		$modelo = new Database();
		$conexion = $modelo->StartUp();
		
		//$opcion = $opt;
		$dato1 = $criterio1;
		$dato2 = $criterio2;
		$sql = "CALL PROC_RANGO_EXPEDIENTE('$dato1', '$dato2')";
		$statement = $conexion->prepare($sql);
		$statement->execute();

		while ($resultado = $statement->fetch()) {
						$rows[] = $resultado;	
		}
		return $rows;
		$statement->close();
	}

	public function FiltrarTrazabilidad($criterio1)
	{    //$opt
		$rows = null;
		$modelo = new Database();
		$conexion = $modelo->StartUp();
		
		//$opcion = $opt;
		$dato1 = $criterio1;
		$sql = "CALL PROC_VER_TRAZABILIDAD('$dato1')";
		$statement = $conexion->prepare($sql);
		$statement->execute();

		while ($resultado = $statement->fetch()) {
						$rows[] = $resultado;	
		}
		return $rows;
		$statement->close();
	}

	public function cargarExpedientes(){
		$rows = null;
		$modelo = new Database();
		$conexion = $modelo->StartUp();
		$sql = "CALL PROC_LISTAR_EXPEDIENTE()";
		$statement = $conexion->prepare($sql);
		$statement->execute();
		while ($resultado = $statement->fetch()) {
			$rows[] = $resultado;	
		}
		return $rows;
		$statement->close();		 	
	}

}