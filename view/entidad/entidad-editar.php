<!-- ESTO ES ELCONTENIDO DEL BODY DONDE SE FIJARA LOS FORMULARIOS -->
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="principal.php">Principal</a>
                </li>
                <li class="active">Banco de Datos de Entidades</li>
            </ul><!-- /.breadcrumb -->
            <!--class="col-sm-12"-->
        </div>

        <div class="page-content">

            <div class="row">
                <div class="col-xs-12">
                    <h3 class="header smaller lighter blue"><a href="?c=Entidad">Entidades</a>
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            <?php echo $entidad->ID_ENTIDAD != null ? 'Editar Registro' : 'Nuevo Registro'; ?>
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
                                        <form id="frm-alumno" action="?c=Entidad&a=Guardar" method="post" enctype="multipart/form-data">
                                            <fieldset>
                                                <div class="row">
                                                    <input type="hidden" name="id" value="<?php echo $entidad->ID_ENTIDAD; ?>" />
                                                    
                                                    <!-- ROGGER NO OLVIDAR QUE AQUÍ ES PAR AHACER BÚSQUEDAS CON JSON - > GRACIAS 
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Cliente</label>
                                                            <input autocomplete="off" id="cliente" class="form-control" type="text" placeholder="Ingrese el nombre del cliente" />
                                                        </div>
                                                    </div>
                                                    -->

                                                    <div class="col-md-3">
                                                    <label>N° RUC</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-user bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control" value="<?php echo $entidad->N_RUC; ?>" name="n_ruc" placeholder="Ingrese N° RUC" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                    <label>Razón Social </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-user bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control search-query" value="<?php echo $entidad->RAZON_SOCIAL; ?>" name="razon_social" placeholder="Ingrese Razón Social" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                    <label>Tipo Entidad </label>
                                                    <div class="control-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input name="tipo_entidad" type="radio" value="PUBLICA" <?php if ($entidad->TIPO_ENTIDAD == 'PUBLICA'){echo 'checked="checked"';} ?> class="ace" />
                                                                    <span class="lbl"> Pública</span>
                                                                </label>

                                                                <label>
                                                                    <input name="tipo_entidad" type="radio" value="PRIVADA" <?php if ($entidad->TIPO_ENTIDAD == 'PRIVADA'){echo 'checked="checked"';} ?> class="ace" />
                                                                    <span class="lbl"> Privada</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <p></p>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Dirección </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-asterisk bigger-110"></i>
                                                            </span>
                                                            <input id="cliente_id" type="hidden" value="0" />
                                                            <input  id="direccion" type="text" class="form-control" value="<?php echo $entidad->DIRECCION; ?>" name="direccion" placeholder="Ingrese Dirección" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <p></p>
                                                
                                                <div class="row">
                                                   <div class="col-md-6">
                                                        <label>Correo Electrónico </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-envelope bigger-110"></i>
                                                            </span>
                                                            <input type="email" class="form-control" value="<?php echo $entidad->CORREO; ?>" name="correo" placeholder="Ingrese Correo Electrónico" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label>Teléfono </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-phone bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control" value="<?php echo $entidad->TELEFONO; ?>" name="telefono" placeholder="Ingrese Teléfono" />
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
<script src="assets/scripts/comprobante.js"></script>