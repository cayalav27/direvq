<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cdirectorio extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('mdirectorio');
	}

	public function index(){

		if ($this->session->userdata('login')) {
			switch($this->session->userdata('s_NomPrf')) {
			    case 'Administrador':
					redirect(site_url("canexos"));
			        break;
			    case 'Usuario':
						$this->load->view('Layout/header');
						$this->load->view('Layout/Usuario/menu_usu');
						$this->load->view('Usuario/Directorio/vdirectorio');
						$this->load->view('Layout/footer');
			        break;
			    case 'Supervisor':
					redirect(site_url("csegemp"));
					break;
			}
		}
		else{
			$this->load->view('Layout/header');
			$this->load->view('Layout/Usuario/menu_usu');
			$this->load->view('Usuario/Directorio/vdirectorio');
			$this->load->view('Layout/footer');
		}
					
	}

	public function getDir(){

        $fetch_data = $this->mdirectorio->make_datatables();  
        $data = array();  
        foreach($fetch_data as $row)  
        {  
            $sub_array = array();  
            $sub_array[] = $row->CodEmp; 
            $sub_array[] = "<span><i class='fa fa-user'></i> &nbsp;".$row->ApeEmp.', '.$row->NomEmp."</span>"; 
            $sub_array[] = $row->NomAre; 
            $sub_array[] = $row->NomCrg;
            if($row->AnxDir==0){
            	$sub_array[] = "No asignado";
            	}
            else {
	            $sub_array[] = "<span><i class='fa fa-phone'></i> &nbsp;".$row->AnxDir."</span>";  
	        }
            if($row->MovEmp==0){
            	$sub_array[] = "No asignado";
            }
            else {
	            $sub_array[] = "<span><i class='fa fa-mobile-phone'></i> &nbsp;".$row->MovEmp."</span>";  
	        }  
            if($row->Em2Emp==null){
            	$sub_array[] = "<span style='color:#009973;'><i class='fa fa-envelope'></i> &nbsp;<a style='color:#009973;' href='mailto:".$row->EmlEmp."'>".$row->EmlEmp."</a></span>";
            	}
            else {
	            $sub_array[] = "<span style='color:#009973;'><i class='fa fa-envelope'></i> &nbsp;<a style='color:#009973;' href='mailto:".$row->EmlEmp."'>".$row->EmlEmp."</a></span>"."<br><span style='color:#006699;'><i class='fa fa-envelope'></i> &nbsp;<a style='color:#006699;' href='mailto:".$row->Em2Emp."'>".$row->Em2Emp."</a></span>";
	        }
            $data[] = $sub_array;  
        }  
        $output = array(  
            "draw"             =>   intval($_POST["draw"]),  
            "recordsTotal"     =>   $this->mdirectorio->get_all_data(),  
            "recordsFiltered"  =>   $this->mdirectorio->get_filtered_data(),  
            "data"             =>   $data  
        );  
        echo json_encode($output); 
	}
	
}