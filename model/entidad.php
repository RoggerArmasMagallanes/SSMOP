<?php
class Entidad
{
	private $pdo;
    
    public $ID_ENTIDAD;
    public $TIPO_ENTIDAD;
    public $RAZON_SOCIAL;
    public $N_RUC;  
    public $TELEFONO;
	public $DIRECCION;
	public $CORREO;
	
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


	public function Filtrar($opt, $criterio)
	{
		//Creamos una variable ($rows) que va ser un arreglo con valor nulo (null)
		$rows = null;
		//Creamos un objeto de (Conexion) que se va guardar en la variable $modelo
		$modelo = new Database();
		//Creamos una variable ($conexion) para guardar a la variable $modelo y traer la función get_conexion de la (Clase Conexion)
		$conexion = $modelo->StartUp();
		//Creamos una variable ($nombre) para guardar la variable ($arg_nombre) concatenado el (%) para buscar mediante la consulta ($sql)
		$opcion = $opt;
		$dato = $criterio;
		//Creamos una variable ($sql) para hacer la consulta (Query) a la base de datos
		$sql = "CALL PROC_FILTRAJE_ENTIDAD('$opcion','$dato')";
		//Creamos una variable ($statement) para llamar a la conexion ($conexion) para preparar la consulta con el método (prepare) y pasar la variable ($sql) donde esta la instrucción sql para ejecutar a la base de datos
		$statement = $conexion->prepare($sql);
		//Invocar a la variable ($statement) para traer a la funcion (bindParam) para llamar a la variable ($nombre) concatenado el (%) para hacer la consulta
		//$statement->bindParam(":RAZON_SOCIAL", $nombre);
		//Ejecutará la consulta con el método (execute)
		$statement->execute();

		//Vamos a recorrer el resultado de la consulta, creamos una variable ($resultado) que va ser igual a la variable ($statement) y llamar al método (fetch)
		while ($resultado = $statement->fetch()) {
		//La variable ($rows) lo convertimos en un arreglo ([]) va ser igual a la variable ($resultado) para guardar el resultado
			$rows[] = $resultado;	
		}
		//Retornamos la variable ($rows)
		return $rows;
		//Cerramos la conexión con el método (close)
		$statement->close();
	}


	public function cargarEntidades(){
		//Creamos una variable ($rows) que va ser un arreglo con valor nulo (null)
		$rows = null;
		//Creamos un objeto de (Conexion) que se va guardar en la variable $modelo
		$modelo = new Database();
		//Creamos una variable ($conexion) para guardar a la variable $modelo y traer la función get_conexion de la (Clase Conexion)
		$conexion = $modelo->StartUp();
		//Creamos una variable ($sql) para hacer la consulta (Query) a la base de datos
		$sql = "CALL PROC_LISTAR_ENTIDAD()";
		//Creamos una variable ($statement) para llamar a la conexion ($conexion) para preparar la consulta con el método (prepare) y pasar la variable ($sql) donde esta la instrucción sql para ejecutar a la base de datos
		$statement = $conexion->prepare($sql);
		//Ejecutará la consulta con el método (execute)
		$statement->execute();

		//Vamos a recorrer el resultado de la consulta, creamos una variable ($resultado) que va ser igual a la variable ($statement) y llamar al método (fetch)
		while ($resultado = $statement->fetch()) {
		//La variable ($rows) lo convertimos en un arreglo ([]) va ser igual a la variable ($resultado) para guardar el resultado
			$rows[] = $resultado;	
		}
		//Retornamos la variable ($rows)
		return $rows;
		//Cerramos la conexión con el método (close)
		$statement->close();		 	
	}


	public function Buscar($criterio)
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM entidad WHERE n_ruc LIKE '%$criterio%' ORDER BY razon_social LIMIT 8");
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

			$stm = $this->pdo->prepare("CALL PROC_LISTAR_ENTIDAD()");
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
			          ->prepare("CALL PROC_BUSCAR_ENTIDAD(?)");
			          

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
			            ->prepare("CALL PROC_BAJA_ENTIDAD(?)");			          

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
			$sql = "CALL PROC_ACTUALIZAR_ENTIDAD(?,?,?,?,?,?,?)";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->ID_ENTIDAD,
				    	$data->TIPO_ENTIDAD, 
                        $data->RAZON_SOCIAL,                        
                        $data->N_RUC,
                        $data->TELEFONO,
                        $data->DIRECCION, 
                        $data->CORREO
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Entidad $data)
	{
		try 
		{
		$sql = "CALL PROC_REGISTRAR_ENTIDAD(?,?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->TIPO_ENTIDAD, 
                    $data->RAZON_SOCIAL,                        
                    $data->N_RUC,
                    $data->TELEFONO,
                    $data->DIRECCION, 
                    $data->CORREO
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}