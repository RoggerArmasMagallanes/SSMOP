<!-- ESTO ES ELCONTENIDO DEL BODY DONDE SE FIJARA LOS FORMULARIOS -->
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="principal.php">Principal</a>
                </li>
                <li class="active">Obras Públicas en Ejecución</li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">

                    <h3 class="header smaller lighter blue">Banco de Obras
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Asignación de Supervisión 
                        </small>
                    </h3>
                   
                    <!-- div.table-responsive -->
                    <!-- div.dataTables_borderWrap -->
                    <div>
                        <table id="table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th rowspan="2">Item</th>
                                <th rowspan="2" style="width: 40%">Descripción del Proyecto de Obra</th>
                                <th class="center" colspan="2">Cronograma de Supervisión</th>
                                <th class="center" colspan="3">Observaciones de Supervisión</th>
                                <th class="center" rowspan="2" style="width: 5%">Nro. Particpantes</th>
                                <th class="center" rowspan="2">Opciones</th>
                            </tr>
                            <tr>
                                <th class="center">Fecha Inicial</th>
                                <th class="center">Fecha Final</th>
                                <th class="center">Notificación</th>
                                <th class="center">Estado</th>
                                <th class="center">Tipo</th>
                            </tr>
                        </thead>    
                            
                        <!-- <thead>
                                <tr>
                                    <th class="center">Item</th>
                                    <th>Descripción del Proyecto de Obra</th>
                                    <th class="center">Fecha Inicio</th>
                                    <th class="center">Fecha Fin</th>
                                    <th class="center">Monto Inversión</th>
                                    <th class="center">Etapa</th>
                                    <th>Asignar</th>
                                </tr>
                            </thead>
                        -->
                            <tbody>
                                <?php foreach($this->model->Listar() as $r): ?>
                                <tr>
                                    <td class="center"><?php echo $r->ID_MOBRA; ?></td>
                                    <td><?php echo $r->NOMBRE_OBRA; ?></td>
                                    <td class="center"><?php echo $r->FECHA_INICIO; ?></td>
                                    <td class="center"><?php echo $r->FECHA_FIN; ?></td>
                                    <td class="center"><?php echo $r->NOTIFICACION  == 'P' ? 'PERSONAL' : 'ELECTRONICA'; ?></td>
                                    <td class="center"><?php echo $r->ESTADO_NOTIFICAR== 'N' ? 'NO OPERATIVO' : 'OPERATIVO' ; ?></td>
                                    <td class="center"><?php echo $r->TIPO == 'R' ? 'REGULAR': 'ESPECIAL'; ?></td>
                                    <td class="center"><?php echo $r->INTEGRANTES; ?></td>
                                    <td class="center">
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue"
                                                href="?c=Inspeccion&a=Crud&id=<?php echo $r->ID_MOBRA; ?>"
                                                class="tooltip-error" data-rel="tooltip" title="Asignar Personal">
                                                <i class="ace-icon fa fa-clipboard bigger-130"></i>
                                            </a>
                                            <a class="blue"
                                                href="?c=Participante&a=Crud&id=<?php echo $r->ID_MOBRA; ?>"
                                                class="tooltip-error" data-rel="tooltip" title="Ver Detalle">
                                                <i class="ace-icon fa fa-users bigger-130"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->
<!-- AQUI TERMINA EL CONTENIDO DEL BODY (FORMULARIOS) -->
