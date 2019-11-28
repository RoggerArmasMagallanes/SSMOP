<!-- ESTO ES ELCONTENIDO DEL BODY DONDE SE FIJARA LOS FORMULARIOS -->
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="principal.php">Principal</a>
                </li>
                <li class="active">Expedientes Técnicos</li>
            </ul><!-- /.breadcrumb -->
            <!--class="col-sm-12"-->
        </div>

        <div class="page-content">

            <div class="row">
                <div class="col-xs-12">
                    <h3 class="header smaller lighter blue"><a href="?c=Expediente">Expedientes Técnicos</a>
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            <?php echo $expediente->ID_EXPEDIENTE != null ? 'Editar Registro' : 'Nuevo Registro'; ?>
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
                                        <form id="frm-alumno" action="?c=Expediente&a=Guardar" method="post" enctype="multipart/form-data">
                                            <fieldset>
                                            <div class="row">
                                                    <input type="hidden" name="id" value="<?php echo $expediente->ID_EXPEDIENTE; ?>" />
                                                                                                        
                                                    <div class="col-md-3">
                                                        <label>N° DNI del Representante</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-search bigger-110"></i>
                                                            </span>
                                                            <input autocomplete="off" id="dni" class="form-control" type="text" value="<?php echo $expediente->N_DNI; ?>" placeholder="Buscar N° DNI" />                                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5">
                                                        <label>Representante Legal</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-user bigger-110"></i>
                                                            </span>
                                                            <input id="persona" class="form-control" type="text" value="<?php echo $expediente->REPRESENTANTE; ?>" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Cargo Ocupación</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-suitcase bigger-110"></i>
                                                            </span>
                                                            <input id="cod_representante" name="id_representante" class="form-control" type="hidden"  value="<?php echo $expediente->ID_REPRESENTANTE; ?>" />
                                                            <input id="cargo" class="form-control" type="text" value="<?php echo $expediente->CARGO_ENTIDAD; ?>" readonly />
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
                                                            <input id="razon" class="form-control" type="text" value="<?php echo $expediente->RAZON_SOCIAL; ?>" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>N° RUC</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-hashtag bigger-110"></i>
                                                            </span>
                                                            <input id="ruc" class="form-control" value="<?php echo $expediente->N_RUC; ?>" type="text" readonly />
                                                        </div>
                                                    </div>
                                                </div>
                                                <p></p>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Tipo de Modalidad</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-user bigger-110"></i>
                                                            </span>
                                                            <select name="id_modalidad" class="form-control" id="form-field-select-1">
                                                                <?php 
                                                                    foreach ($this->model->Listar_Modalidad() as $r):
                                                                        $s = ($expediente->DESCRIPCION == $r->DESCRIPCION ? 'selected' : '');
                                                                        echo "<option value='".$r->ID_MODALIDAD."' ".$s.">".$r->DESCRIPCION."</option>";
                                                                    endforeach;
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label>Usuario Responsable</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-user bigger-110"></i>
                                                            </span>
                                                            <select name="id_usuario" class="form-control" id="form-field-select-1">
                                                                <?php 
                                                                    foreach ($this->model->Listar_Usuario() as $r):
                                                                        $s = ($expediente->USUARIO == $r->FUNCIONARIO ? 'selected' : '');
                                                                        echo "<option value='".$r->ID_USUARIO."' ".$s.">".$r->FUNCIONARIO."</option>";
                                                                    endforeach;
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p></p>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                    <label>N° Expediente</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-hashtag bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control" value="<?php echo $expediente->N_EXPEDIENTE; ?>" id="ssn" name="n_expediente" placeholder="Ingrese N° del Expediente" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                    <label>Fecha Aprobado </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-calendar bigger-110"></i>
                                                            </span>
                                                            <input type="date" class="form-control search-query" value="<?php echo $expediente->FECHA_APROBADO; ?>" name="fecha_aprobado"  />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label>Monto Aprobado </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-money bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control" value="<?php echo $expediente->MONTO_APROBADO; ?>" name="monto_aprobado" placeholder="Ingrese Monto S/." id="moneda_nac" onkeypress="return filterFloat(event,this);" onpaste="return false"  />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label>Observación </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-eye bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control" value="<?php echo $expediente->OBSERVACION; ?>" name="observacion" placeholder="Ingrese Observación" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <p></p>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div space></div>
                                                        <label>Descripción</label>
                                                        <div class="input-group col-xs-12">
                                                        <textarea class="form-control" id="form-field-8" rows="3" name="contexto" placeholder="Escriba la descripcion del expediente"><?php echo $expediente->CONTEXTO; ?></textarea>
                                                        </div>
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <p></p>
                                                
                                                <div class="row">                                                    
                                                   <div class="col-md-4">
                                                        <label>Sumilla </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-asterisk bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control" value="<?php echo $expediente->SUMILLA; ?>" name="sumilla" placeholder="Ingrese la sumilla" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Ubicación </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-folder-open-o bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control" value="<?php echo $expediente->UBICACION; ?>" name="ubicacion" placeholder="Ingrese la ubicación del expediente" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Estado </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-question-circle bigger-110"></i>
                                                            </span>
                                                            <input type="hidden" class="form-control" value="<?php echo $expediente->MOTIVO; ?>" name="motivo" placeholder="Ingrese el motivo" />
                                                            <select name="estado" class="form-control" id="form-field-select-1" data-placeholder="Choose a State...">
                                                                <option value="1" selected>EN TRAMITE</option> 
                                                                <option value="2">ARCHIVADO</option>
                                                                <option value="3">CONCLUIDO</option>
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
    $(function() {
        $.mask.definitions['~'] = "[+-]";
        $("#date").mask("99/99/9999",{placeholder:"mm/dd/yyyy",completed:function(){alert("completed!");}});
        $(".phone").mask("(999) 999-9999");
        $("#phoneExt").mask("(999) 999-9999? x99999");
        $("#iphone").mask("+33 999 999 999");
        $("#tin").mask("99-9999999");
        $("#ssn").mask("9999-99999");
        $("#product").mask("a*-999-a999", { placeholder: " " });
        $("#eyescript").mask("~9.99 ~9.99 999");
        $("#po").mask("PO: aaa-999-***");
        $("#pct").mask("99%");
        $("#phoneAutoclearFalse").mask("(999) 999-9999", { autoclear: false, completed:function(){alert("completed autoclear!");} });
        $("#phoneExtAutoclearFalse").mask("(999) 999-9999? x99999", { autoclear: false });

        $("input").blur(function() {
            $("#info").html("Unmasked value: " + $(this).mask());
        }).dblclick(function() {
            $(this).unmask();
        });
    });

    function filterFloat(evt,input){
    // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
    var key = window.Event ? evt.which : evt.keyCode;    
    var chark = String.fromCharCode(key);
    var tempValue = input.value+chark;
        if(key >= 48 && key <= 57){
            if(filter(tempValue)=== false){
                return false;
            }else{       
                return true;
            }
        }else{
            if(key == 8 || key == 13 || key == 0) {     
                return true;              
            }else if(key == 46){
                    if(filter(tempValue)=== false){
                        return false;
                    }else{       
                        return true;
                    }
            }else{
                return false;
            }
        }
    }
    function filter(__val__){
        var preg = /^([0-9]+\.?[0-9]{0,2})$/; 
        if(preg.test(__val__) === true){
            return true;
        }else{
        return false;
        }
    }
</script>
<script src="assets/js/jquery.maskedinput.js" type="text/javascript"></script>
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script src="assets/scripts/comprobante.js"></script>
