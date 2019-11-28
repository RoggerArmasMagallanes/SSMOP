<?php
	
		require_once 'model/usuario.php';


		$boton=$_POST['boton'];

		switch ($boton) {
			case 'cerrar':
					session_start();
					session_destroy();
				break;
			case 'ingresar':
					$email = $_POST['email'];
					$password = $_POST['password'];

					$ins = new Usuario();
					$array=$ins->identificar($email,$password);
					if ($array[0]==0) 
					{
						echo '0';
					}
					else
					{
						session_start();
						$_SESSION['ingreso']='YES';
						$_SESSION['DATOS']=$array[1];
					}
				break;
			default:
				# code...
				break;
		}

		
?>