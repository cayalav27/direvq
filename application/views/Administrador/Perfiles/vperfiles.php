			<div id="page-wrapper">
	            <div class="container-fluid">
	                <div class="row bg-title">
	                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
	                        <h4 class="page-title">Perfiles</h4>
	                    </div>
	                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
	                        <ol class="breadcrumb">
	                            <li><a href="#">Perfiles</a></li>
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
	                               <table id="tbprf" class="display compact color-bordered-table muted-bordered-table" cellspacing="0" width="100%">
		                                <thead>
		                                    <tr>
		                                        <th width="10">#</th>
		                                        <th width="200">Nombre del Perfil</th>
		                                        <th width="200">Estado</th>
		                                        <th width="100">Acción</th>
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
	            <div id="UpdPrf" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Editar Perfil</h4>
                            </div>
                            <form id="updprfform" data-toggle="validator" method="post" class="form-horizontal form-material">
	                            <div class="modal-body">
	                                <input type="hidden" name="EdtCodPrf" id="EdtCodPrf" />
                                	<div class="row">
	                                	<div class="col-md-12">
                                             <div class="form-group row">
                                                <label class="col-md-12">Nombre del Perfil</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control input-sm" name="EdtNomPrf" id="EdtNomPrf" maxlength="25" minlength="1" required>
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