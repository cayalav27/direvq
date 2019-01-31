<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Canexos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('manexos');
		if (!$this->session->userdata('login')) {
			redirect(base_url());
		}
	}

	public function index(){

		switch($this->session->userdata('s_NomPrf')) {
		    case 'Administrador':
					$this->load->view('Layout/header');
					$this->load->view('Layout/Administrador/menu');
					$this->load->view('Administrador/Anexos/vanexos');
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

	public function getAnx(){

		$fetch_data = $this->manexos->make_datatables();  
        $data = array();  
        foreach($fetch_data as $row)  
        {  
            $sub_array = array();  
            $sub_array[] = $row->CodDir; 
            $sub_array[] = "<span><i class='fa fa-phone'></i> &nbsp;".$row->AnxDir."</span>";
            $sub_array[] = "<span><i class='fa fa-user'></i> &nbsp;".$row->ApeEmp.', '.$row->NomEmp."</span>"; 
            $sub_array[] = $row->NomAre; 
            $sub_array[] = $row->NomCrg; 
            $sub_array[] = "<span><i class='fa fa-mobile-phone'></i> &nbsp;".$row->MovEmp."</span>";           
            $sub_array[] = "<span style='color:#006699;'><i class='fa fa-envelope'></i> &nbsp;<a style='color:#006699;' href='mailto:".$row->EmlEmp."'>".$row->EmlEmp."</a></span>"; 
	        if ($row->indicador == 0) {
              	$sub_array[] = "<span class='label label-danger'>Inhabilitado</span>";
            }else if ($row->indicador == 1) {
                $sub_array[] = "<span class='label label-success'>Habilitado</span>";
            };     
            if ($row->indicador == 0) {
                $sub_array[] = 	  '<span>'.
			                      '<div class="dropdown">'.
			                      '  <button class="btn btn-teal btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'.
			                      '    Acciones'.
			                      '  <span class="caret"></span>'.
			                      '  </button>'.
			                      '    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">'.
			                      '    <li><a class="dltanx" id="'.$row->CodDir.'"><i style="color:green;" class="glyphicon glyphicon-ok"></i> Habilitar</a></li>'.
			                      '</div>'.
			                      '</span>';

            }
            else if ($row->indicador == 1) {
                $sub_array[] =    '<span>'.
			                      '<div class="dropdown">'.
			                      '  <button class="btn btn-teal btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'.
			                      '    Acciones'.
			                      '  <span class="caret"></span>'.
			                      '  </button>'.
			                      '    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">'.
			                      '    <li><a class="updanx" name="updanx" id="'.$row->CodDir.'"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>'.
			                      '    <li><a class="dltanx" id="'.$row->CodDir.'"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Eliminar</a></li>'.
			                      '    </ul>'.
			                      '</div>'.
			                      '</span>';
            } 
            $data[] = $sub_array;  
        }  
        $output = array(  
            "draw"             =>   intval($_POST["draw"]),  
            "recordsTotal"     =>   $this->manexos->get_all_data(),  
            "recordsFiltered"  =>   $this->manexos->get_filtered_data(),  
            "data"             =>   $data  
        );  
        echo json_encode($output); 
	}

	public function GetSingleAnx()  
    {  
       $output = array();  
       $this->load->model("manexos");  
       $data = $this->manexos->GetSingleAnx($_POST["CodDir"]);  
       foreach($data as $row)  
       {  
            $output['AnxDir'] = $row->AnxDir;  
            $output['ApeEmp'] = $row->ApeEmp;  
       }  
       echo json_encode($output);  
    } 

    public function DltSingleAnx()  
    {  
       $this->load->model("manexos");  
       $this->manexos->DltSingleAnx($_POST["CodDir"]);  
       echo 'Se elimino anexo';  
    }  

    public function UpdAnx(){  
        $updated_data = array(  
            'AnxDir'	=>   $this->input->post('EdtAnxDir') 
        );  
        $this->load->model('manexos');  
        $this->manexos->UpdAnx($this->input->post("EdtCodDir"), $updated_data);  
        echo 'Se actualizó los datos';  
    }  

    public function InsAnx(){  
        $insert_data = array(  
            'AnxDir'	=>   $this->input->post('InsAnxDir'),
            'CodEmp'	=>   $this->input->post('InsCodEmp'),
            'indicador' =>   1
        );  
        $this->load->model('manexos');  
        $this->manexos->InsAnx($insert_data);  
        echo 'Se registro los datos';  
    }  

    public function getEmp(){
        $setEmp = $this->input->post('indicador');
        $resultado = $this->manexos->getEmp($setEmp);

        echo json_encode($resultado);
    }
    
}