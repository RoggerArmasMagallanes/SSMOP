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
            <!--class="col-sm-12"-->
        </div>

        <div class="page-content">

            <div class="row">
                <div class="col-xs-12">
                    <h3 class="header smaller lighter blue"><a href="?c=Solicitud">Solicitudes</a>
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            <?php echo $solicitud->ID_SOLICITUD != null ? 'Editar Registro' : 'Nuevo Registro'; ?>
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
                                        <form id="frm-alumno" action="?c=Solicitud&a=Guardar" method="post" enctype="multipart/form-data">
                                            <fieldset>

                                            <div class="row">
                                                    <input type="hidden" name="id" value="<?php echo $solicitud->ID_SOLICITUD; ?>" />
                                                                                                        
                                                    <div class="col-md-3">
                                                        <label>N° DNI del Representante</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-search bigger-110"></i>
                                                            </span>
                                                            <input autocomplete="off" id="dni" class="form-control" type="text" value="<?php echo $solicitud->N_DNI; ?>" placeholder="Buscar N° DNI" />                                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5">
                                                        <label>Representante Legal</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-user bigger-110"></i>
                                                            </span>
                                                            <input id="persona" class="form-control" type="text" value="<?php echo $solicitud->PERSONAS; ?>" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Cargo Ocupación</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-suitcase bigger-110"></i>
                                                            </span>
                                                            <input id="cod_representante" name="id_representante" class="form-control" type="hidden"  value="<?php echo $solicitud->ID_REPRESENTANTE; ?>" />
                                                            <input id="cargo" class="form-control" type="text" value="<?php echo $solicitud->CARGO_ENTIDAD; ?>" readonly />
                                                        </div>
                                                    </div>
                                                </div>
                                                <p></p>

                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <label>Razón Social de la Empresa</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-building bigger-110"></i>
                                                            </span>
                                                            <input id="razon" class="form-control" type="text" value="<?php echo $solicitud->RAZON_SOCIAL; ?>" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>N° RUC</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-hashtag bigger-110"></i>
                                                            </span>
                                                            <input id="ruc" class="form-control" value="<?php echo $solicitud->N_RUC; ?>" type="text" readonly />
                                                        </div>
                                                    </div>
                                                </div>
                                                <p></p>


                                                <div class="row">
                                                    <div class="col-md-4">
                                                    <label>Fecha Ingreso</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-calendar bigger-110"></i>
                                                            </span>
                                                            <input type="date" class="form-control date-picker" value="<?php echo $solicitud->FECHA_ING; ?>" name="fecha_ing"/>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                    <label>N° de Serie</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-asterisk bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control search-query" value="<?php echo $solicitud->SERIE_SOL; ?>" name="serie_sol" placeholder="____-_____" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                    <label>Tipo de Solicitud</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-book bigger-110"></i>
                                                            </span>
                                                            <select name="id_tipo" class="form-control" id="form-field-select-1">
                                                                <?php 
                                                                    foreach ($this->model->Listar_Tipos() as $r):
                                                                        $s = ($solicitud->DESCRIPCION == $r->DESCRIPCION ? 'selected' : '');
                                                                        echo "<option value='".$r->ID_TIPO."' ".$s.">".$r->DESCRIPCION."</option>";
                                                                    endforeach;
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p></p>

                                                
                                                
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div space></div>
                                                        <label>Descripción del asunto</label>
                                                        <div class="input-group col-xs-12">
                                                        <textarea class="form-control" id="form-field-8" rows="5" name="contexto_sol" placeholder="Escriba el asunto de la solicictud"><?php echo $solicitud->CONTEXTO_SOL; ?></textarea>
                                                        </div>
                                                        <label></label>
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
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script src="assets/scripts/comprobante.js"></script>