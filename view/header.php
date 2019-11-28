<?php   //PanelControl.php  
 session_start(); 
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<!--<meta http-equiv="refresh" content="30" />-->
		<meta charset="utf-8" />
		<title>SSMOP Aplicación</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css" />

        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--<link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        
		<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    	<script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<img src="assets/images/mdpn.png">	
							<!-- <i class="fa fa-leaf"></i> -->
							Monitoreo y Seguimiento de Obras Públicas
							
						</small>
					</a>
				</div>
<?php if(isset($_SESSION["id_cargo"])) { ?>
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle" Style="height:150%;">
								<img class="nav-user-photo" src="assets/images/avatars/user.png" alt="Jason's Photo" />
								<span class="user-info">
									<small>Bienvenido,</small>
									<span><small>
									<?php
									if($_SESSION['id_cargo'] == "1"){ 
										print($_SESSION['user1']);
										echo '<br>'; 
										print($_SESSION['user2']);
										//echo 'Jefa de Obras'; 
									}elseif($_SESSION['id_cargo'] == "2"){
										print($_SESSION['user1']);
										echo '<br>';
										print($_SESSION['user2']);
										//echo 'Supervisor';
									}else{
										print($_SESSION['user1']);
										echo '<br>';
										print($_SESSION['user2']);
										//echo 'Secretaria';
									}
									?>
									</small>
									</span>
								</span>

								<!--<i class="ace-icon fa fa-caret-down"></i>-->
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Configuración
									</a>
								</li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-user"></i>
										Perfil
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="index.php">
										<i class="ace-icon fa fa-power-off"></i>
										Cerrar Cesión
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>
		<!-- TODO LO SUPERIOR CONSTA DEL ENCABEZADO DEL SISTEMA-->

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>
						<span class="btn btn-info"></span>
						<span class="btn btn-warning"></span>
						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
				<li class="active">
						<a href="#">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Panel de Control </span>
						</a>

						<b class="arrow"></b>
					</li>

<?php if ($_SESSION['id_cargo'] == "1") { ?>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Información PI
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Obras
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="main_obra.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Ficha de Obra
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="#">
											<i class="menu-icon fa fa-caret-right"></i>
											Asignar Criterios 
										</a>
										<b class="arrow"></b>
									</li>
								</ul>
							</li>
						</ul>
					</li>
<!--
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-file-o"></i>
							<span class="menu-text"> Reportes </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Informe del Acta de Conformidad
								</a>
								<b class="arrow"></b>
							</li>
						</ul>				
					</li>
-->
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> Administrar Acceso </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Grupos de Usuarios
								</a>
								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="main_usuario.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Usuarios
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					
<?php } elseif ($_SESSION['id_cargo'] == "2" ) { ?>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Documentos </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="main_solicitud.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Elaborar Solicitudes
								</a>
								<b class="arrow"></b>
							</li>										
						</ul>					
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-eye"></i>
							<span class="menu-text"> Seguimiento </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="main_movimiento.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Ver Ejecución de Obras
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="main_inspeccion.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Asignar Supervisión
								</a>

								<b class="arrow"></b>
							</li>													
						</ul>					
					</li>

					<!--
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-file-o"></i>
							<span class="menu-text"> Reportes </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Resultados del Avance de Obras
								</a>
								<b class="arrow"></b>
							</li>
						</ul>				
					</li>
-->
<?php } elseif ($_SESSION['id_cargo'] == "4") { ?>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">
								Revisión
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="main_expediente.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Expediente Técnico
								</a>
								<b class="arrow"></b>
							</li>

							<!--
							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Asignar detalles
								</a>
								<b class="arrow"></b>
							</li>
							-->

							<li class="">
								<a href="main_exp.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Ver Trazabilidad
								</a>
								<b class="arrow"></b>
							</li>

						</ul>	
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-file-o"></i>
							<span class="menu-text"> Reportes </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="main_trazabilidad.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Informe de Expedientes - Trazabilidad
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-book"></i>
							<span class="menu-text"> Registros </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="main_persona.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Personas
								</a>
								<b class="arrow"></b>
							</li>	
							
							<li class="">
								<a href="main_entidad.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Entidades
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="main_representante.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Representantes
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>

<?php } ?>			
					<li class="">
						<a href="CerrarSesion.php">
							<i class="menu-icon fa fa-power-off"></i>
							<span class="menu-text"> Cerrar Sesión </span>
						</a>
						<b class="arrow"></b>
					</li>

				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
<?php  
} else {  
	header("location:index.php");  
}  ?>