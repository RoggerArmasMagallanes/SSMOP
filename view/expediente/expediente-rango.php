<!-- ESTO ES ELCONTENIDO DEL BODY DONDE SE FIJARA LOS FORMULARIOS -->
<?php 
require_once 'controller/cargar.php'; ?> 
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
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">

                    <h3 class="header smaller lighter blue">Expedientes Técnicos
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Informe de expedientes evaluados
                        </small>
                    </h3>

                    <div class="clearfix">
                        <div>
                            <form method='get' action="?c=Expediente&a=buscar">
                                <div class="col-md-2 center">
                                    <div class="input-group col-xs-12">
                                        <label>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Fecha Ingreso:
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group col-xs-12">
                                        <span class="input-group-addon">
                                            <i class="ace-icon fa fa-calendar bigger-110"></i>
                                        </span>
                                        <input type="date" class="form-control search-query" name="fecha_ini" 
                                               placeholder="Ingrese N° de Expediente" />
                                    </div>
                                </div>
                                <div class="col-md-2 center">
                                    <div class="control-group">
                                            <label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                Fecha Emitida:
                                            </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group col-xs-12">
                                        <span class="input-group-addon">
                                            <i class="ace-icon fa fa-calendar bigger-110"></i>
                                        </span>
                                        <input type="date" class="form-control search-query" name="fecha_fin" 
                                               placeholder="Ingrese N° de Expediente" />
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <span class="ace-icon fa fa-search icon-on-right bigger-110"></span> Buscar
                                        </button>
                                    </span>
                                </div>                                
                            </form>
                            
                        </div>

                    </div>

                    <!-- div.table-responsive -->
                    <!-- div.dataTables_borderWrap -->
                    <br>
                    <div>
                    <?php    
                        if (isset( $_GET['fecha_ini'], $_GET['fecha_fin'] )) {
                            buscar3($_GET['fecha_ini'], $_GET['fecha_fin']);
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->
<!-- AQUI TERMINA EL CONTENIDO DEL BODY (FORMULARIOS) -->
