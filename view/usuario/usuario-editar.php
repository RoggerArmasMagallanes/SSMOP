<!-- ESTO ES ELCONTENIDO DEL BODY DONDE SE FIJARA LOS FORMULARIOS -->
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="principal.php">Principal</a>
                </li>
                <li class="active">Consultas de Usuarios registrados</li>
            </ul><!-- /.breadcrumb -->
            <!--class="col-sm-12"-->
        </div>

        <div class="page-content">

            <div class="row">
                <div class="col-xs-12">
                    <h3 class="header smaller lighter blue"><a href="?c=Usuario">Usuarios</a>
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            <?php echo $usuario->ID_USUARIO != null ? 'Editar Registro' : 'Nuevo Registro'; ?>
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
                                        <form id="frm-alumno" action="?c=Usuario&a=Guardar" method="post" enctype="multipart/form-data">
                                            <fieldset>
                                                <div class="row">
                                                    <input type="hidden" name="id" value="<?php echo $usuario->ID_USUARIO; ?>" />
                                                    
                                                    <div class="col-md-6">
                                                    <label>Personal Administrativo</label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-user bigger-110"></i>
                                                            </span>
                                                            <select name="id_persona" class="form-control" id="form-field-select-1" data-placeholder="Choose a State...">
                                                                <?php 
                                                                    foreach ($this->model->Listar_Persona() as $r):
                                                                        $s = ($usuario->ID_PERSONA == $r->ID_PERSONA ? 'selected' : '');
                                                                        echo "<option value='".$r->ID_PERSONA."' ".$s.">".$r->DATOS."</option>";
                                                                    endforeach;
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                    <label>Cargo Administrativo </label>
                                                    <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-user bigger-110"></i>
                                                            </span>
                                                            <select name="id_cargo" class="form-control" id="form-field-select-1" data-placeholder="Choose a State...">
                                                                <?php 
                                                                    foreach ($this->model->Listar_Cargo() as $r):
                                                                        $s = ($usuario->DESCRIPCION == $r->DESCRIPCION ? 'selected' : '');
                                                                        echo "<option value='".$r->ID_CARGO."' ".$s.">".$r->DESCRIPCION."</option>";
                                                                    endforeach;
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <p></p>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Nombre de Usuario </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-male bigger-110"></i>
                                                            </span>
                                                            <input type="text" class="form-control" value="<?php echo $usuario->NOMBRE_USUARIO; ?>" name="nombre_usuario" placeholder="Ingrese Nombre de Usuario" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label>Contraseña </label>
                                                        <div class="input-group col-xs-12">
                                                            <span class="input-group-addon">
                                                                <i class="ace-icon fa fa-key bigger-110"></i>
                                                            </span>
                                                            <input type="password" class="form-control" value="<?php echo $usuario->CLAVE_USUARIO; ?>" name="clave" placeholder="Ingrese Contraseña" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <p></p>
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