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

                    <h3 class="header smaller lighter blue">ASIGNACION DE OBRAS
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Lsta de Participantes
                        </small>
                    </h3>
                    <br>
                    <!-- div.table-responsive -->
                    <!-- div.dataTables_borderWrap -->
                    <div>
                        <table id="table" class="table table-striped table-bordered table-hover">
                        <caption style="font-size: 15px;"> <B>Título: Participantes Asignados </B> </caption>
                        <thead>
                                <tr>
                                    <th class="center">Item</th>
                                    <th>Datos Personales del Participante</th>
                                    <th class="center">Nro. DNI</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                <?php foreach($this->model->Buscar($_REQUEST['id']) as $r): ?>
                                <tr>
                                    <td class="center"><?php echo $r->ID_MOBRA; ?></td>
                                    <td><?php echo $r->PARTICIPANTE; ?></td>
                                    <td class="center"><?php echo $r->N_DNI; ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
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