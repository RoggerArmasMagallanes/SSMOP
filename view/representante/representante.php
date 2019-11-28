<!-- ESTO ES ELCONTENIDO DEL BODY DONDE SE FIJARA LOS FORMULARIOS -->
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="principal.php">Principal</a>
                </li>
                <li class="active">Banco de Datos de Representantes</li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">

                    <h3 class="header smaller lighter blue">Representantes
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Consultas de Representantes registrados
                        </small>
                    </h3>

                    <div class="table-header">
                        <i class="ace-icon fa fa-hand-o-right"></i>
                        Realice búsquedas para obtener los resultados
                    </div>
                    <br>
                    <div class="clearfix">
                        <div class="pull-right tableTools-container">
                            <button onclick="location.href='?c=Representante&a=Crud';"
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
                                    <th>Datos Personales</th>
                                    <th class="center">N° DNI</th>
                                    <th>Dato de Empresa</th>
                                    <th class="center">N° RUC</th>
                                    <th class="center">Cargo</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($this->model->Listar() as $r): ?>
                                <tr>
                                    <td class="center"><?php echo $r->ID_REPRESENTANTE; ?></td>
                                    <td><?php echo $r->DATOS; ?></td>
                                    <td class="center"><?php echo $r->N_DNI; ?></td>
                                    <td><?php echo $r->RAZON_SOCIAL; ?></td>
                                    <td class="center"><?php echo $r->N_RUC; ?></td>
                                    <td><?php echo $r->CARGO_ENTIDAD; ?></td>
                                    <td class="center">
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="green"
                                                href="?c=Representante&a=Crud&id=<?php echo $r->ID_REPRESENTANTE; ?>"
                                                class="tooltip-error" data-rel="tooltip" title="Editar">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red"
                                                onclick="javascript:return confirm('¿Seguro desea eliminar este registro?');"
                                                href="?c=Representante&a=Eliminar&id=<?php echo $r->ID_REPRESENTANTE; ?>"
                                                class="tooltip-error" data-rel="tooltip" title="Eliminar">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>
                                    </td>
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
