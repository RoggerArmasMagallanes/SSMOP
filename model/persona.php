<?php
class Persona
{
	private $pdo;
    
    public $ID_PERSONA;
    public $APE_PATERNO;
    public $APE_MATERNO;
    public $NOMBRES;  
    public $N_DNI;
	public $GENERO;
	public $CORREO;
	public $FECHA_NAC;
	public $TELEFONO;
	public $CELULAR;
	
	public $DATOS;

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

			$stm = $this->pdo->prepare("CALL PROC_FILTRAR_PERSONA('$criterio')");
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

			$stm = $this->pdo->prepare("CALL PROC_LISTAR_PERSONA()");
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
			          ->prepare("CALL PROC_BUSCAR_PERSONA(?)");
			          

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

	public function Actualizar($data)
	{
		try 
		{
			$sql = "CALL PROC_ACTUALIZAR_PERSONA(?,?,?,?,?,?,?,?,?,?)";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						
						$data->ID_PERSONA,
				    	$data->APE_PATERNO, 
                        $data->APE_MATERNO,                        
                        $data->NOMBRES,
                        $data->N_DNI,
                        $data->GENERO, 
                        $data->CORREO, 
                        $data->FECHA_NAC, 
                        $data->TELEFONO, 
						$data->CELULAR
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Persona $data)
	{
		try 
		{
		$sql = "CALL PROC_REGISTRAR_PERSONA(?,?,?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->APE_PATERNO, 
                    $data->APE_MATERNO,                        
                    $data->NOMBRES,
                	$data->N_DNI,
                    $data->GENERO, 
                    $data->CORREO, 
                    $data->FECHA_NAC, 
                    $data->TELEFONO, 
					$data->CELULAR
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}