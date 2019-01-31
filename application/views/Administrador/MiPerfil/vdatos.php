        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Mi Perfil</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Directorio</a></li>
                            <li class="active">Mi Perfil</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> 
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/users/<?php echo $this->session->userdata('s_FotEmp');?>" class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white"><?php echo $this->session->userdata('s_NomEmp').' '.$this->session->userdata('s_ApeEmp');?></h4>
                                        <h5 class="text-white"><?php echo $this->session->userdata('s_NomCrg');?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-6 b-r"><strong>Email</strong>
                                        <p><?php echo $this->session->userdata('s_EmlEmp');?></p>
                                    </div>
                                    <div class="col-md-6"><strong>Móvil</strong>
                                        <p><?php echo $this->session->userdata('s_MovEmp');?></p>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <hr>
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12"><strong>Dirección</strong>
                                        <?php if($this->session->userdata('s_Dr1Emp') == null) { ?>
                                                <p> No tiene información agregada</p>
                                        <?php } else { ?>
                                                <p><?php echo $this->session->userdata('s_Dr1Emp');?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <ul class="nav customtab nav-tabs" role="tablist">
                                <li role="presentation" class="nav-item"><a href="#RsmEmp" class="nav-link active" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="fa fa-home"></i></span><span class="hidden-xs"> Resumen</span></a></li>
                                <li role="presentation" class="nav-item"><a href="#PrfEmp" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Corporativo</span></a></li>
                                <li role="presentation" class="nav-item"><a href="#PrsEmp" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-envelope-o"></i></span> <span class="hidden-xs">Personal</span></a></li>
                                <li role="presentation" class="nav-item"><a href="#settings" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Setting</span></a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="RsmEmp">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-6 b-r"> <strong>DNI</strong>
                                            <br>
                                            <p class="text-muted"><?php echo $this->session->userdata('s_DniEmp');?></p>
                                        </div>
                                        <div class="col-md-4 col-xs-6 b-r"> <strong>Area</strong>
                                            <br>
                                            <p class="text-muted"><?php echo $this->session->userdata('s_NomAre');?></p>
                                        </div>
                                        <div class="col-md-4 col-xs-6 b-r"> <strong>Dirección 2</strong>
                                            <br>
                                            <?php if($this->session->userdata('s_Dr2Emp') == null) { ?>
                                                    <p class="text-muted"> No tiene información agregada</p>
                                            <?php } else { ?>
                                                    <p class="text-muted"><?php echo $this->session->userdata('s_Dr2Emp');?></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                    <hr>
                                    <!-- .row -->
                                    <div class="row text-center m-t-10">
                                        <div class="col-md-12"><strong>Resumen de vida</strong>
                                            <?php if($this->session->userdata('s_RsmEmp') == null) { ?>
                                                    <p class="text-muted"> No tiene información agregada</p>
                                            <?php } else { ?>
                                                    <p class="text-muted"><?php echo $this->session->userdata('s_RsmEmp');?></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="PrfEmp">
                                    <form id="UpdEmpCor" data-toggle="validator" method="post" class="form-horizontal form-material">
                                        <input type="hidden" placeholder="" name="TxtCorCodEmp" id="TxtCorCodEmp" value="<?php echo $this->session->userdata('s_CodEmp');?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                 <div class="form-group row">
                                                    <label class="col-md-12">Email</label>
                                                    <div class="col-md-12 input-group">
                                                        <input type="email" placeholder="" class="form-control input-sm" name="TxtEmlEmp" id="TxtEmlEmp" value="<?php echo $this->session->userdata('s_EmlEmp');?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-12 input-group">Movil</label>
                                                    <div class="col-md-12">
                                                        <input type="number" placeholder="" class="form-control input-sm" name="TxtMovEmp" id="TxtMovEmp" min="0" value="<?php echo $this->session->userdata('s_MovEmp');?>"> 
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-success btn-rounded">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="PrsEmp">
                                    <form id="UpdEmpPrs" data-toggle="validator" method="post" class="form-horizontal form-material">
                                        <input type="hidden" placeholder="" name="TxtPrsCodEmp" id="TxtPrsCodEmp" value="<?php echo $this->session->userdata('s_CodEmp');?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                 <div class="form-group row">
                                                    <label class="col-md-12">DNI</label>
                                                    <div class="col-md-12 input-group">
                                                        <input type="number" placeholder="No tiene información agregada" class="form-control input-sm" name="TxtDniEmp" min="0" id="TxtDniEmp" value="<?php echo $this->session->userdata('s_DniEmp');?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row row">
                                                    <label class="col-md-12">Fecha de Nacimiento</label>
                                                    <div class="col-md-12 input-group">
                                                        <input type="text" placeholder="No tiene información agregada" class="form-control input-sm" name="TxtFcnEmp" id="TxtFcnEmp" value="<?php echo $this->session->userdata('s_FcnEmp');?>">
                                                        <span class="input-group-addon"><i class="icon-calender"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                 <div class="form-group row">
                                                    <label class="col-md-12">Nombres</label>
                                                    <div class="col-md-12 input-group">
                                                        <input type="text" placeholder="No tiene información agregada" class="form-control input-sm" name="TxtNomEmp" id="TxtNomEmp" value="<?php echo $this->session->userdata('s_NomEmp');?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-12">Apellidos</label>
                                                    <div class="col-md-12 input-group">
                                                        <input type="text" placeholder="No tiene información agregada" class="form-control input-sm" name="TxtApeEmp" id="TxtApeEmp" value="<?php echo $this->session->userdata('s_ApeEmp');?>"> 
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                 <div class="form-group row">
                                                    <label class="col-md-12">Dirección 1</label>
                                                    <div class="col-md-12 input-group">
                                                        <input type="text" placeholder="No tiene información agregada" class="form-control input-sm" name="TxtDr1Emp" id="TxtDr1Emp" value="<?php echo $this->session->userdata('s_Dr1Emp');?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-12">Dirección 2</label>
                                                    <div class="col-md-12 input-group">
                                                        <input type="text" placeholder="No tiene información agregada" class="form-control input-sm" name="TxtDr2Emp" id="TxtDr2Emp" value="<?php echo $this->session->userdata('s_Dr2Emp');?>"> 
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                 <div class="form-group row">
                                                    <label class="col-md-12">Email</label>
                                                    <div class="col-md-12 input-group">
                                                        <input type="text" placeholder="No tiene información agregada" class="form-control input-sm" name="TxtCprEmp" id="TxtCprEmp" value="<?php echo $this->session->userdata('s_CprEmp');?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-12">Móvil</label>
                                                    <div class="col-md-12 input-group">
                                                        <input type="number" placeholder="No tiene información agregada" class="form-control input-sm" name="TxtMprEmp" min="0" id="TxtMprEmp" value="<?php echo $this->session->userdata('s_MprEmp');?>"> 
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                 <div class="form-group row">
                                                    <label class="col-md-12">Teléfono Fijo</label>
                                                    <div class="col-md-12 input-group">
                                                        <input type="number" placeholder="No tiene información agregada" class="form-control input-sm" name="TxtTprEmp" min="0" id="TxtTprEmp" value="<?php echo $this->session->userdata('s_TprEmp');?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-12"># o contacto de emergencia</label>
                                                    <div class="col-md-12 input-group">
                                                        <input type="text" placeholder="No tiene información agregada" class="form-control input-sm" name="TxtNemEmp" id="TxtNemEmp" value="<?php echo $this->session->userdata('s_NemEmp');?>"> 
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!-- /.row -->
                                        <hr>
                                        <!-- .row -->
                                        <div class="row">
                                            <div class="col-md-4">
                                                 <div class="form-group row">
                                                    <label class="col-md-12">Facebook</label>
                                                    <div class="col-md-12 input-group">
                                                        <input type="text" placeholder="No tiene información agregada" class="form-control input-sm" name="TxtFcbEmp" id="TxtFcbEmp" value="<?php echo $this->session->userdata('s_FcbEmp');?>">
                                                        <div class="input-group-addon"><i class="ti-facebook"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="col-md-12">LinkedIn</label>
                                                    <div class="col-md-12 input-group">
                                                        <input type="text" placeholder="No tiene información agregada" class="form-control input-sm" name="TxtLkdEmp" id="TxtLkdEmp" value="<?php echo $this->session->userdata('s_LkdEmp');?>"> 
                                                        <div class="input-group-addon"><i class="ti-linkedin"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="col-md-12">Twitter</label>
                                                    <div class="col-md-12 input-group">
                                                        <input type="text" placeholder="No tiene información agregada" class="form-control input-sm" name="TxtTwtEmp" id="TxtTwtEmp" value="<?php echo $this->session->userdata('s_TwtEmp');?>"> 
                                                        <div class="input-group-addon"><i class="ti-twitter-alt"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!-- /.row -->
                                        <hr>
                                        <!-- .row -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-12">Intereses</label>
                                                    <div class="col-md-12 input-group">
                                                        <textarea rows="5" placeholder="No tiene información agregada" class="form-control input-sm" id="TxtIntEmp" name="TxtIntEmp"><?php echo $this->session->userdata('s_IntEmp');?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-12">Resumen de vida</label>
                                                    <div class="col-md-12 input-group">
                                                        <textarea rows="5" placeholder="No tiene información agregada" class="form-control input-sm" id="TxtRsmEmp" name="TxtRsmEmp"><?php echo $this->session->userdata('s_RsmEmp');?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-success btn-rounded">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="settings">
                                    <div class="row">
                                        <div class="col-md-6 b-r">
                                            <form id="UpdEmpPsw" data-toggle="validator" method="post" class="form-horizontal form-material">
                                                <input type="hidden" placeholder="" name="TxtPswCodEmp" id="TxtPswCodEmp" value="<?php echo $this->session->userdata('s_CodEmp');?>">
                                                <div class="form-group row">
                                                    <label class="col-md-12">New Password</label>
                                                    <div class="col-md-6">
                                                        <input type="password" placeholder="Agrega una nueva constraseña" name="TxtPswEmp" id="TxtPswEmp" class="form-control form-control-line">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-success btn-rounded">Change</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-6 b-r">
                                            <form id="UpdEmpFot" data-toggle="validator" method="post" class="form-horizontal form-material">
                                                <input type="hidden" placeholder="" name="TxtFotCodEmp" id="TxtFotCodEmp" value="<?php echo $this->session->userdata('s_CodEmp');?>">
                                                <div class="form-group row">
                                                    <label class="col-sm-12">Cargar foto</label>
                                                    <div class="col-sm-12">
                                                        <input type="file" name="TxtFotEmp" id="TxtFotEmp" class="dropify" data-max-file-size="3M" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-info btn-rounded">Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
