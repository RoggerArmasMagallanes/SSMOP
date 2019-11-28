<!-- ESTO ES ELCONTENIDO DEL BODY DONDE SE FIJARA LOS FORMULARIOS -->

<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="principal.php">Principal</a>
                </li>
                <li class="active">Trazabilidad de Expedientes Técnicos</li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">

                   	<h3 class="widget-title grey lighter">
						<i class="ace-icon fa fa-file blue"></i>
						Trazabilidad Expediente Técnico Actual
                    </h3>
                    <div class="hr hr6 hr-double hr-dotted"></div>
                    <!-- div.table-responsive -->
                    <!-- div.dataTables_borderWrap -->
                   
                    <div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-sm-10 col-sm-offset-1">
										<div class="widget-box transparent">

										<!--
											<div class="widget-header widget-header-large">
												<div class="widget-toolbar no-border invoice-info">
													<span class="invoice-info-label">Invoice:</span>
													<span class="red">#121212</span>

													<span class="invoice-info-label">Date:</span>
													<span class="blue">04/04/2014</span>
												</div>

												<div class="widget-toolbar hidden-480">
													<a href="#">
														<i class="ace-icon fa fa-print"></i>
													</a>
												</div>
											</div>
                                            -->
											<div class="widget-body">
												<div class="widget-main padding-24">

                                                <?php foreach($this->model->Buscar($_REQUEST['id']) as $r): ?>
													<div class="row">
														<div class="col-sm-6">
															<div class="row">
																<div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right">
																	<b>Emisor</b>
																</div>
															</div>
															<!-- Espacio entre los encabezados de Receptor y Emisor -->
															<div class="space-6"></div>
															<div>
																<table>
																	<tbody>
																		<tr>
																			<th width="130"><i class="ace-icon fa fa-caret-right green"></i><b>&nbsp;&nbsp;Nro. Expediente:</b></th>
																			<td><?php echo $r->N_EXPEDIENTE; ?></td>
																		</tr>
																		<tr>
																			<th><i class="ace-icon fa fa-caret-right green"></i><b>&nbsp;&nbsp;Recepción:</b></th>
																			<td><?php echo $r->FECHA_APROBADO; ?></td>
																		</tr>
																		<tr>
																			<th><i class="ace-icon fa fa-caret-right green"></i><b>&nbsp;&nbsp;Modalidad:</b></th>
																			<td><?php echo $r->DESCRIPCION; ?></td>
																		</tr>
																		<tr>
																			<th><i class="ace-icon fa fa-caret-right green"></i><b>&nbsp;&nbsp;Remitente:</b></th>
																			<td><?php echo $r->REPRESENTANTE; ?></td>
																		</tr>
																		<tr>
																			<th ><i class="ace-icon fa fa-caret-right green"></i><b>&nbsp;&nbsp;Nro. DNI:</b></th>
																			<td><?php echo $r->N_DNI; ?></td>
																		</tr>
																		<tr>
																			<th><i class="ace-icon fa fa-caret-right green"></i><b>&nbsp;&nbsp;Empresa:</b></th>
																			<td><?php echo $r->RAZON_SOCIAL; ?></td>
																		</tr>
																		<tr>
																			<th><i class="ace-icon fa fa-caret-right green"></i><b>&nbsp;&nbsp;Cargo:</b></th>
																			<td><?php echo $r->CARGO_ENTIDAD; ?></td>
																		</tr>
																		<tr>
																			<th><i class="ace-icon fa fa-caret-right green"></i><b>&nbsp;&nbsp;Asunto:</b></th>
																			<td><?php echo $r->CONTEXTO; ?></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div><!-- /.col -->

														<div class="col-sm-6">
															<div class="row">
																<div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
																	<b>Receptor</b>
																</div>
															</div>
															<!-- Espacio entre los encabezados de Receptor y Emisor -->
															<div class="space-6"></div>
															<div>
																<table>
																	<tbody>
																	<tr>
																		<th  width="130"><i class="ace-icon fa fa-caret-right green"></i><b>&nbsp;&nbsp;Estado:</b></th>
																		<td><?php echo $r->NUEVO_ESTADO == '1' ? 'DERIVADO':($r->NUEVO_ESTADO == '2' ? 'DEVUELTO' : 'ATENDIDO'); ?></td>
																	</tr>
																	<tr>
																		<th><i class="ace-icon fa fa-caret-right green"></i><b>&nbsp;&nbsp;Fecha Derivado:</b></th>
																		<td><?php echo $r->FECHA_DERIVACION; ?></td>
																	</tr>
																	<tr>
																		<th><i class="ace-icon fa fa-caret-right green"></i><b>&nbsp;&nbsp;Destinatario:</b></th>
																		<td><?php echo $r->AREA_COMPETENTE; ?></td>
																	</tr>
																	<tr>
																		<th><i class="ace-icon fa fa-caret-right green"></i><b>&nbsp;&nbsp;Folio:</b></th>
																		<td><?php echo $r->FOLIOS; ?></td>
																	</tr>
																	<tr>
																		<th><i class="ace-icon fa fa-caret-right green"></i><b>&nbsp;&nbsp;Observación:</b></th>
																		<td><?php echo $r->OBSERVACION; ?></td>
																	</tr>
																	</tbody>
																</table>
															</div>
                                                        </div><!-- /.col -->
                                                    </div><!-- /.row -->
                                                    <!-- Linea de Separación -->
													<div class="hr hr8 hr-double hr-dotted"></div>
													<div class="space-12"></div>
                                                    <?php endforeach; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
                    
                    </div>
                </div>
            </div>
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->
<!-- AQUI TERMINA EL CONTENIDO DEL BODY (FORMULARIOS) -->