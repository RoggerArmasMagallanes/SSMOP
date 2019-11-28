<!-- ESTO ES ELCONTENIDO DEL BODY DONDE SE FIJARA LOS FORMULARIOS -->
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="principal.php">Principal</a>
                </li>
                <li class="active">Matriz del Proyecto de Obra Pública</li>
            </ul><!-- /.breadcrumb -->
            <!--class="col-sm-12"-->
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">

                    <h3 class="header smaller lighter blue">Matriz de Riesgo
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Formato para Asignar los Riesgo
                        </small>
                    </h3>

                    <div class="row">
                        <?php $matriz = $this->model3->Obtener($_REQUEST['id']); ?>
                        <input type="hidden" name="id_obra" value="<?php echo $matriz->ID_OBRA; ?>" />
                        <div class="col-md-12">
                            <label>Descripcion del Proyecto</label>
                            <div class="input-group col-xs-12">
                                <span class="input-group-addon">
                                    <i class="ace-icon fa fa-building bigger-110"></i>
                                </span>
                                <input type="text" class="form-control search-query"
                                    value="<?php echo $matriz->NOMBRE_OBRA; ?>" readonly />
                            </div>
                        </div>
                    </div>
                    <p></p>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Fecha Inicio</label>
                            <div class="input-group col-xs-12">
                                <span class="input-group-addon">
                                    <i class="ace-icon fa fa-calendar bigger-110"></i>
                                </span>
                                <input type="text" class="form-control search-query"
                                    value="<?php echo $matriz->FECHA_INICIO; ?>" readonly />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label>Fecha Fin</label>
                            <div class="input-group col-xs-12">
                                <span class="input-group-addon">
                                    <i class="ace-icon fa fa-calendar bigger-110"></i>
                                </span>
                                <input type="text" class="form-control search-query"
                                    value="<?php echo $matriz->FECHA_FIN; ?>" readonly />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label>Monto de Inversión</label>
                            <div class="input-group col-xs-12">
                                <span class="input-group-addon">
                                    <i class="ace-icon fa fa-money bigger-110"></i>
                                </span>
                                <input type="text" class="form-control search-query"
                                    value="<?php echo number_format($matriz->MONTO_APTO,2); ?>" readonly />
                            </div>
                        </div>
                    </div>

                    <!-- div.table-responsive -->
                    <!-- div.dataTables_borderWrap -->
                    <div>
                        <table id="table" class="table table-striped table-bordered table-hover">
                            <br>
                            <caption class="center" style="font-size: 15px;"> <B>Matriz de Riesgo</B> </caption>
                            <thead>
                                <tr>
                                    <!-- <th rowspan="2" style="width: 40%">Descripción del Proyecto de Obra</th> -->
                                    <th class="center" colspan="2">Informacion del Riesgo</th>
                                    <th class="center" colspan="4">Estrategia Seleccionada</th>
                                    <th class="center" rowspan="2">Acciones a Realizar</th>
                                    <th class="center" colspan="2">Riesgo Asignado a</th>
                                    <th class="center" rowspan="2"></th>
                                </tr>
                                <tr>
                                    <th class="center">Cod Riesgo</th>
                                    <th class="center">Descripcion</th>

                                    <th class="center">Mitigar</th>
                                    <th class="center">Evitar</th>
                                    <th class="center">Aceptar</th>
                                    <th class="center">Transferir</th>

                                    <th class="center">Entidad</th>
                                    <th class="center">Contratista</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($this->model3->Buscar($_REQUEST['id']) as $r): ?>
                                <tr>
                                    <td class="center"><?php echo $r->N_RIESGO; ?></td>
                                    <td><?php echo $r->DESCRIPCION; ?></td>

                                    <td class="center"><?php echo $r->ESTRATEGIA == 'MITIGAR' ? 'X' : '-'; ?></td>
                                    <td class="center"><?php echo $r->ESTRATEGIA == 'EVITAR' ? 'X' : '-'; ?></td>
                                    <td class="center"><?php echo $r->ESTRATEGIA == 'ACEPTAR' ? 'X' : '-'; ?></td>
                                    <td class="center"><?php echo $r->ESTRATEGIA == 'TRANSFERIR' ? 'X' : '-'; ?></td>

                                    <td class="center"><?php echo $r->ACCIONES; ?></td>

                                    <td class="center"><?php echo $r->ASIGNACION == 'ENTIDAD' ? 'X' : '-'; ?></td>
                                    <td class="center"><?php echo $r->ASIGNACION == 'CONTRATISTA' ? 'X' : '-'; ?></td>

                                    <td>
                                        <a class="red"
                                            onclick="javascript:return confirm('¿Seguro desea eliminar este registro?');"
                                            href="?c=Movimiento&a=Eliminar&id=<?php echo $r->ID_MATRIZ; ?>"
                                            class="tooltip-error" data-rel="tooltip" title="Eliminar">
                                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                        </a>
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

<script>
$(document).ready(function() {
    $("#frm-alumno").submit(function() {
        return $(this).validate();
    });
})
</script>