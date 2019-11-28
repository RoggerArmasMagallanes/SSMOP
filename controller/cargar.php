<?php
require_once 'model/entidad.php';
require_once 'model/expediente.php';

	function cargar(){
		$consulta = new Entidad();
		$filas = $consulta->cargarEntidades();

		echo "<div> 
			<table id='dynamic-table' class='table table-striped table-bordered table-hover'>
			<thead>
				<tr>
					<th class='center'>Item</th>
					<th>Tipo Entidad</th>
					<th>Razón Social</th>
					<th>N° RUC</th>
					<th>N° Teléfono</th>
					<th>Dirección</th>
					<th></th>
				</tr>
			</thead>
			<tbody>";
			foreach ($filas as $fila) {
				echo "<tr>";
				echo "<td class='center'>".$fila['ID_ENTIDAD']."</td>";
				echo "<td>".$fila['TIPO_ENTIDAD']."</td>";
				echo "<td>".$fila['RAZON_SOCIAL']."</td>";
				echo "<td>".$fila['N_RUC']."</td>";
				echo "<td>".$fila['TELEFONO']."</td>";
				echo "<td>".$fila['DIRECCION']."</td>";
				echo "<td class='center'>
						<div class='hidden-sm hidden-xs action-buttons'>
							<a class='green'
								href='?c=Entidad&a=Crud&id=".$fila['ID_ENTIDAD']."'
								class='tooltip-error' data-rel='tooltip' title='Editar'>
								<i class='ace-icon fa fa-pencil bigger-130'></i>
							</a>

							<a class='red'
								onclick='javascript:return confirm('¿Seguro desea eliminar este registro?');'
								href='?c=Entidad&a=Eliminar&id=".$fila['ID_ENTIDAD']."'
								class='tooltip-error' data-rel='tooltip' title='Eliminar'>
								<i class='ace-icon fa fa-trash-o bigger-130'></i>
							</a>
						</div>
					</td>";
				echo "</tr>";
			}
		echo "</tbody>";	
		echo "</table>";
		echo "</div>";
	}

	function buscar($opt, $nombre){
		$consulta = new Entidad();
		$filas = $consulta->Filtrar($opt, $nombre);

		if (isset($filas)) {
			
		echo "<div> 
			<table id='dynamic-table' class='table table-striped table-bordered table-hover'>
			<thead>
				<tr>
					<th class='center'>Item</th>
					<th>Tipo Entidad</th>
					<th>Razón Social</th>
					<th>N° RUC</th>
					<th>N° Teléfono</th>
					<th>Dirección</th>
					<th></th>
				</tr>
			</thead>";
			
			foreach ($filas as $fila) {
			echo "<tbody>";	
			echo "<tr>";
			echo "<td class='center'>".$fila['ID_ENTIDAD']."</td>";
			echo "<td>".$fila['TIPO_ENTIDAD']."</td>";
			echo "<td>".$fila['RAZON_SOCIAL']."</td>";
			echo "<td>".$fila['N_RUC']."</td>";
			echo "<td>".$fila['TELEFONO']."</td>";
			echo "<td>".$fila['DIRECCION']."</td>";
			echo "<td class='center'>
					<div class='hidden-sm hidden-xs action-buttons'>
						<a class='green'
							href='?c=Entidad&a=Crud&id=".$fila['ID_ENTIDAD']."'
							class='tooltip-error' data-rel='tooltip' title='Editar'>
							<i class='ace-icon fa fa-pencil bigger-130'></i>
						</a>

						<a class='red'
							onclick='javascript:return confirm(¿Seguro desea eliminar este registro?);'
							href='?c=Entidad&a=Eliminar&id=".$fila['ID_ENTIDAD']."'
							class='tooltip-error' data-rel='tooltip' title='Eliminar'>
							<i class='ace-icon fa fa-trash-o bigger-130'></i>
						</a>
					</div>
				  </td>";
			echo "</tr>";
			echo "</tbody>";
		}
		echo "</table> </div>";	
		}else{
			echo "<div class='alert alert-info'>
					<button type='button' class='close' data-dismiss='alert'>
						<i class='ace-icon fa fa-times'></i>
					</button>
					<strong>Aviso!</strong>
					Lo sentimos, no se encontraron registros...
					<br />
				</div>";
		}	
	}	



	function cargar2(){
		$consulta = new Expediente();
		$filas = $consulta->cargarExpedientes();

		echo "<div> 
			<table id='dynamic-table' class='table table-striped table-bordered table-hover'>
			<thead>
				<tr>
					<th class='center'>Item</th>
					<th>Modalidad</th>
					<th>N° Expediente</th>
					<th>Descripcion</th>
					<th>Fecha Recibido</th>
					<th>Ubicacion</th>
					<th class='center'></th>
				</tr>
			</thead>
			<tbody>";
			foreach ($filas as $fila) {
				echo "<tr>";
				echo "<td class='center'>".$fila['ID_EXPEDIENTE']."</td>";
				echo "<td>".$fila['DESCRIPCION']."</td>";
				echo "<td>".$fila['N_EXPEDIENTE']."</td>";
				echo "<td>".$fila['CONTEXTO']."</td>";
				echo "<td>".$fila['FECHA_APROBADO']."</td>";
				echo "<td>".$fila['UBICACION']."</td>";
				echo "<td class='center'>
						<div class='hidden-sm hidden-xs action-buttons'>
							<a class='green'
								href='?c=Expediente&a=Crud&id=".$fila['ID_EXPEDIENTE']."'
								class='tooltip-error' data-rel='tooltip' title='Editar'>
								<i class='ace-icon fa fa-pencil bigger-130'></i>
							</a>

							<a class='red'
								onclick='javascript:return confirm('¿Seguro desea eliminar este registro?');'
								href='?c=Expediente&a=Eliminar&id=".$fila['ID_EXPEDIENTE']."'
								class='tooltip-error' data-rel='tooltip' title='Eliminar'>
								<i class='ace-icon fa fa-trash-o bigger-130'></i>
							</a>
						</div>
					</td>";
				echo "</tr>";
			}
		echo "</tbody>";	
		echo "</table>";
		echo "</div>";
	}

	function buscar2($nombre){
		$consulta = new Expediente();
		$filas = $consulta->FiltrarExpediente($nombre);

		if (isset($filas)) {
			
		echo "<div> 
			<table id='dynamic-table' class='table table-striped table-bordered table-hover'>
			<thead>
				<tr>
					<th class='center'>Item</th>
					<th>Modalidad</th>
					<th>N° Expediente</th>
					<th>Descripcion</th>
					<th>Fecha Recibido</th>
					<th>Ubicacion</th>
					<th class='center'></th>
				</tr>
			</thead>";
			
			foreach ($filas as $fila) {
			echo "<tbody>";	
			echo "<tr>";
			echo "<td class='center'>".$fila['ID_EXPEDIENTE']."</td>";
			echo "<td>".$fila['DESCRIPCION']."</td>";
			echo "<td>".$fila['N_EXPEDIENTE']."</td>";
			echo "<td>".$fila['CONTEXTO']."</td>";
			echo "<td>".$fila['FECHA_APROBADO']."</td>";
			echo "<td>".$fila['UBICACION']."</td>";
			echo "<td class='center'>
					<div class='hidden-sm hidden-xs action-buttons'>
						<a class='green'
							href='?c=Expediente&a=Crud&id=".$fila['ID_EXPEDIENTE']."'
							class='tooltip-error' data-rel='tooltip' title='Editar'>
							<i class='ace-icon fa fa-pencil bigger-130'></i>
						</a>

						<a class='red'
							onclick='javascript:return confirm('¿Seguro desea eliminar este registro?');'
							href='?c=Expediente&a=Eliminar&id=".$fila['ID_EXPEDIENTE']."'
							class='tooltip-error' data-rel='tooltip' title='Eliminar'>
							<i class='ace-icon fa fa-trash-o bigger-130'></i>
						</a>
					</div>
				  </td>";
			echo "</tr>";
			echo "</tbody>";
		}
		echo "</table> </div>";	
		}else{
			echo "<div class='alert alert-info'>
					<button type='button' class='close' data-dismiss='alert'>
						<i class='ace-icon fa fa-times'></i>
					</button>
					<strong>Aviso!</strong>
					Lo sentimos, no se encontraron registros...
					<br />
				</div>";
		}	
	}	


	function buscar3($fecha1, $fecha2){
		$consulta = new Expediente();
		$filas = $consulta->FiltrarRango($fecha1, $fecha2);

		if (isset($filas)) {
			
		echo "<div> 
			<table id='table' class='table table-striped table-bordered table-hover'>
			<thead>
				<tr>
					<th class='center'>Item</th>
					<th class='center'>N° Expediente</th>
					<th>Descripcion</th>
					<th class='center'>Fecha Aprobacion</th>
					<th class='center'>Ubicacion</th>
					<th class='center'>Nro. Pases</th>
					<th class='center'>Estado</th>
					<th class='center'></th>
				</tr>
			</thead>";
			
			foreach ($filas as $fila) {
			echo "<tbody>";	
			echo "<tr>";
			echo "<td class='center'>".$fila['ID_EXPEDIENTE']."</td>";
			echo "<td class='center'>".$fila['N_EXPEDIENTE']."</td>";
			echo "<td>".$fila['CONTEXTO']."</td>";
			echo "<td class='center'>".$fila['FECHA_APROBADO']."</td>";
			echo "<td>".$fila['UBICACION']."</td>";
			echo "<td class='center'>".$fila['PASES']."</td>";
			echo "<td>".($fila['ESTADO']=='1'?'EN TRAMITE': ($fila['ESTADO']=='2' ? 'ARCHIVADO' : 'CONCLUIDO'))."</td>";
			echo "<td class='center'>
					<div class='hidden-sm hidden-xs action-buttons'>
						<a class='blue'
							href='?c=Trazabilidad&a=Crud&id=".$fila['ID_EXPEDIENTE']."'
							class='tooltip-error' data-rel='tooltip' title='Trazabilidad'>
							<i class='ace-icon fa fa-clone bigger-130'></i>
						</a>
					</div>
				  </td>";
			echo "</tr>";
			echo "</tbody>";
		}
		echo "</table> </div>";	
		}else{
			echo "<div class='alert alert-info'>
					<button type='button' class='close' data-dismiss='alert'>
						<i class='ace-icon fa fa-times'></i>
					</button>
					<strong>Aviso!</strong>
					Lo sentimos, no se encontraron registros...
					<br />
				</div>";
		}	
	}	


	function trazabilidad($criterio){
		$consulta = new Trazabilidad();
		$filas = $consulta->Buscar($criterio);

		if (isset($filas)) {
			
		echo "<div> 
			<table id='table' class='table table-striped table-bordered table-hover'>
			<thead>
				<tr>
					<!-- <th>Modalidad</th> -->
					<th class='center'>N° Expediente</th>
					<th>Descripcion</th>
					<th class='center'>Fecha Aprobacion</th>
					<th>Ubicacion</th>

					<th>Fecha Derivada</th>
					<th>Remitente</th>
					<th>Folio</th>
					<th>Observacion</th>
				</tr>
			</thead>";
			
			foreach ($filas as $fila) {
			echo "<tbody>";	
			echo "<tr>";
			//echo "<td>".$fila['DESCRIPCION']."</td>";
			echo "<td class='center'>".$fila['N_EXPEDIENTE']."</td>";
			echo "<td>".$fila['CONTEXTO']."</td>";
			echo "<td class='center'>".$fila['FECHA_APROBADO']."</td>";
			echo "<td>".$fila['UBICACION']."</td>";
			echo "<td>".$fila['FECHA_DERIVACION']."</td>";
			echo "<td>".$fila['AREA_COMPETENTE']."</td>";
			echo "<td>".$fila['FOLIOS']."</td>";
			echo "<td>".$fila['DERIVACION']."</td>";
			
			echo "</tbody>";
		}
		echo "</table> </div>";	
		}else{
			echo "<div class='alert alert-info'>
					<button type='button' class='close' data-dismiss='alert'>
						<i class='ace-icon fa fa-times'></i>
					</button>
					<strong>Aviso!</strong>
					Lo sentimos, no se encontraron registros...
					<br />
				</div>";
		}	
	}	


	function cargarTrazabilidad(){
		$consulta = new Expediente();
		$filas = $consulta->cargarExpedientes();

		echo "<div> 
			<table id='table' class='table table-striped table-bordered table-hover'>
			<thead>
				<tr>
					<th class='center'>Item</th>
					<th>Modalidad</th>
					<th>N° Expediente</th>
					<th>Descripcion</th>
					<th>Fecha Recibido</th>
					<th>Ubicacion</th>
					<th class='center'></th>
				</tr>
			</thead>
			<tbody>";
			foreach ($filas as $fila) {
				echo "<tr>";
				echo "<td class='center'>".$fila['ID_EXPEDIENTE']."</td>";
				echo "<td>".$fila['DESCRIPCION']."</td>";
				echo "<td>".$fila['N_EXPEDIENTE']."</td>";
				echo "<td>".$fila['CONTEXTO']."</td>";
				echo "<td>".$fila['FECHA_APROBADO']."</td>";
				echo "<td>".$fila['UBICACION']."</td>";
				echo "<td class='center'>
						<div class='hidden-sm hidden-xs action-buttons'>
							<a class='blue'
								href='main_asignar.php'
								class='tooltip-error' data-rel='tooltip' title='Asignar Trazabilidad'>
								<i class='ace-icon fa fa-exchange bigger-130'></i>
							</a>
						</div>
					</td>";
				echo "</tr>";
			}
		echo "</tbody>";	
		echo "</table>";
		echo "</div>";
	}

	function buscarTrazabilidad($nombre){
		$consulta = new Expediente();
		$filas = $consulta->FiltrarExpediente($nombre);

		if (isset($filas)) {
			
		echo "<div> 
			<table id='table' class='table table-striped table-bordered table-hover'>
			<thead>
				<tr>
					<th class='center'>Item</th>
					<th>Modalidad</th>
					<th>N° Expediente</th>
					<th>Descripcion</th>
					<th>Fecha Recibido</th>
					<th>Ubicacion</th>
					<th class='center'></th>
				</tr>
			</thead>";
			
			foreach ($filas as $fila) {
			echo "<tbody>";	
			echo "<tr>";
			echo "<td class='center'>".$fila['ID_EXPEDIENTE']."</td>";
			echo "<td>".$fila['DESCRIPCION']."</td>";
			echo "<td>".$fila['N_EXPEDIENTE']."</td>";
			echo "<td>".$fila['CONTEXTO']."</td>";
			echo "<td>".$fila['FECHA_APROBADO']."</td>";
			echo "<td>".$fila['UBICACION']."</td>";
			echo "<td class='center'>
					<div class='hidden-sm hidden-xs action-buttons'>
						<a class='green'
							href='main_asignar.php'
							class='tooltip-error' data-rel='tooltip' title='Asignar Trazabilidad'>
							<i class='ace-icon fa fa-exchange bigger-130'></i>
						</a>
					</div>
				  </td>";
			echo "</tr>";
			echo "</tbody>";
		}
		echo "</table> </div>";	
		}else{
			echo "<div class='alert alert-info'>
					<button type='button' class='close' data-dismiss='alert'>
						<i class='ace-icon fa fa-times'></i>
					</button>
					<strong>Aviso!</strong>
					Lo sentimos, no se encontraron registros...
					<br />
				</div>";
		}	
	}	
?>