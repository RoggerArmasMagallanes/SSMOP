<!-- ESTO ES ELCONTENIDO DEL BODY DONDE SE FIJARA LOS FORMULARIOS -->
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="principal.php">Principal</a>
                </li>
                <li class="active">Asignar trazabilidad del expediente técnico</li>
            </ul><!-- /.breadcrumb -->
            <!--class="col-sm-12"-->
        </div>

        <div class="page-content">

            <div class="row">
                <div class="col-xs-12">
                    <h3 class="header smaller lighter blue"><a href="main_asignar.php">Trazabilidad</a>
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
                                        <form id="frm-alumno" action="?c=Asignar&a=Guardar" method="post" enctype="multipart/form-data">
                                            <fieldset>
                                                <div class="row">                            
                                                    <div class="col-md-4">
                                                        <label>N° de Expediente</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-search bigger-110"></i>
                                                            </span>
                                                            <input type="hidden" id="codigo" name="id_expediente"/>
                                                            <input autocomplete="off" id="expediente" class="form-control" type="text" placeholder="Buscar N° Expediente" />                                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Fecha Ingreso</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-calendar bigger-110"></i>
                                                            </span>
                                                            <input id="fecha" class="form-control" type="date" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Monto Inversión Inicial</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-money bigger-110"></i>
                                                            </span>
                                                            <input id="monto" class="form-control" type="text" readonly />
                                                        </div>
                                                    </div>
                                                </div>
                                                <p></p>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Descripcion del Expediente</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-file-o bigger-110"></i>
                                                            </span>
                                                            <input id="contexto" class="form-control" type="text" readonly />
                                                        </div>
                                                    </div>
                                                </div>
                                                <p></p>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                    <label>Fecha Derivación </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-calendar bigger-110"></i>
                                                            </span>
                                                            <input type="date" class="form-control search-query" name="fecha_derivacion" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <label>Folio </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-book bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control" name="folio" placeholder="Ingrese Nro. Folio" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                    <label>Area </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-user bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control search-query"  name="area" placeholder="Ingrese Area" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Estado </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-question bigger-140"></i>
                                                            </span>
                                                            <select name="nestado" class="form-control" id="form-field-select-1" data-placeholder="Choose a State...">
                                                                <option value="1" selected>DERIVADO</option> 
                                                                <option value="2">DEVUELTO</option>
                                                                <option value="3">ATENDIDO</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <p></p>

                                                                                 
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Observación </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-eye bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control" name="observacion" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <div class="form-actions center">
                                                <button  class="btn btn-sm btn-success">
                                                    Guardar Cambios
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