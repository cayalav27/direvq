			<div id="page-wrapper">
	            <div class="container-fluid">
	                <div class="row bg-title">
	                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
	                        <h4 class="page-title">Areas</h4>
	                    </div>
	                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
	                        <ol class="breadcrumb">
	                            <li><a href="#">Areas</a></li>
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
	                               <table id="tbare" class="display compact color-bordered-table muted-bordered-table" cellspacing="0" width="100%">
		                                <thead>
		                                    <tr>
		                                        <th width="5">#</th>
		                                        <th width="200">Areas</th>
		                                        <th width="50">Estado</th>
		                                        <th width="50">Acción</th>
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
	            <div id="UpdAre" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Editar Área</h4>
                            </div>
                            <form id="updareform" data-toggle="validator" method="post" class="form-horizontal form-material">
	                            <div class="modal-body">
	                                <input type="hidden" name="EdtCodAre" id="EdtCodAre" />
                                	<div class="row">
	                                	<div class="col-md-12">
                                             <div class="form-group row">
                                                <label class="col-md-12">Nombre del Área</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control input-sm" name="EdtNomAre" id="EdtNomAre" maxlength="30" minlength="1" required>
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