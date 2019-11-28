<?php
class Usuario
{
	private $pdo;

    public $ID_USUARIO;
    public $ID_PERSONA;
    public $ID_CARGO;
    public $NOMBRE_USUARIO;
    public $CLAVE_USUARIO;

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

	

	public function dd($email,$password)
    {
       try
       {
          $stmt = $this->pdo->prepare("CALL PROC_VALIDAR_USUARIO('$email','$password'");
          $stmt->execute();
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($password, $userRow['CLAVE_USUARIO']))
             {
                $_SESSION['user_session'] = $userRow['DATOS'];
                return true;
             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }

   public function identificar($email,$password)
		{
			$rows = null;
		$modelo = new Database();
		$conexion = $modelo->StartUp();


		//$opcion = $opt;
		//$dato = $criterio;


		$sql = "CALL PROC_VALIDAR_USUARIO('$email','$password')";
		$statement = $conexion->prepare($sql);
		$statement->execute();
		while ($resultado = $statement->fetch()) {
			$rows[] = $resultado;	
		}
		return $rows;
		$statement->close();

			//$pass=sha1($password);
			//$sql="SELECT * FROM usuarios WHERE email_usuario='$email' && pass_usuario='$pass'";
			//$sql="SELECT * FROM USUARIO WHERE NOMBRE_USUARIO='$email' && CLAVE_USUARIO='$password'";
			/*$sql="SELECT * FROM USUARIO WHERE NOMBRE_USUARIO='$email' && CLAVE_USUARIO='$password'";
			
			$resulatdos = $this->conexion->conexion->query($sql);
			if ($resulatdos->num_rows > 0) {
				$r=$resulatdos->fetch_array();
			}
			else{
				$r[0]=0;
			}
			return $r;
			$this->conexion->cerrar();*/
		}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("CALL PROC_LISTAR_USUARIO()");
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
			          ->prepare("CALL PROC_BUSCAR_USUARIO(?)");
			          

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
			            ->prepare("CALL PROC_BAJA_USUARIO(?)");			          

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
			$sql = "CALL PROC_ACTUALIZAR_USUARIO(?,?,?,?,?)";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->ID_USUARIO,
						$data->ID_PERSONA,
				    	$data->ID_CARGO, 
                        $data->NOMBRE_USUARIO,                        
                        $data->CLAVE_USUARIO
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Usuario $data)
	{
		try 
		{
		$sql = "CALL PROC_REGISTRAR_USUARIO(?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->ID_PERSONA,
                    $data->ID_CARGO,                        
                    $data->NOMBRE_USUARIO,
                    $data->CLAVE_USUARIO
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Listar_Cargo()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("CALL PROC_CARGAR_CARGO()");
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

   public function Filtrar($opt, $criterio)
	{
		$rows = null;
		$modelo = new Database();
		$conexion = $modelo->StartUp();
		$opcion = $opt;
		$dato = $criterio;
		$sql = "CALL PROC_FILTRAJE_ENTIDAD('$opcion','$dato')";
		$statement = $conexion->prepare($sql);
		$statement->execute();
		while ($resultado = $statement->fetch()) {
			$rows[] = $resultado;	
		}
		return $rows;
		$statement->close();
	}
}