<!-- ESTO ES ELCONTENIDO DEL BODY DONDE SE FIJARA LOS FORMULARIOS -->
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="principal.php">Principal</a>
                </li>
                <li class="active">Obras Públicas en Ejecución</li>
            </ul><!-- /.breadcrumb -->
            <!--class="col-sm-12"-->
        </div>

        <div class="page-content">

            <div class="row">
                <div class="col-xs-12">
                    <h3 class="header smaller lighter blue"><a href="?c=Movimiento">Asignar Matriz de Riesgo</a>
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
                                        <form id="frm-alumno" action="?c=Movimiento&a=Guardar2" method="post" enctype="multipart/form-data">
                                            <fieldset>
                                                <div class="row">
                                                    <input type="hidden" name="id_obra" value="<?php echo $movi->ID_OBRA; ?>" />
                                                    
                                                    <div class="col-md-12">
                                                    <label>Descripcion del Proyecto</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-building bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control search-query" value="<?php echo $movi->NOMBRE_OBRA; ?>" readonly />
                                                        </div>
                                                    </div>
                                                </div>
                                                <p></p>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                    <label>Fecha Inicio </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-calendar bigger-110"></i>
                                                            </span>
                                                            <input type="date" class="form-control search-query" value="<?php echo $movi->FECHA_INICIO; ?>" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                    <label>Fecha Fin </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-calendar bigger-110"></i>
                                                            </span>
                                                            <input type="date" class="form-control search-query" value="<?php echo $movi->FECHA_FIN; ?>" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                    <label>Monto Inversión </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-money bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control search-query" value="<?php echo number_format($movi->MONTO_APTO,2); ?>" readonly />
                                                        </div>
                                                    </div>
                                                </div>
                                                <p></p>
                                                
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Codigo Riesgo (Máx 4 Caracteres) </label>
                                                        <div class="input-group col-xs-12">
                                                                <span class="input-group-addon">
                                                                    <i class="ace-icon fa fa-asterisk bigger-110"></i>
                                                                </span>
                                                                <input type="text" class="form-control" name="n_riesgo" maxlength="4" placeholder="Codigo de Riesgo" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-8">
                                                        <label>Descripcion del Riesgo </label>
                                                        <div class="input-group col-xs-12">
                                                                <span class="input-group-addon">
                                                                    <i class="ace-icon fa fa-bookmark  bigger-110"></i>
                                                                </span>
                                                                <input type="text" class="form-control" name="descripcion" placeholder="Descripcion del Riesgo" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>

                                                
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <label>Probabilidad del Riesgo: </label>
                                                        <div class="control-group">
                                                        <table>
                                                            <div class="radio">
                                                                <tr>
                                                                    <td style="width: 50%;">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <label>
                                                                            <input name="probabilidad" type="radio" value="NO" class="ace" />
                                                                            <span class="lbl"> Muy Bajo</span>
                                                                        </label>
                                                                    </td>
                                                                
                                                                    <td>
                                                                    <input type="text" value="0.10" class="center" readonly />
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td style="width: 50%;">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <label>
                                                                            <input name="probabilidad" type="radio" value="O" class="ace" />
                                                                            <span class="lbl"> Bajo</span>
                                                                        </label>
                                                                    </td>

                                                                    <td>
                                                                        <input type="text" value="0.30" class="center" readonly />
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td style="width: 50%;">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <label>
                                                                            <input name="probabilidad" type="radio" value="O" class="ace" />
                                                                            <span class="lbl"> Moderado</span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" value="0.50" class="center" readonly />
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td style="width: 50%;">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <label>
                                                                            <input name="probabilidad" type="radio" value="O" class="ace" />
                                                                            <span class="lbl"> Alto</span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" value="0.70" class="center" readonly />
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td style="width: 50%;">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <label>
                                                                            <input name="probabilidad" type="radio" value="O" class="ace" />
                                                                            <span class="lbl"> Muy Alto</span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" value="0.90" class="center" readonly />
                                                                    </td>
                                                                </tr>
                                                            </div>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label>Impacto en la Ejecución de la Obra: </label>
                                                        <div class="control-group">
                                                            <table>
                                                            <div class="radio">
                                                                <tr>
                                                                    <td style="width: 50%;">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <label>
                                                                            <input name="enotificar" type="radio" value="NO" class="ace" />
                                                                            <span class="lbl"> Muy Bajo</span>
                                                                        </label>
                                                                    </td>
                                                                
                                                                    <td>
                                                                    <input type="text" value="0.05" class="center" readonly />
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td style="width: 50%;">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <label>
                                                                            <input name="enotificar" type="radio" value="O" class="ace" />
                                                                            <span class="lbl"> Bajo</span>
                                                                        </label>
                                                                    </td>

                                                                    <td>
                                                                        <input type="text" value="0.10" class="center" readonly />
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td style="width: 50%;">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <label>
                                                                            <input name="enotificar" type="radio" value="O" class="ace" />
                                                                            <span class="lbl"> Moderado</span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" value="0.20" class="center" readonly />
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td style="width: 50%;">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <label>
                                                                            <input name="enotificar" type="radio" value="O" class="ace" />
                                                                            <span class="lbl"> Alto</span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" value="0.40" class="center" readonly />
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td style="width: 50%;">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <label>
                                                                            <input name="enotificar" type="radio" value="O" class="ace" />
                                                                            <span class="lbl"> Muy Alto</span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" value="0.80" class="center" readonly />
                                                                    </td>
                                                                </tr>
                                                            </div>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Puntuación Máxima </label>
                                                        <div class="input-group col-xs-12">
                                                                <span class="input-group-addon">
                                                                    <i class="ace-icon fa  fa-circle  bigger-110"></i>
                                                                </span>
                                                                <input type="text" class="form-control" value="0.50" placeholder="Puntuacion" readonly/>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-8">
                                                        <label>Prioridad </label>
                                                        <div class="input-group col-xs-12">
                                                                <span class="input-group-addon">
                                                                    <i class="ace-icon fa fa-certificate  bigger-110"></i>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder="Indique la prioridad" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <p></p>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Estrategia </label>
                                                        <div class="control-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input name="estrategia" type="radio" value="MITIGAR" class="ace" />
                                                                    <span class="lbl"> Mitigar</span>
                                                                </label>

                                                                <label>
                                                                    <input name="estrategia" type="radio" value="EVITAR" class="ace" />
                                                                    <span class="lbl"> Evitar</span>
                                                                </label>

                                                                <label>
                                                                    <input name="estrategia" type="radio" value="ACEPTAR" class="ace" />
                                                                    <span class="lbl"> Aceptar</span>
                                                                </label>

                                                                <label>
                                                                    <input name="estrategia" type="radio" value="TRANSFERIR" class="ace" />
                                                                    <span class="lbl"> Transferir</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Acciones de Respuesta </label>
                                                        <div class="input-group col-xs-12">
                                                                <span class="input-group-addon">
                                                                    <i class="ace-icon fa fa-arrow-circle-o-down  bigger-110"></i>
                                                                </span>
                                                                <input type="text" class="form-control" name="acciones" placeholder="Respuesta de Acción" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Estrategia </label>
                                                        <div class="control-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input name="asignacion" type="radio" value="ENTIDAD" class="ace" />
                                                                    <span class="lbl"> Entidad Requirente</span>
                                                                </label>

                                                                <label>
                                                                    <input name="asignacion" type="radio" value="CONTRATISTA" class="ace" />
                                                                    <span class="lbl"> Contratista</span>
                                                                </label>
                                                            </div>
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