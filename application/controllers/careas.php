<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Careas extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mareas');
		if (!$this->session->userdata('login')) {
			redirect(base_url());
		}
	}

	public function index(){

		switch($this->session->userdata('s_NomPrf')) {
		    case 'Administrador':
					$this->load->view('Layout/header');
					$this->load->view('Layout/Administrador/menu');
					$this->load->view('Administrador/Areas/vareas');
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

	public function getAre(){

		$fetch_data = $this->mareas->make_datatables();  
        $data = array();  
        foreach($fetch_data as $row)  
        {  
            $sub_array = array();  
            $sub_array[] = $row->CodAre; 
            $sub_array[] = $row->NomAre;          
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
			                      '    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">'.
			                      '    <li><a class="updare" name="updare" id="'.$row->CodAre.'"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>'.
			                      '    <li><a href="#"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Inhabilitar</a></li>'.
			                      '    </ul>'.
			                      '</div>'.
			                      '</span>';
            } 
            $data[] = $sub_array;  
        }  
        $output = array(  
            "draw"             =>   intval($_POST["draw"]),  
            "recordsTotal"     =>   $this->mareas->get_all_data(),  
            "recordsFiltered"  =>   $this->mareas->get_filtered_data(),  
            "data"             =>   $data  
        );  
        echo json_encode($output); 
	}

	public function GetSingleAre()  
    {  
       $output = array();  
       $this->load->model("mareas");  
       $data = $this->mareas->GetSingleAre($_POST["CodAre"]);  
       foreach($data as $row)  
       {  
            $output['NomAre'] = $row->NomAre;  
       }  
       echo json_encode($output);  
    } 

    public function UpdAre(){  
        $updated_data = array(  
            'NomAre'	=>   $this->input->post('EdtNomAre') 
        );  
        $this->load->model('mareas');  
        $this->mareas->UpdAre($this->input->post("EdtCodAre"), $updated_data);  
        echo 'Se actualizó los datos';  
    }  

}