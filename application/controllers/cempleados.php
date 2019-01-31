<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cempleados extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mempleado');
		if (!$this->session->userdata('login')) {
			redirect(base_url());
		}
	}

	public function index(){
		
		switch($this->session->userdata('s_NomPrf')) {
		    case 'Administrador':
					$this->load->view('Layout/header');
					$this->load->view('Layout/Administrador/menu');
					$this->load->view('Administrador/Empleado/vempleado');
					$this->load->view('Layout/footer');
		        break;
		    case 'Usuario':
				redirect(site_url("cdirectorio"));
		        break;
		    case 'Supervisor':
				redirect(site_url("csegemp"));
				break;
		}

	}

	public function getEmp(){

		$fetch_data = $this->mempleado->make_datatables();  
        $data = array();  
        foreach($fetch_data as $row)  
        {  
            $sub_array = array();  
            $sub_array[] = $row->CodEmp; 
            $sub_array[] = $row->DniEmp;
            $sub_array[] = "<span><i class='fa fa-user'></i> &nbsp;".$row->ApeEmp.', '.$row->NomEmp."</span>"; 
            $sub_array[] = $row->NomAre; 
            $sub_array[] = $row->NomCrg; 
            $sub_array[] = "<span><i class='fa fa-mobile-phone'></i> &nbsp;".$row->MovEmp."</span>";           
            $sub_array[] = "<span style='color:#006699;'><i class='fa fa-envelope'></i> &nbsp;<a style='color:#006699;' href='mailto:".$row->EmlEmp."'>".$row->EmlEmp."</a></span>";
            /*
            if ($row->CprEmp == null) {
              	$sub_array[] = "<span>No tiene información agregada</span>";
            }else {
              	$sub_array[] = "<span style='color:#006699;'><i class='fa fa-envelope'></i> &nbsp;<a style='color:#006699;' href='mailto:".$row->CprEmp."'>".$row->CprEmp."</a></span>";
            }
            if ($row->MprEmp == null) {
              	$sub_array[] = "<span>No tiene información agregada</span>";
            }else {
              	$sub_array[] = "<span><i class='fa fa-mobile-phone'></i> &nbsp;".$row->MprEmp."</span>"; 
            }
            if ($row->Dr1Emp == null) {
              	$sub_array[] = "<span>No tiene información agregada</span>";
            }else {
              	$sub_array[] = "<span>".$row->Dr1Emp."</span>"; 
            }
            if ($row->Dr2Emp == null) {
              	$sub_array[] = "<span>No tiene información agregada</span>";
            }else {
              	$sub_array[] = "<span>".$row->Dr2Emp."</span>"; 
            }
            if ($row->TprEmp == null) {
              	$sub_array[] = "<span>No tiene información agregada</span>";
            }else {
              	$sub_array[] = "<span>".$row->TprEmp."</span>"; 
            }
            if ($row->FcnEmp == null) {
              	$sub_array[] = "<span>No tiene información agregada</span>";
            }else {
              	$sub_array[] = "<span>".$row->FcnEmp."</span>"; 
            }
            if ($row->NemEmp == null) {
              	$sub_array[] = "<span>No tiene información agregada</span>";
            }else {
              	$sub_array[] = "<span>".$row->NemEmp."</span>"; 
            }
            if ($row->IntEmp == null) {
              	$sub_array[] = "<span>No tiene información agregada</span>";
            }else {
              	$sub_array[] = "<span>".$row->IntEmp."</span>"; 
            }
            if ($row->RsmEmp == null) {
              	$sub_array[] = "<span>No tiene información agregada</span>";
            }else {
              	$sub_array[] = "<span>".$row->RsmEmp."</span>"; 
            }
            if ($row->FcbEmp == null) {
              	$sub_array[] = "<span>No tiene información agregada</span>";
            }else {
              	$sub_array[] = "<span>".$row->FcbEmp."</span>"; 
            }
            if ($row->LkdEmp == null) {
              	$sub_array[] = "<span>No tiene información agregada</span>";
            }else {
              	$sub_array[] = "<span>".$row->LkdEmp."</span>"; 
            }
            if ($row->TwtEmp == null) {
              	$sub_array[] = "<span>No tiene información agregada</span>";
            }else {
              	$sub_array[] = "<span>".$row->TwtEmp."</span>"; 
            }
            */
	        if ($row->indicador == 0) {
              	$sub_array[] = "<span class='label label-danger'>Inhabilitado</span>";
            }else if ($row->indicador == 1) {
                $sub_array[] = "<span class='label label-success'>Habilitado</span>";
            };     
            if ($row->indicador == 0) {
                $sub_array[] = 	  '<span>'.
			                      '<div class="dropdown">'.
			                      '  <button class="btn btn-teal btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'.
			                      '    Acciones'.
			                      '  <span class="caret"></span>'.
			                      '  </button>'.
			                      '    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">'.
			                      '    <li><a class="dltemp" id="'.$row->CodEmp.'" ind="'.$row->indicador.'" ><i style="color:green;" class="glyphicon glyphicon-ok"></i> Habilitar</a></li>'.
			                      '</div>'.
			                      '</span>';

            }
            else if ($row->indicador == 1) {
                $sub_array[] =    '<span>'.
			                      '<div class="dropdown">'.
			                      '  <button class="btn btn-teal btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'.
			                      '    Acciones'.
			                      '  <span class="caret"></span>'.
			                      '  </button>'.
			                      '    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">'.
			                      '    <li><a class="updemp" name="updemp" id="'.$row->CodEmp.'"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>'.
			                      '    <li><a class="dltemp" id="'.$row->CodEmp.'" ind="'.$row->indicador.'" ><i style="color:red;" class="glyphicon glyphicon-remove"></i> Inhabilitar</a></li>'.
                            '    <li><a class="updfotemp" name="updfotemp" id="'.$row->CodEmp.'"><i style="color:blue;" class="glyphicon glyphicon-camera"></i> Change Photo</a></li>'.
                            '    <li><a class="updpswemp" name="updpswemp" id="'.$row->CodEmp.'"><i style="color:green;" class="glyphicon glyphicon-refresh"></i> Change Password</a></li>'.
			                      '    </ul>'.
			                      '</div>'.
			                      '</span>';
            } 
            $data[] = $sub_array;  
        }  
        $output = array(  
            "draw"             =>   intval($_POST["draw"]),  
            "recordsTotal"     =>   $this->mempleado->get_all_data(),  
            "recordsFiltered"  =>   $this->mempleado->get_filtered_data(),  
            "data"             =>   $data  
        );  
        echo json_encode($output); 
	}
	
	public function GetSingleEmp()  
    {  
       $output = array();  
       $this->load->model("mempleado");  
       $data = $this->mempleado->GetSingleEmp($_POST["CodEmp"]);  
       foreach($data as $row)  
       {  	
       		$output['DniEmp'] = $row->DniEmp;
            $output['NomEmp'] = $row->NomEmp;
            $output['ApeEmp'] = $row->ApeEmp; 
            $output['EmlEmp'] = $row->EmlEmp; 
            $output['MovEmp'] = $row->MovEmp; 
            $output['UsrEmp'] = $row->UsrEmp; 
            $output['FcnEmp'] = $row->FcnEmp;
            $output['CprEmp'] = $row->CprEmp;
            $output['MprEmp'] = $row->MprEmp;
            $output['TprEmp'] = $row->TprEmp;
            $output['Dr1Emp'] = $row->Dr1Emp;
            $output['Dr2Emp'] = $row->Dr2Emp;
            $output['NemEmp'] = $row->NemEmp;
            $output['IntEmp'] = $row->IntEmp;
            $output['FcbEmp'] = $row->FcbEmp;
            $output['LkdEmp'] = $row->LkdEmp;
            $output['TwtEmp'] = $row->TwtEmp;
            $output['RsmEmp'] = $row->RsmEmp;
            if($row->FotEmp != '')  
            {  
                 $output['FotEmp'] = '<img src="'.base_url().'assets/images/users/'.$row->FotEmp.'" class="img-thumbnail" width="200" height="100" /><input type="hidden" name="FotEmp" value="'.$row->FotEmp.'" />';  
            }  
            else  
            {  
                 $output['FotEmp'] = '<input type="hidden" name="FotEmp" value="" />';  
            }  
       }  
       echo json_encode($output);  
    } 

    public function InsEmp(){  
        $inserted_data = array( 
            'DniEmp'    =>   $this->input->post('InsDniEmp'), 
            'NomEmp'    =>   $this->input->post('InsNomEmp'),
            'ApeEmp'    =>   $this->input->post('InsApeEmp'),
            'EmlEmp'    =>   $this->input->post('InsEmlEmp'),
            'MovEmp'    =>   $this->input->post('InsMovEmp'),
            'GnrEmp'    =>   $this->input->post('InsGnrEmp'),
            'CodCrg'    =>   $this->input->post('InsCodCrg'),
            'CodPrf'    =>   $this->input->post('InsCodPrf'),
            'UsrEmp'    =>   $this->input->post('InsUsrEmp'),
            'PswEmp'    =>   sha1($this->input->post('InsPswEmp')),
            'FcnEmp'    =>   $this->input->post('InsFcnEmp'),
            'CprEmp'    =>   $this->input->post('InsCprEmp'),
            'MprEmp'    =>   $this->input->post('InsMprEmp'),
            'TprEmp'    =>   $this->input->post('InsTprEmp'),
            'Dr1Emp'    =>   $this->input->post('InsDr1Emp'),
            'Dr2Emp'    =>   $this->input->post('InsDr2Emp'),
            'NemEmp'    =>   $this->input->post('InsNemEmp'),
            'IntEmp'    =>   $this->input->post('InsIntEmp'),
            'FcbEmp'    =>   $this->input->post('InsFcbEmp'),
            'LkdEmp'    =>   $this->input->post('InsLkdEmp'),
            'TwtEmp'    =>   $this->input->post('InsTwtEmp'),
            'RsmEmp'    =>   $this->input->post('InsRsmEmp'),
            'FotEmp'    =>   $this->upload_image(),
            'indicador' =>   1
        );  
        $this->load->model('mempleado');  
        $this->mempleado->InsEmp($inserted_data);  
        echo 'Se inserto los datos';  
    }  

    public function upload_image()  
    {  
         if(isset($_FILES["InsFotEmp"]))  
         {  
              $InsFotEmp = explode('.', $_FILES['InsFotEmp']['name']);  
              $new_name = rand() . '.' . $InsFotEmp[1];  
              $destination = './assets/images/users/'.$new_name;  
              move_uploaded_file($_FILES['InsFotEmp']['tmp_name'], $destination);  
              return $new_name;  
         }  
    }  

    public function update_image()  
    {  
         if(isset($_FILES["EdiFotEmp"]))  
         {  
              $EdiFotEmp = explode('.', $_FILES['EdiFotEmp']['name']);  
              $new_name = rand() . '.' . $EdiFotEmp[1];  
              $destination2 = './assets/images/users/'.$new_name;  
              move_uploaded_file($_FILES['EdiFotEmp']['tmp_name'], $destination2);  
              return $new_name;  
         }  
    }  

    public function UpdEmpFot(){  
        $EdiFotEmp = '';  
        if($_FILES["EdiFotEmp"]["name"] != '')  
        {  
            $EdiFotEmp = $this->update_image();  
        }  
        else  
        {  
            $EdiFotEmp = $this->input->post("EdiFotEmp");  
        }  
        $updated_data = array(  
            'FotEmp'  =>   $EdiFotEmp  
        );  
        $this->load->model('mempleado');  
        $this->mempleado->UpdEmp($this->input->post("EdiCodEmp"), $updated_data);  
        echo 'Se actualizó la foto';  

    }  

    public function UpdPswEmp(){  
        $updated_data = array(  
            'PswEmp'    =>   sha1($this->input->post('EdtPswEmp'))
        );  
        $this->load->model('mempleado');  
        $this->mempleado->UpdEmp($this->input->post("ECodEmp"), $updated_data);  
        echo 'Se actualizó la contraseña';  

    } 

    public function UpdEmp(){  
        $updated_data = array( 
        	'DniEmp'	  =>   $this->input->post('EdtDniEmp'), 
            'NomEmp'	  =>   $this->input->post('EdtNomEmp'),
            'ApeEmp'	  =>   $this->input->post('EdtApeEmp'),
            'EmlEmp'	  =>   $this->input->post('EdtEmlEmp'),
            'MovEmp'	  =>   $this->input->post('EdtMovEmp'),
            'UsrEmp'	  =>   $this->input->post('EdtUsrEmp'),
            'FcnEmp'    =>   $this->input->post('EdtFcnEmp'),
            'CprEmp'    =>   $this->input->post('EdtCprEmp'),
            'MprEmp'    =>   $this->input->post('EdtMprEmp'),
            'TprEmp'    =>   $this->input->post('EdtTprEmp'),
            'Dr1Emp'    =>   $this->input->post('EdtDr1Emp'),
            'Dr2Emp'    =>   $this->input->post('EdtDr2Emp'),
            'NemEmp'    =>   $this->input->post('EdtNemEmp'),
            'IntEmp'    =>   $this->input->post('EdtIntEmp'),
            'FcbEmp'    =>   $this->input->post('EdtFcbEmp'),
            'LkdEmp'    =>   $this->input->post('EdtLkdEmp'),
            'TwtEmp'    =>   $this->input->post('EdtTwtEmp'),
            'RsmEmp'    =>   $this->input->post('EdtRsmEmp')
        );  
        $this->load->model('mempleado');  
        $this->mempleado->UpdEmp($this->input->post("EdtCodEmp"), $updated_data);  
        echo 'Se actualizó los datos';  
    }  

    public function getPrf(){
        $setPrf = $this->input->post('InsCodAre');
        $resultado = $this->mempleado->getPrf($setPrf);

        echo json_encode($resultado);
    }

    public function getAre(){
        $setAre = $this->input->post('indicador');
        $resultado = $this->mempleado->getAre($setAre);

        echo json_encode($resultado);
    }

    public function getCrg(){
        $setCrg = $this->input->post('indicador');
        $resultado = $this->mempleado->getCrg($setCrg);

        echo json_encode($resultado);
    }

    public function InhSingleEmp(){  
        $updated_data = array( 
            'indicador' =>   0
        );  
        $this->load->model('mempleado');  
        $this->mempleado->UpdEmp($this->input->post("CodEmp"), $updated_data);  
        echo 'Se inhabilito los datos';  
    }

    public function HabSingleEmp(){  
        $updated_data = array( 
            'indicador' =>   1
        );  
        $this->load->model('mempleado');  
        $this->mempleado->UpdEmp($this->input->post("CodEmp"), $updated_data);  
        echo 'Se habilito los datos';  
    }
}