			<div id="page-wrapper">
	            <div class="container-fluid">
	                <div class="row bg-title">
	                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
	                        <h4 class="page-title">Teléfonos & Emails</h4>
	                    </div>
	                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
	                        <ol class="breadcrumb">
	                            <li><a href="#">Directorio</a></li>
	                            <li class="active">Teléfonos & Emails</li>
	                        </ol>
	                    </div>
	                    <!-- /.col-lg-12 -->
	                </div>
	                <!-- /row -->
	                <div class="row">
	                    <div class="col-sm-12">
	                        <div class="white-box">
	                            <div class="table-responsive">
	                                <table id="tbdir" class="display compact color-bordered-table muted-bordered-table" cellspacing="0" width="100%">
		                                <thead>
		                                    <tr>
		                                        <th width="5">#</th>
		                                        <th width="150">Apellidos y Nombres</th>
		                                        <th width="150">Area</th>
		                                        <th width="200">Cargo</th>
		                                        <th width="10">Anexo</th>
		                                        <th width="15">Móvil</th>
		                                        <th width="200">Email</th>
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
	            </div>
				<div class="modal fade login-dir" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<!-- header modal -->
							<div class="modal-header text-center">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="mySmallModalLabel"><i class="fa fa-users"></i> INICIAR SESIÓN</h4>
							</div>
							<!-- body modal -->
							<div class="modal-body">
								<!-- login form -->
								<form id="login" action="<?php echo base_url();?>Clogin/login" method="post" class="sky-form boxed nomargin" autocomplete="off">
									<fieldset class="nomargin">	
										<label class="label margin-top-20">Usuario *</label>
										<label class="input">
											<i class="ico-append fa fa-user"></i>
											<input type="text" name="TxtUsrEmp" class="form-control" required="">
											<span class="tooltip tooltip-top-right">Usuario</span>
										</label>
									
										<label class="label margin-top-20">Password *</label>
										<label class="input">
											<i class="ico-append fa fa-lock"></i>
											<input type="password" name="TxtPswEmp" class="form-control" required="">
											<b class="tooltip tooltip-top-right">Password</b>
										</label>
									</fieldset>
									<footer class="celarfix">
										<button type="submit" class="btn btn-sm btn-teal pull-right"><i class="fa fa-check"></i> LOG IN</button>
									</footer>
								</form>
							</div>
						</div>
					</div>
				</div>
