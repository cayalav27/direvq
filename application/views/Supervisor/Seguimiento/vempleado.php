			<div id="page-wrapper">
	            <div class="container-fluid">
	                <div class="row bg-title">
	                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
	                        <h4 class="page-title">Empleados</h4>
	                    </div>
	                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
	                        <ol class="breadcrumb">
	                            <li><a href="#">Empleados</a></li>
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
	                                <table id="tbemp" class="display compact color-bordered-table muted-bordered-table" cellspacing="0" width="100%">
		                                <thead>
		                                    <tr>
		                                        <th width="5">#</th>
		                                        <th width="50">Dni</th>
		                                        <th width="300">Nombres y Apellidos</th>
		                                        <th width="300">Area</th>
		                                        <th width="300">Cargo</th>
		                                        <th width="100">Móvil</th>
		                                        <th width="400">Email</th>
		                                        <th width="100">Estado</th>
		                                        <th width="100">Acción</th>
		                                    </tr>
		                                    </tr>
		                                </thead>
		                                <tbody>
		                                </tbody>
		                            </table>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- /.row -->
	                <br>
	                <div class="row">
	                	<div class="col-lg-12" align="center">
							<a class="btn btn-info btn-rounded" data-target="#InsEmp" data-toggle="modal"><i class="fa fa-plus-square-o"></i> Agregar</a>
	                	</div>
	                </div>
	            </div>
                <div id="InsEmp" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Agregar Empleado</h4>
                            </div>
                            <form id="insempform" data-toggle="validator" method="post" class="form-horizontal form-material">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">DNI *</label>
                                                <div class="col-md-12">
                                                    <input placeholder="Agrega la información requerida" type="number" id="InsDniEmp" name="InsDniEmp" class="form-control input-sm" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Nombres *</label>
                                                <div class="col-md-12">
                                                    <input placeholder="Agrega la información requerida" type="text" id="InsNomEmp" name="InsNomEmp" class="form-control input-sm" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Apellidos *</label>
                                                <div class="col-md-12">
                                                    <input placeholder="Agrega la información requerida" type="text" id="InsApeEmp" name="InsApeEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Email *</label>
                                                <div class="col-md-12">
                                                    <input placeholder="Agrega la información requerida" type="email" id="InsEmlEmp" name="InsEmlEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Movil Corporativo *</label>
                                                <div class="col-md-12">
                                                    <input placeholder="Agrega la información requerida" type="number" id="InsMovEmp" name="InsMovEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Genero *</label>
                                                <div class="col-md-12">
                                                    <select class="form-control input-sm Sel2GnrEmp" id="InsGnrEmp" name="InsGnrEmp">
                                                        <option value="" selected=""></option>
                                                        <option value="1">Femenino</option>
                                                        <option value="2">Masculino</option>
                                                    </select>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Area *</label>
                                                <div class="col-md-12">
                                                    <select class="form-control input-sm cboempare" id="InsCodAre" name="InsCodAre">
                                                        <option value="" selected=""></option>
                                                    </select>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Cargo *</label>
                                                <div class="col-md-12">
                                                    <select class="form-control input-sm cboempcrg" id="InsCodCrg" name="InsCodCrg">
                                                        <option value="" selected=""></option>
                                                    </select>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Perfil *</label>
                                                <div class="col-md-12">
                                                    <select class="form-control input-sm cboempprf" id="InsCodPrf" name="InsCodPrf">
                                                        <option value="" selected=""></option>
                                                    </select>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Usuario *</label>
                                                <div class="col-md-12">
                                                    <input placeholder="Agrega la información requerida" type="text" id="InsUsrEmp" name="InsUsrEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Password *</label>
                                                <div class="col-md-12">
                                                    <input placeholder="Agrega la información requerida" type="password" id="InsPswEmp" name="InsPswEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Fecha de Nacimiento</label>
                                                <div class="col-md-12 input-group">
                                                    <input placeholder="Agrega la información requerida" type="text" class="form-control" id="InsFcnEmp" name="InsFcnEmp">
                                                    <span class="input-group-addon"><i class="icon-calender"></i></span>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Correo Personal</label>
                                                <div class="col-md-12">
                                                    <input placeholder="Agrega la información requerida" type="email" id="InsCprEmp" name="InsCprEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Movil Personal</label>
                                                <div class="col-md-12">
                                                    <input placeholder="Agrega la información requerida" type="number" id="InsMprEmp" name="InsMprEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Teléfono Personal</label>
                                                <div class="col-md-12">
                                                    <input placeholder="Agrega la información requerida" type="number" id="InsTprEmp" name="InsTprEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Dirección Domicilio 1</label>
                                                <div class="col-md-12">
                                                    <input placeholder="Agrega la información requerida" type="text" id="InsDr1Emp" name="InsDr1Emp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Dirección Domicilio 2</label>
                                                <div class="col-md-12">
                                                    <input placeholder="Agrega la información requerida" type="text" id="InsDr2Emp" name="InsDr2Emp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Número o contacto de Emergencia</label>
                                                <div class="col-md-12">
                                                    <textarea placeholder="Agrega la información requerida" id="InsNemEmp" name="InsNemEmp" rows="2" class="form-control input-sm"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="form-group row">
                                                <label class="col-md-12">Intereses Personales</label>
                                                <div class="col-md-12">
                                                    <textarea placeholder="Agrega la información requerida" id="InsIntEmp" name="InsIntEmp" rows="2" class="form-control input-sm"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="form-group row">
                                                <label class="col-md-12">Facebook Personal</label>
                                                <div class="col-md-12">
                                                    <input placeholder="Agrega la información requerida" type="text" id="InsFcbEmp" name="InsFcbEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="form-group row">
                                                <label class="col-md-12">LinkdIn Personal</label>
                                                <div class="col-md-12">
                                                    <input placeholder="Agrega la información requerida" type="text" id="InsLkdEmp" name="InsLkdEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="form-group row">
                                                <label class="col-md-12">Twitter Personal</label>
                                                <div class="col-md-12">
                                                    <input placeholder="Agrega la información requerida" type="text" id="InsTwtEmp" name="InsTwtEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-sm-12">Cargar Foto *</label>
                                                <div class="col-sm-12">
                                                    <input type="file" name="InsFotEmp" id="InsFotEmp" class="dropify" data-max-file-size="2M" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                             <div class="form-group row">
                                                <label class="col-md-12">Resumen de Vida</label>
                                                <div class="col-md-12">
                                                    <textarea placeholder="No tiene información agregada" id="InsRsmEmp" name="InsRsmEmp" rows="4" class="form-control input-sm"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Registrar</button>
                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
	            <div id="UpdEmp" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Editar Empleado</h4>
                            </div>
                            <form id="updempform" data-toggle="validator" method="post" class="form-horizontal form-material">
	                            <div class="modal-body">
	                                <input type="hidden" name="EdtCodEmp" id="EdtCodEmp" />
                            		<div class="row">
                            			<div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">DNI *</label>
                                                <div class="col-md-12">
                                                	<input placeholder="No tiene información agregada" type="number" id="EdtDniEmp" name="EdtDniEmp" class="form-control input-sm" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Nombres *</label>
                                                <div class="col-md-12">
                                                    <input placeholder="No tiene información agregada" type="text" id="EdtNomEmp" name="EdtNomEmp" class="form-control input-sm" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Apellidos *</label>
                                                <div class="col-md-12">
                                                    <input placeholder="No tiene información agregada" type="text" id="EdtApeEmp" name="EdtApeEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Email *</label>
                                                <div class="col-md-12">
                                                    <input placeholder="No tiene información agregada" type="email" id="EdtEmlEmp" name="EdtEmlEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Movil Corporativo *</label>
                                                <div class="col-md-12">
                                                    <input placeholder="No tiene información agregada" type="number" id="EdtMovEmp" name="EdtMovEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Fecha de Nacimiento</label>
                                                <div class="col-md-12 input-group">
                                                    <input placeholder="No tiene información agregada" type="text" class="form-control" id="EdtFcnEmp" name="EdtFcnEmp" placeholder="mm/dd/yyyy">
		                                            <span class="input-group-addon"><i class="icon-calender"></i></span>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Correo Personal</label>
                                                <div class="col-md-12">
                                                    <input placeholder="No tiene información agregada" type="email" id="EdtCprEmp" name="EdtCprEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Movil Personal</label>
                                                <div class="col-md-12">
                                                    <input placeholder="No tiene información agregada" type="number" id="EdtMprEmp" name="EdtMprEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Teléfono Personal</label>
                                                <div class="col-md-12">
                                                    <input placeholder="No tiene información agregada" type="number" id="EdtTprEmp" name="EdtTprEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Dirección Domicilio 1</label>
                                                <div class="col-md-12">
                                                    <input placeholder="No tiene información agregada" type="text" id="EdtDr1Emp" name="EdtDr1Emp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Dirección Domicilio 2</label>
                                                <div class="col-md-12">
                                                    <input placeholder="No tiene información agregada" type="text" id="EdtDr2Emp" name="EdtDr2Emp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Facebook Personal</label>
                                                <div class="col-md-12">
                                                    <input placeholder="No tiene información agregada" type="text" id="EdtFcbEmp" name="EdtFcbEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">LinkdIn Personal</label>
                                                <div class="col-md-12">
                                                    <input placeholder="No tiene información agregada" type="text" id="EdtLkdEmp" name="EdtLkdEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group row">
                                                <label class="col-md-12">Twitter Personal</label>
                                                <div class="col-md-12">
                                                    <input placeholder="No tiene información agregada" type="text" id="EdtTwtEmp" name="EdtTwtEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="form-group row">
                                                <label class="col-md-12">Número o contacto de Emergencia</label>
                                                <div class="col-md-12">
                                                    <textarea placeholder="No tiene información agregada" id="EdtNemEmp" name="EdtNemEmp" rows="2" class="form-control input-sm"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="form-group row">
                                                <label class="col-md-12">Intereses Personales</label>
                                                <div class="col-md-12">
                                                    <textarea placeholder="No tiene información agregada" id="EdtIntEmp" name="EdtIntEmp" rows="2" class="form-control input-sm"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                             <div class="form-group row">
                                                <label class="col-md-12">Resumen de Vida</label>
                                                <div class="col-md-12">
                                                    <textarea placeholder="No tiene información agregada" id="EdtRsmEmp" name="EdtRsmEmp" rows="4" class="form-control input-sm"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
									</div>
	                            </div>
	                            <div class="modal-footer">
	                                <button type="submit" class="btn btn-warning waves-effect waves-light">Update</button>
	                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
	                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="UpdFotEmp" class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Editar Foto del Empleado</h4>
                            </div>
			                <form id="updfotemp" data-toggle="validator" method="post" class="form-horizontal form-material">
                                <input type="hidden" name="EdiCodEmp" id="EdiCodEmp" />
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                             <div class="form-group row">
                                                <label class="col-md-12">Cargar</label>
                                                <div class="col-md-12">
                                                    <input type="file" name="EdiFotEmp" id="EdiFotEmp" class="dropify" data-max-file-size="4M" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="form-group row">
                                                <label class="col-md-12">Foto</label>
                                                <div class="col-md-12">
                                                    <span id="user_uploaded_image"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-warning waves-effect waves-light">Update</button>
                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="UpdPswEmp" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Actualizar password del Empleado</h4>
                            </div>
                            <form id="updpswemp" data-toggle="validator" method="post" class="form-horizontal form-material">
                                <input type="hidden" name="ECodEmp" id="ECodEmp" />
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                             <div class="form-group row">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input placeholder="Agregar nueva contraseña" type="password" id="EdtPswEmp" name="EdtPswEmp" class="form-control input-sm">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-warning waves-effect waves-light">Update</button>
                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

