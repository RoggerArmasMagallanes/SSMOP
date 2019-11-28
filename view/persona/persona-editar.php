<!-- ESTO ES ELCONTENIDO DEL BODY DONDE SE FIJARA LOS FORMULARIOS -->
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="principal.php">Principal</a>
                </li>
                <li class="active">Banco de Datos de Contribuyentes</li>
            </ul><!-- /.breadcrumb -->
            <!--class="col-sm-12"-->
        </div>

        <div class="page-content">

            <div class="row">
                <div class="col-xs-12">
                    <h3 class="header smaller lighter blue"><a href="?c=Persona">Personas</a>
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            <?php echo $persona->ID_PERSONA != null ? 'Editar Registro' : 'Nuevo Registro'; ?>
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
                                        <form id="frm-alumno" action="?c=Persona&a=Guardar" method="post" enctype="multipart/form-data">
                                            <fieldset>
                                                <div class="row">
                                                    <input type="hidden" name="id" value="<?php echo $persona->ID_PERSONA; ?>" />
                                                    
                                                    <div class="col-md-4">
                                                    <label>Apellido Paterno</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-user bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control search-query" value="<?php echo $persona->APE_PATERNO; ?>" name="ape_paterno" placeholder="Ingrese apellido paterno" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                    <label>Apellido Materno </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-user bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control search-query" value="<?php echo $persona->APE_MATERNO; ?>" name="ape_materno" placeholder="Ingrese Apellido materno" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                    <label>Nombres </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-user bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control search-query" value="<?php echo $persona->NOMBRES; ?>" name="nombres" placeholder="Ingrese Nombres" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <p></p>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>N° DNI </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-asterisk bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control search-query" value="<?php echo $persona->N_DNI; ?>" name="n_dni" placeholder="Ingrese DNI" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Género </label>
                                                        <div class="control-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input name="genero" type="radio" value="MASCULINO" <?php if ($persona->GENERO == 'MASCULINO'){echo 'checked="checked"';} ?> class="ace" />
                                                                    <span class="lbl"> Masculino</span>
                                                                </label>

                                                                <label>
                                                                    <input name="genero" type="radio" value="FEMENINO" <?php if ($persona->GENERO == 'FEMENINO'){echo 'checked="checked"';} ?> class="ace" />
                                                                    <span class="lbl"> Femenino</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                    <label>Fecha Nacimiento</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-calendar bigger-110"></i>
                                                            </span>
                                                            <input type="date" class="form-control date-picker" value="<?php echo $persona->FECHA_NAC; ?>" name="fecha_nac"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p></p>
                                                
                                                <div class="row">
                                                   <div class="col-md-4">
                                                        <label>Correo Electrónico </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-envelope bigger-110"></i>
                                                            </span>
                                                            <input type="email" class="form-control" value="<?php echo $persona->CORREO; ?>" name="correo" placeholder="Ingrese Correo Electrónico" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Teléfono </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-phone bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control" value="<?php echo $persona->TELEFONO; ?>" name="telefono" placeholder="Ingrese Teléfono" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Celular </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-mobile bigger-140"></i>
                                                            </span>
                                                            <input type="text" class="form-control" value="<?php echo $persona->CELULAR; ?>" name="celular" placeholder="Ingrese Celular" />
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