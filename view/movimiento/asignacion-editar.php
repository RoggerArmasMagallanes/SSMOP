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
                                        <form id="frm-alumno" action="?c=Movimiento&a=Guardar1" method="post" enctype="multipart/form-data">
                                            <fieldset>
                                                <div class="row">
                                                    <input type="hidden" name="id_mobra" value="<?php echo $movi->ID_OBRA; ?>" />
                                                    
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
                                                    <div class="col-md-8">
                                                    <label>Datos Participantes</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-user bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control date-picker" name="participante" placeholder="Datos Personales"/>
                                                        </div>
                                                    </div>

                                                   <div class="col-md-4">
                                                        <label>N° DNI</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-hashtag bigger-110"></i>
                                                            </span>
                                                            <input type="text" maxlength="8" class="form-control date-picker" name="dni" placeholder="Nro. DNI"/>
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