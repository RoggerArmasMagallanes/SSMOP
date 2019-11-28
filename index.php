<?php  
 	session_start();  
	include("conexion.php");
 try  
 {   
      $connect = new PDO("mysql:host=$hostBD; dbname=$dataBD", $userBD, $passBD);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["usuario"]) || empty($_POST["clave"]))  
           {  
				$message = '<label class="alert alert-danger">
							<i class="ace-icon fa fa-times">
							</i> Todos los campos son requeridos</label>';  
           }  
           else  
           {  
                $query = "CALL PROC_VALIDAR_USUARIO(:usuario,:password,:id_cargo)";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          ':usuario'     =>     $_POST["usuario"],  
                          ':password'    =>     $_POST["clave"],  
                          ':id_cargo'    =>     $_POST["id_cargo"],  
                     )  
                ); 
                $userRow=$statement->fetch(PDO::FETCH_ASSOC);                
               
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                    $_SESSION["id_cargo"] = $_POST["id_cargo"]; 
                     if($_SESSION["id_cargo"] == '4'){
                        $_SESSION['user1'] = $userRow['DATOS'];
                        $_SESSION['user2'] = $userRow['DESCRIPCION'];
                        header("location:main_expediente.php");  
                        return true;
                     }elseif($_SESSION["id_cargo"] == '2'){
                        $_SESSION['user1'] = $userRow['DATOS'];
                        $_SESSION['user2'] = $userRow['DESCRIPCION'];
                        header("location:main_expediente.php");  
                     }else{
                        $_SESSION['user1'] = $userRow['DATOS'];
                        $_SESSION['user2'] = $userRow['DESCRIPCION'];
                        header("location:main_obra.php"); 
                     }
					 
                }  
                else
                {  
					 $message = '<label class="alert alert-danger">
					 <i class="ace-icon fa fa-times">
					 </i> Usuario o Password no identificados</label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>SSMOP Aplicación</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" />

    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
</head>

<body class="login-layout blur-login">
    <!-- light-login -->
    <div class="main-container">
        <div class="main-content">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="login-container">
                        <div class="center">
                            <h1>
                                <i><img src="assets/images/logo.png"></i>
                                <span class="red"><strong>SSMOP</strong></span>
                                <span class="blue" id="id-text2">Aplicación</span>
                            </h1>
                            <h4 class="orange" id="id-company-text">
								<strong>Sistema de Seguimiento y Monitoreo de Obras Públicas</strong>
                            </h4> <!-- &copy; Municipalidad Distrital de Pueblo Nuevo -->
                        </div>

                        <div class="space-6"></div>

                        <div class="position-relative">
                            <div id="login-box" class="login-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header blue lighter bigger">
                                            <i class="ace-icon fa fa-users blue"></i>
                                            Acceso al Sistema
                                        </h4>

                                        <?php  
										if(isset($message))  
										{  
											echo '<label>'.$message.'</label>';
										}  
										?>

                                        <form role="form" method="post">
                                            <!--action="principal.php"-->
                                            <fieldset>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-left">
                                                        <input type="text" name="usuario" class="form-control"
                                                            placeholder="Usuario" autofocus />
                                                        <i class="ace-icon fa fa-user"></i>
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-left">
                                                        <input type="password" name="clave" class="form-control"
                                                            placeholder="Contraseña" />
                                                        <i class="ace-icon fa fa-lock"></i>
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <label class="block clearfix">
                                                            <select name="id_cargo" class="form-control"
                                                                id="form-field-select-1"
                                                                data-placeholder="Choose a State...">
                                                                <option value="1">JEFE DE OBRAS</option>
                                                                <option value="2">INSPECTOR DE OBRA</option>
                                                                <option value="4">SECRETARIA</option>
                                                            </select>
                                                        </label>
                                                    </span>
                                                </label>

                                                <div class="space"></div>

                                                <div class="clearfix">
                                                    <button type="submit" name="login"
                                                        class="width-35 pull-right btn btn-sm btn-primary">
                                                        <i class="ace-icon fa fa-key"></i>
                                                        <span class="bigger-110">Acceder</span>
                                                    </button>
                                                </div>

                                                <div class="space-4"></div>
                                            </fieldset>
                                        </form>
									</div><!-- /.widget-main -->
                                    <div class="center toolbar clearfix">
                                        <label class="white">© Municipalidad Distrital de Pueblo Nuevo. <br>Acceso sólo para personal autorizado.</label>
                                    </div>
                                </div><!-- /.widget-body -->
                            </div><!-- /.login-box -->
                        </div><!-- /.position-relative -->
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.main-content -->
    </div><!-- /.main-container -->

    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>