<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cperfiles extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mperfiles');
		if (!$this->session->userdata('login')) {
			redirect('cdirectorio');
		}
	}

	public function index(){
		
		switch($this->session->userdata('s_NomPrf')) {
		    case 'Administrador':
					$this->load->view('Layout/header');
					$this->load->view('Layout/Administrador/menu');
					$this->load->view('Administrador/Perfiles/vperfiles');
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

	public function getPrf(){

		$fetch_data = $this->mperfiles->make_datatables();  
        $data = array();  
        foreach($fetch_data as $row)  
        {  
            $sub_array = array();  
            $sub_array[] = $row->CodPrf; 
            $sub_array[] = $row->NomPrf;          
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
			                      '    <li><a class="updprf" name="updprf" id="'.$row->CodPrf.'"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>'.
			                      '    <li><a href="#"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Inhabilitar</a></li>'.
			                      '    </ul>'.
			                      '</div>'.
			                      '</span>';
            } 
            $data[] = $sub_array;  
        }  
        $output = array(  
            "draw"             =>   intval($_POST["draw"]),  
            "recordsTotal"     =>   $this->mperfiles->get_all_data(),  
            "recordsFiltered"  =>   $this->mperfiles->get_filtered_data(),  
            "data"             =>   $data  
        );  
        echo json_encode($output); 
	}

	public function GetSinglePrf()  
    {  
       $output = array();  
       $this->load->model("mperfiles");  
       $data = $this->mperfiles->GetSinglePrf($_POST["CodPrf"]);  
       foreach($data as $row)  
       {  
            $output['NomPrf'] = $row->NomPrf;  
       }  
       echo json_encode($output);  
    } 

    public function UpdPrf(){  
        $updated_data = array(  
            'NomPrf'	=>   $this->input->post('EdtNomPrf') 
        );  
        $this->load->model('mperfiles');  
        $this->mperfiles->UpdPrf($this->input->post("EdtCodPrf"), $updated_data);  
        echo 'Se actualizó los datos';  
    }  

}