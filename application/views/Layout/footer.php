   			<footer class="footer text-center"> 2018 &copy; Todos los derechos reservados a Enviroequip S.A.C - Desarrollado por Christian Ayala </footer>
   		</div>
   </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/tether.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jasny-bootstrap.js"></script>

    <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/datatables/js/dataTables.responsive.min.js"></script>

    <!-- Sweet-Alert  -->
    <script src="<?php echo base_url(); ?>assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/datepicker/date.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/plugins/dropify/dist/js/dropify.min.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/js/dropify/dropify.js"></script>

    <script type="text/javascript">
    	var baseurl = "<?php echo base_url();?>";
    </script>
    <script src="<?php echo base_url();?>assets/js/ajax/directorio.js"></script>
    <script src="<?php echo base_url()?>assets/js/ajax/login.js"></script>
    <script src="<?php echo base_url();?>assets/js/ajax/datos.js"></script>
 
    <?php if($this->uri->segment(1)=='canexos') {?> 
        	<script src="<?php echo base_url();?>assets/js/ajax/anexos.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/custom-select/custom-select.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/select2/select2.js"></script>
	<?php }?>

    <?php if($this->uri->segment(1)=='cempleados') {?> 
        	<script src="<?php echo base_url();?>assets/js/ajax/empleados.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/custom-select/custom-select.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/select2/select2.js"></script>
	<?php }?>

	<?php if($this->uri->segment(1)=='ccargos') {?> 
        	<script src="<?php echo base_url();?>assets/js/ajax/cargos.js"></script>
	<?php }?>

	<?php if($this->uri->segment(1)=='cperfiles') {?> 
        	<script src="<?php echo base_url();?>assets/js/ajax/perfiles.js"></script>
	<?php }?>

	<?php if($this->uri->segment(1)=='careas') {?> 
        	<script src="<?php echo base_url();?>assets/js/ajax/areas.js"></script>
	<?php }?>

    <?php if($this->uri->segment(1)=='cmarcas') {?> 
            <script src="<?php echo base_url();?>assets/js/ajax/marcas.js"></script>
    <?php }?>

	<?php if($this->uri->segment(1)=='csegemp') {?> 
        	<script src="<?php echo base_url();?>assets/js/ajax/empleados.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/custom-select/custom-select.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/select2/select2.js"></script>
	<?php }?>

	<?php if($this->uri->segment(1)=='cseganx') {?> 
        	<script src="<?php echo base_url();?>assets/js/ajax/anexos.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/custom-select/custom-select.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/select2/select2.js"></script>
	<?php }?>

</body>

</html>
