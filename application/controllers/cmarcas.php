<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cmarcas extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mmarcas');
		if (!$this->session->userdata('login')) {
			redirect(base_url());
		}
	}

	public function index(){
		
		switch($this->session->userdata('s_NomPrf')) {
		    case 'Administrador':
					$this->load->view('Layout/header');
					$this->load->view('Layout/Administrador/menu');
					$this->load->view('Administrador/Equipos/Marca/vmarcas');
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

	public function getMrc(){
		$fetch_data = $this->mmarcas->make_datatables();  
        $data = array();  
        foreach($fetch_data as $row)  
        {  
            $sub_array = array();  
            $sub_array[] = $row->CodMrc; 
            $sub_array[] = $row->NomMrc;           
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
			                      '    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">'.
			                      '    <li><a href="#"><i style="color:green;" class="glyphicon glyphicon-ok"></i> Habilitar</a></li>'.
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
			                      '    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">'.
			                      '    <li><a class="updmrc" name="updmrc" id="'.$row->CodMrc.'"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>'.
			                      '    <li><a href="#"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Inhabilitar</a></li>'.
			                      '    </ul>'.
			                      '</div>'.
			                      '</span>';
            } 
            $data[] = $sub_array;  
        }  
        $output = array(  
            "draw"             =>   intval($_POST["draw"]),  
            "recordsTotal"     =>   $this->mmarcas->get_all_data(),  
            "recordsFiltered"  =>   $this->mmarcas->get_filtered_data(),  
            "data"             =>   $data  
        );  
        echo json_encode($output); 
	}


	public function GetSingleMrc()  
    {  
       $output = array();  
       $this->load->model("mmarcas");  
       $data = $this->mmarcas->GetSingleMrc($_POST["CodMrc"]);  
       foreach($data as $row)  
       {  
            $output['NomMrc'] = $row->NomMrc;  
       }  
       echo json_encode($output);  
    } 

    public function UpdMrc(){  
        $updated_data = array(  
            'NomMrc'	=>   $this->input->post('EdtNomMrc') 
        );  
        $this->load->model('mmarcas');  
        $this->mmarcas->UpdMrc($this->input->post("EdtCodMrc"), $updated_data);  
        echo 'Se actualizó los datos';  
    }  
		
}