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
                <li class="active">Banco de Datos de Entidades</li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">

                    <h3 class="header smaller lighter blue">Entidades
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Consultas de Entidades registrados
                        </small>
                    </h3>

                   
                    <div class="table-header">
                        <i class="ace-icon fa fa-hand-o-right"></i>
                        Realice búsquedas para obtener los resultados
                    </div>

                    <BR>
                    <div class="clearfix">
                        <div>
                            <form method='get' action="?c=Entidad&a=buscar">
                                <div class="col-md-3">
                                    <div class="input-group col-xs-12">
                                        <div class="control-group">
                                            <div class="radio">
                                                <label>
                                                    <input name="opt" type="radio" value="1" class="ace" /> 
                                                    <span class="lbl"> Razon Social</span>
                                                </label>
                                                <label>
                                                    <input name="opt" type="radio" value="2" class="ace"  />
                                                    <span class="lbl"> Número R.U.C</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="input-group col-xs-12">
                                        <span class="input-group-addon">
                                            <i class="ace-icon fa fa-pencil bigger-110"></i>
                                        </span>
                                        <input type="text" autocomplete="off" class="form-control search-query" name="buscar" 
                                               placeholder="Ingrese datos a Buscar" />
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <span class="ace-icon fa fa-search icon-on-right bigger-110"></span> Buscar
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="pull-right tableTools-container">
                            <button onclick="location.href='?c=Entidad&a=Crud';"
                                class="btn btn-white btn-info btn-bold pull-right">
                                <i class="fas fa fa-plus-circle bigger-120 blue"></i>
                                Agregar
                            </button>
                        </div>
                    </div>


                    <div>
                    <?php    
                        if (isset($_GET['opt'], $_GET['buscar'])) {
                            buscar($_GET['opt'], $_GET['buscar']);
                        }else{
                            cargar();
                        }
                    ?>
                    </div>
                    <!-- RECUERDA QUE AQUI VA EL CODIGO DEL DATATABLE (LO TIENES EN UN BLOC DE NOTAS) -->

                </div>
            </div>
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->
<!-- AQUI TERMINA EL CONTENIDO DEL BODY (FORMULARIOS) -->
