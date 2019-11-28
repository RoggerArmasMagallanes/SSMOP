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
            <!--class="col-sm-12"-->
        </div>

        <div class="page-content">

            <div class="row">
                <div class="col-xs-12">
                    <h3 class="header smaller lighter blue"><a href="?c=Representante">Representantes</a>
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            <?php echo $representante->ID_REPRESENTANTE!= null ? 'Editar Registro' : 'Nuevo Registro'; ?>
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
                                        <form id="frm-alumno" action="?c=Representante&a=Guardar" method="post" enctype="multipart/form-data">
                                            <fieldset>
                                                <div class="row">
                                                    <input type="hidden" name="id" value="<?php echo $representante->ID_REPRESENTANTE; ?>" />
                                                    
                                                    <div class="col-md-4">
                                                    <label>N° DNI</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-asterisk bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control search-query" id="rdni" value="<?php echo $representante->N_DNI; ?>" placeholder="Buscar DNI" />
                                                            <input type="hidden" name="id_persona" id="cod_persona" value="<?php echo $representante->ID_PERSONA; ?>"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-8">
                                                    <label>Datos del Representante </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-user bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control search-query" value="<?php echo $representante->DATOS; ?>" id="datos_personas" readonly placeholder="Datos del Representante" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <p></p>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>N° RUC </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-asterisk bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control search-query" value="<?php echo $representante->N_RUC; ?>" id="nruc" placeholder="Buscar RUC" />
                                                            <input type="hidden" class="form-control search-query" value="<?php echo $representante->ID_ENTIDAD; ?>" id="cod_entidad" name="id_entidad" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-8">
                                                    <label>Datos de la Empresa </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-user bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control search-query" value="<?php echo $representante->RAZON_SOCIAL; ?>" id="razon_social"  readonly placeholder="Nombre de la Empresa" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <p></p>
                                                
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Cargo </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-briefcase bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control" value="<?php echo $representante->CARGO_ENTIDAD; ?>" name="cargo" placeholder="Ingrese el Cargo que desempeña" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Nacionalidad </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-flag bigger-100"></i>
                                                            </span>
                                                            <input type="text" class="form-control" value="<?php echo $representante->NACIONALIDAD; ?>" name="nacionalidad" placeholder="Ingrese su Nacionalidad" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <div class="form-actions center">
                                                <button  class="btn btn-sm btn-success" onclick="javascript:return confirm('¿Seguro desea Resgitrar este registro?');" >
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
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script src="assets/scripts/comprobante.js"></script>