<!-- ESTO ES ELCONTENIDO DEL BODY DONDE SE FIJARA LOS FORMULARIOS -->
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="principal.php">Principal</a>
                </li>
                <li class="active">Obras</li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">

                    <h3 class="header smaller lighter blue">Obras
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Consultas de Obras
                        </small>
                    </h3>

                    <div class="table-header">
                        <i class="ace-icon fa fa-hand-o-right"></i>
                        Realice búsquedas para obtener los resultados
                    </div><br>

                    <div class="clearfix">
                        <div class="pull-right tableTools-container">
                            <button onclick="location.href='?c=Obra&a=Crud';"
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
                                    <th>Descripcion del Proyecto de Obra</th>
                                    <th class="center">Fecha Inicio</th>
                                    <th class="center">Fecha Fin</th>
                                    <th class="center">Monto Inversión</th>
                                    <th class="center">Etapa</th>
                                    <th class="center"></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($this->model->Listar() as $r): ?>
                                <tr>
                                    <td class="center"><?php echo $r->ID_OBRA; ?></td>
                                    <td><?php echo $r->NOMBRE_OBRA; ?></td>
                                    <td class="center"><?php echo $r->FECHA_INICIO; ?></td>
                                    <td class="center"><?php echo $r->FECHA_FIN; ?></td>
                                    <td class="center"><?php echo $r->MONTO_APTO; ?></td>
                                    <td class="center"><?php echo $r->DESCRIPCION; ?></td>
                                    <td class="center">
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="green"
                                                href="?c=Obra&a=Crud&id=<?php echo $r->ID_OBRA; ?>"
                                                class="tooltip-error" data-rel="tooltip" title="Editar">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red"
                                                onclick="javascript:return confirm('¿Seguro desea eliminar este registro?');"
                                                href="?c=Obra&a=Eliminar&id=<?php echo $r->ID_OBRA; ?>"
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