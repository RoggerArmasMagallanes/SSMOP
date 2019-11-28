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
            <!--class="col-sm-12"-->
        </div>

        <div class="page-content">

            <div class="row">
                <div class="col-xs-12">
                    <h3 class="header smaller lighter blue"><a href="?c=Movimiento">Asignar Supervisión</a>
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                           Nuevo Registro
                        </small>
                    </h3>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="widget-box">
                                <div class="widget-header">
                                    <h4 class="widget-title">Registro</h4>
                                </div>

                                <div class="widget-body">
                                    <div class="widget-main no-padding">
                                        <form id="frm-alumno" action="?c=Movimiento&a=Guardar" method="post" enctype="multipart/form-data">
                                            <fieldset>
                                                <div class="row">
                                                    <input type="hidden" name="id_obra" value="<?php echo $movi->ID_OBRA; ?>" />
                                                    
                                                    <div class="col-md-8">
                                                    <label>Descripcion del Proyecto</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-building bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control search-query" value="<?php echo $movi->NOMBRE_OBRA; ?>" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                    <label>Monto Inversión </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-money bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control search-query" value="<?php echo number_format($movi->MONTO_APTO,2); ?>" readonly />
                                                        </div>
                                                    </div>
                                                </div>
                                                <p></p>
                                                
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Notificación </label>
                                                        <div class="control-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input name="notificacion" type="radio" value="P" class="ace" />
                                                                    <span class="lbl"> Personal</span>
                                                                </label>

                                                                <label>
                                                                    <input name="notificacion" type="radio" value="E" class="ace" />
                                                                    <span class="lbl"> Electrónica</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Estado </label>
                                                        <div class="control-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input name="enotificar" type="radio" value="NO" class="ace" />
                                                                    <span class="lbl"> No Operativo</span>
                                                                </label>

                                                                <label>
                                                                    <input name="enotificar" type="radio" value="O" class="ace" />
                                                                    <span class="lbl"> Operativo</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Tipo </label>
                                                        <div class="control-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input name="tipo" type="radio" value="R" class="ace" />
                                                                    <span class="lbl"> Regular</span>
                                                                </label>

                                                                <label>
                                                                    <input name="tipo" type="radio" value="E" class="ace" />
                                                                    <span class="lbl"> Especial</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p></p>
                                                
                                                <div class="row">
                                                    <div class="col-md-12">
                                                    <label>Observaciones de la Notificación</label>
                                                        <div class="input-group col-xs-12">
                                                            <textarea class="form-control" id="form-field-8" rows="3" name="observacion" placeholder="Describa las observaciones"></textarea>
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
                                                            <input type="date" class="form-control date-picker" name="fecha_ini"/>
                                                        </div>
                                                    </div>

                                                   <div class="col-md-4">
                                                        <label>Fecha Fin</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-calendar bigger-110"></i>
                                                            </span>
                                                            <input type="date" class="form-control date-picker" name="fecha_fin"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Motivo de Visitas </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-globe bigger-110"></i>
                                                            </span>
                                                            <input type="hidden" class="form-control" name="obs" value="Ninguna" />
                                                            <input type="text" class="form-control" name="motivo" placeholder="Motivo de visitas" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <div class="form-actions center">
                                                <button  class="btn btn-sm btn-success">
                                                    Guardar Datos
                                                    <i class="ace-icon fa fa-floppy-o icon-on-right bigger-110"></i>
                                              
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- div.table-responsive -->
                    <!-- div.dataTables_borderWrap -->
                </div>
            </div>
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->
<!-- AQUI TERMINA EL CONTENIDO DEL BODY (FORMULARIOS) -->

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>