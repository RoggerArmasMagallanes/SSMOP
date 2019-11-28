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
            <!--class="col-sm-12"-->
        </div>

        <div class="page-content">

            <div class="row">
                <div class="col-xs-12">
                    <h3 class="header smaller lighter blue"><a href="?c=Obra">Obras</a>
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            <?php echo $obra->ID_OBRA != null ? 'Editar Registro' : 'Nuevo Registro'; ?>
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
                                        <form id="frm-alumno" action="?c=Obra&a=Guardar" method="post" enctype="multipart/form-data">
                                            <fieldset>
                                              
                                                <div class="row">
                                                    <input type="hidden" name="id" value="<?php echo $obra->ID_OBRA; ?>" />
                                                                                                        
                                                    <div class="col-md-4">
                                                        <label>N° de Expediente</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-search bigger-110"></i>
                                                            </span>
                                                            <input type="hidden" id="codigo" name="id_expediente" value="<?php echo $obra->ID_EXPEDIENTE; ?>" />
                                                            <input autocomplete="off" id="expediente" class="form-control" type="text" value="<?php echo $obra->N_EXPEDIENTE; ?>" placeholder="Buscar N° Expediente" />                                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Fecha Ingreso</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-calendar bigger-110"></i>
                                                            </span>
                                                            <input id="fecha" class="form-control" type="date" value="<?php echo $obra->FECHA_APROBADO; ?>" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Monto Inversión Inicial</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-suitcase bigger-110"></i>
                                                            </span>
                                                            <input id="monto" class="form-control" type="text" value="<?php echo $obra->MONTO_APROBADO; ?>" readonly />
                                                        </div>
                                                    </div>
                                                </div>
                                                <p></p>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Descripcion del Expediente</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-building bigger-110"></i>
                                                            </span>
                                                            <input id="contexto" class="form-control" type="text" value="<?php echo $obra->CONTEXTO; ?>" readonly />
                                                        </div>
                                                    </div>
                                                </div>
                                                <p></p>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Nombre de la Obra</label>
                                                        <div class="input-group col-xs-12">
                                                            <textarea class="form-control" rows="2" name="nombre_obra"><?php echo $obra->NOMBRE_OBRA; ?></textarea>
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
                                                            <input class="form-control" name="fecha_inicio" type="date" value="<?php echo $obra->FECHA_INICIO; ?>" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Fecha Fin</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-calendar bigger-110"></i>
                                                            </span>
                                                            <input class="form-control" name="fecha_fin" type="date" value="<?php echo $obra->FECHA_FIN; ?>" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Total Días</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-globe bigger-110"></i>
                                                            </span>
                                                            <input class="form-control" name="total_dias" type="text" value="<?php echo $obra->TOTAL_DIAS; ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <p></p>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Monto Aprobado</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-money bigger-110"></i>
                                                            </span>
                                                            <input class="form-control" name="monto_apto" type="TEXT" value="<?php echo $obra->MONTO_APTO; ?>" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Detalle Financiamiento</label>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input name="financia1" class="ace ace-checkbox-2" value="N" type="checkbox" <?php if ($obra->FINANCIA_UNO == 'N'){echo  'checked="checked"';} ?> />
                                                                <span class="lbl">FONIE</span>
                                                            </label>
                                                            <label>
                                                                <input name="financia2" class="ace ace-checkbox-2" value="N" type="checkbox" <?php if ($obra->FINANCIA_DOS == 'N'){echo 'checked="checked"';} ?> />
                                                                <span class="lbl">Otra Entidad</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Etapa de Proceso</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-map bigger-110"></i>
                                                            </span>
                                                            <select name="id_tipoejecucion" class="form-control" id="form-field-select-1" data-placeholder="Choose a State...">
                                                                <?php 
                                                                    foreach ($this->model->Listar_TipoEjecucion() as $r):
                                                                        $s = ($obra->DESCRIPCION == $r->DESCRIPCION ? 'selected' : '');
                                                                        echo "<option value='".$r->ID_TIPO_EJECUCION."' ".$s.">".$r->DESCRIPCION."</option>";
                                                                    endforeach;
                                                                ?>
                                                            </select>
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

<script type="text/javascript">
        $('input[type="checkbox"]').change(function(){
  $(this).val(Number(this));
  
  console.log($(this).val());
});
    </script>
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script src="assets/scripts/comprobante.js"></script>

