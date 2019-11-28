<!-- ESTO ES ELCONTENIDO DEL BODY DONDE SE FIJARA LOS FORMULARIOS -->
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="principal.php">Principal</a>
                </li>
                <li class="active">Solicitudes</li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">

                    <h3 class="header smaller lighter blue">Solicitudes
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Consultas de solicitudes registradas
                        </small>
                    </h3>

                    <div class="table-header">
                        <i class="ace-icon fa fa-hand-o-right"></i>
                        Realice búsquedas para obtener los resultados
                    </div><br>

                    <div class="clearfix">
                        <div class="pull-right tableTools-container">
                            <button onclick="location.href='?c=Solicitud&a=Crud';"
                                class="btn btn-white btn-info btn-bold pull-right">
                                <i class="fas fa fa-plus-circle bigger-120 blue"></i>
                                Agregar
                            </button>
                        </div>
                    </div>

                    <!-- div.table-responsive -->
                    <!-- div.dataTables_borderWrap -->
                   
                    <div>
                        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="center">Item</th>
                                    <th>Razon Social</th>
                                    <th>
                                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                        Fecha Ingreso
                                    </th>
                                    <th>N° Serie</th>
                                    <th>Contexto</th>
                                    <th>Tipo Solicitud</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($this->model->Listar() as $r): ?>
                                <tr>
                                    <td class="center"><?php echo $r->ID_SOLICITUD; ?></td>
                                    <td><?php echo $r->RAZON_SOCIAL; ?></td>
                                    <td><?php echo $r->FECHA_ING; ?></td>
                                    <td><?php echo $r->SERIE_SOL; ?></td>
                                    <td><?php echo $r->CONTEXTO_SOL; ?></td>
                                    <td><?php echo $r->DESCRIPCION; ?></td>
                                    <td class="center">
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="green"
                                                href="?c=Solicitud&a=Crud&id=<?php echo $r->ID_SOLICITUD; ?>"
                                                class="tooltip-error" data-rel="tooltip" title="Editar">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red"
                                                onclick="javascript:return confirm('¿Seguro desea eliminar este registro?');"
                                                href="?c=Solicitud&a=Eliminar&id=<?php echo $r->ID_SOLICITUD; ?>"
                                                class="tooltip-error" data-rel="tooltip" title="Eliminar">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
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