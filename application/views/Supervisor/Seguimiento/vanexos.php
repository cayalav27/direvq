			<div id="page-wrapper">
	            <div class="container-fluid">
	                <div class="row bg-title">
	                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
	                        <h4 class="page-title">Anexos</h4>
	                    </div>
	                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
	                        <ol class="breadcrumb">
	                            <li><a href="#">Anexos</a></li>
	                            <li class="active">Lista</li>
	                        </ol>
	                    </div>
	                    <!-- /.col-lg-12 -->
	                </div>
	                <!-- /row -->
	                <div class="row">
	                    <div class="col-sm-12">
	                        <div class="white-box">
	                            <div class="table-responsive">
	                                <table id="tbanx" class="display compact color-bordered-table muted-bordered-table" cellspacing="0" width="100%">
		                                <thead>
		                                    <tr>
		                                        <th width="5">#</th>
		                                        <th width="25">Anexo</th>
		                                        <th width="200">Nombres y Apellidos</th>
		                                        <th width="200">Area</th>
		                                        <th width="300">Cargo</th>
		                                        <th width="100">Móvil</th>
		                                        <th width="300">Email</th>
		                                        <th width="100">Estado</th>
		                                        <th width="100">Acción</th>
		                                    </tr>
		                                </thead>
		                                <tbody>
		                                </tbody>
		                            </table>
	                            </div>
	                            <hr>
				                <div class="row">
				                	<div class="col-lg-12" align="center">
										<a class="btn btn-info btn-rounded" data-target="#InsAnx" data-toggle="modal"><i class="fa fa-plus-square-o"></i> Agregar</a>
				                	</div>
				                </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- /.row -->
	            </div>
	            <div id="InsAnx" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Registrar Anexo</h4>
                            </div>
                            <form id="insanxform" data-toggle="validator" method="post" class="form-horizontal form-material">
	                            <div class="modal-body">
                                	<div class="row">
	                                	<div class="col-md-12">
                                             <div class="form-group row">
                                                <label class="col-md-12"># Anexo *</label>
                                                <div class="col-md-12">
                                                    <input type="number" class="form-control input-sm" name="InsAnxDir" id="InsAnxDir" maxlength="9" minlength="1" min="0" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                             <div class="form-group row">
                                                <label class="col-md-12">Empleado *</label>
                                                <div class="col-md-12">
                                                    <select class="form-control input-sm cboanxemp" id="InsCodEmp" name="InsCodEmp">
                                                        <option value="" selected=""></option>
	                                				</select>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
	                                </div>
	                            </div>
	                            <div class="modal-footer">
	                                <button type="submit" id="action" class="btn btn-success waves-effect waves-light">Registrar</button>
	                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
	                            </div>
                            </form>
                        </div>
                    </div>
                </div>
	            <div id="UpdAnx" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Editar Anexo</h4>
                            </div>
                            <form id="updanxform" data-toggle="validator" method="post" class="form-horizontal form-material">
	                            <div class="modal-body">
	                                <input type="hidden" name="EdtCodDir" id="EdtCodDir" />
                                	<div class="row">
	                                	<div class="col-md-12">
                                             <div class="form-group row">
                                                <label class="col-md-12">Anexo</label>
                                                <div class="col-md-12">
                                                    <input type="number" class="form-control input-sm" name="EdtAnxDir" id="EdtAnxDir" maxlength="9" minlength="1" min="0" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                             <div class="form-group row">
                                                <label class="col-md-12">Empleado *</label>
                                                <div class="col-md-12">
                                                    <select class="form-control input-sm " id="EdtCodEmp" name="EdtCodEmp">
	                                				</select>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
	                                </div>
	                            </div>
	                            <div class="modal-footer">
	                                <button type="submit" id="action" class="btn btn-warning waves-effect waves-light">Update</button>
	                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
	                            </div>
                            </form>
                        </div>
                    </div>
                </div>