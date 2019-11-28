<!-- ESTO ES ELCONTENIDO DEL BODY DONDE SE FIJARA LOS FORMULARIOS -->
<?php require_once 'controller/cargar.php'; ?> 
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
                            Consultas de registro
                        </small>
                    </h3>

                    
                    <div class="table-header">
                        <i class="ace-icon fa fa-hand-o-right"></i>
                        Realice búsquedas para obtener los resultados
                    </div>

                    <br>
                    <div class="clearfix">
                        <div>
                            <form method='get' action="?c=Expediente&a=buscar">
                                
                                <div class="col-md-3">
                                    <div class="input-group col-xs-12">
                                            <label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;
                                            Buscar N° Expediente:
                                            </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group col-xs-12">
                                        <span class="input-group-addon">
                                            <i class="ace-icon fa fa-pencil bigger-110"></i>
                                        </span>
                                        <input type="text" autocomplete="off" class="form-control search-query" name="buscar" 
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
                            <!--
                            <div class="col-md-1">
                                <span class="input-group-btn">
                                    <button type="button"  onclick="location.href='?c=Expediente&a=Index';" class="btn btn-primary btn-sm">
                                        <span class="ace-icon fa fa-eye icon-on-right bigger-110"></span> Mostrar Todo
                                    </button>
                                </span>
                             </div>
                            -->
                        </div>

                        <!--
                        <div class="pull-right tableTools-container">
                            <button onclick="location.href='?c=Expediente&a=Crud';"
                                class="btn btn-white btn-info btn-bold pull-right">
                                <i class="fas fa fa-plus-circle bigger-120 blue"></i>
                                Agregar
                            </button>
                        </div>
                        -->

                    </div>

                    <br>
                    <!-- div.table-responsive -->
                    <!-- div.dataTables_borderWrap -->
                    <div>
                    <?php    
                        if (isset( $_GET['buscar'])) {
                            buscartrazabilidad($_GET['buscar']);
                        }else{
                            cargartrazabilidad();
                        }
                    ?>
                    </div>
                    
                </div>
            </div>
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->
<!-- AQUI TERMINA EL CONTENIDO DEL BODY (FORMULARIOS) -->