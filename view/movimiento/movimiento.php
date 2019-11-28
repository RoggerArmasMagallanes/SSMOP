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
                            Seguimiento de Obras Públicas
                        </small>
                    </h3>


                    <div class="table-header">
                        <i class="ace-icon fa fa-hand-o-right"></i>
                        Realize el procedimiento de asignacion haciendo click en las opciones de la última columna
                    </div>
                    

                    <br>
                    <!--
                    <div class="clearfix">
                        <div class="pull-right tableTools-container">
                            <button onclick="location.href='?c=Movimiento&a=Crud';"
                                class="btn btn-white btn-info btn-bold pull-right">
                                <i class="fas fa fa-plus-circle bigger-120 blue"></i>
                                Agregar
                            </button>
                        </div>
                    </div>
                    -->
                    
                    <!-- div.table-responsive -->
                    <!-- div.dataTables_borderWrap -->
                    <div>
                        <table id="table" class="table table-striped table-bordered table-hover">
                            <thead>
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

                            <tbody>
                                <?php foreach($this->model1->Listar() as $r): ?>
                                <tr>
                                    <td class="center"><?php echo $r->ID_OBRA; ?></td>
                                    <td><?php echo $r->NOMBRE_OBRA; ?></td>
                                    <td class="center"><?php echo $r->FECHA_INICIO; ?></td>
                                    <td><?php echo $r->FECHA_FIN; ?></td>
                                    <td class="center"><?php echo number_format($r->MONTO_APTO,2); ?></td>
                                    <td class="center"><?php echo $r->DESCRIPCION; ?></td>
                                    <td class="center">
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue"
                                                href="?c=Movimiento&a=Crud&id=<?php echo $r->ID_OBRA; ?>"
                                                class="tooltip-error" data-rel="tooltip" title="Ficha Supervisión">
                                                <i class="ace-icon fa fa-external-link bigger-130"></i>
                                            </a>
                                        </div>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue"
                                                href="?c=Movimiento&a=Crud1&id=<?php echo $r->ID_OBRA; ?>"
                                                class="tooltip-error" data-rel="tooltip" title="Matriz Riesgo">
                                                <i class="ace-icon fa fa-cubes bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue"
                                                href="?c=Movimiento&a=Crud2&id=<?php echo $r->ID_OBRA; ?>"
                                                class="tooltip-error" data-rel="tooltip" title="Ver Matriz">
                                                <i class="ace-icon fa  fa-eye  bigger-130"></i>
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
