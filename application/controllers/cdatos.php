<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cdatos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mempleado');
		if (!$this->session->userdata('login')) {
			redirect(base_url());
		}
	}

	public function indexAdm(){

		switch($this->session->userdata('s_NomPrf')) {
		    case 'Administrador':
					$this->load->view('Layout/header');
					$this->load->view('Layout/Administrador/menu');
					$this->load->view('Administrador/MiPerfil/vdatos');
					$this->load->view('Layout/footer');
		        break;
		    case 'Usuario':
				redirect(site_url("Cdatos/indexUsu"));
		        break;
		    case 'Supervisor':
				redirect(site_url("Cdatos/indexSup"));
				break;
		}
	}

	public function indexUsu(){

		switch($this->session->userdata('s_NomPrf')) {
		    case 'Administrador':
					redirect(site_url("Cdatos/indexAdm"));
		        break;
		    case 'Usuario':
					$this->load->view('Layout/header');
					$this->load->view('Layout/Usuario/menu_mpf');
					$this->load->view('Usuario/MiPerfil/vdatos');
					$this->load->view('Layout/footer');
		        break;
		    case 'Supervisor':
				redirect(site_url("Cdatos/indexSup"));
				break;
		}
	}

	public function indexSup(){

		switch($this->session->userdata('s_NomPrf')) {
		    case 'Administrador':
					redirect(site_url("Cdatos/indexAdm"));
		        break;
		    case 'Usuario':
					redirect(site_url("Cdatos/indexUsu"));
		        break;
		    case 'Supervisor':
					$this->load->view('Layout/header');
					$this->load->view('Layout/Supervisor/menu_mpf');
					$this->load->view('Supervisor/MiPerfil/vdatos');
					$this->load->view('Layout/footer');
				break;
		}
	}

    public function UpdEmpCor(){  
        $updated_data = array( 
            'EmlEmp'	=>   $this->input->post('TxtEmlEmp'),
            'MovEmp'	=>   $this->input->post('TxtMovEmp')
        );  
        $this->load->model('mempleado');  
        $this->mempleado->UpdEmp($this->input->post("TxtCorCodEmp"), $updated_data);  
        echo 'Se actualizó los datos';  
    } 

	public function UpdEmpPrs(){  
        $updated_data = array( 
        	'DniEmp'	=>   $this->input->post('TxtDniEmp'), 
            'NomEmp'	=>   $this->input->post('TxtNomEmp'),
            'ApeEmp'	=>   $this->input->post('TxtApeEmp'),
            'FcnEmp'    =>   $this->input->post('TxtFcnEmp'),
            'CprEmp'    =>   $this->input->post('TxtCprEmp'),
            'MprEmp'    =>   $this->input->post('TxtMprEmp'),
            'TprEmp'    =>   $this->input->post('TxtTprEmp'),
            'Dr1Emp'    =>   $this->input->post('TxtDr1Emp'),
            'Dr2Emp'    =>   $this->input->post('TxtDr2Emp'),
            'NemEmp'    =>   $this->input->post('TxtNemEmp'),
            'IntEmp'    =>   $this->input->post('TxtIntEmp'),
            'FcbEmp'    =>   $this->input->post('TxtFcbEmp'),
            'LkdEmp'    =>   $this->input->post('TxtLkdEmp'),
            'TwtEmp'    =>   $this->input->post('TxtTwtEmp'),
            'RsmEmp'    =>   $this->input->post('TxtRsmEmp')
        );  
        $this->load->model('mempleado');  
        $this->mempleado->UpdEmp($this->input->post("TxtPrsCodEmp"), $updated_data);  
        echo 'Se actualizó los datos';  
    }  

    public function UpdEmpFot(){  
        $TxtFotEmp = '';  
        if($_FILES["TxtFotEmp"]["name"] != '')  
        {  
            $TxtFotEmp = $this->update_image();  
        }  
        else  
        {  
            $TxtFotEmp = $this->input->post("TxtFotEmp");  
        }  
        $updated_data = array(  
            'FotEmp'  =>   $TxtFotEmp  
        );  
        $this->load->model('mempleado');  
        $this->mempleado->UpdEmp($this->input->post("TxtFotCodEmp"), $updated_data);  
        echo 'Se actualizó la foto';  

    } 

    public function UpdEmpPsw(){  
        $updated_data = array(  
            'PswEmp'    =>   sha1($this->input->post('TxtPswEmp'))
        );  
        $this->load->model('mempleado');  
        $this->mempleado->UpdEmp($this->input->post("TxtPswCodEmp"), $updated_data);  
        echo 'Se actualizó la contraseña';  

    } 

    public function update_image()  
    {  
         if(isset($_FILES["TxtFotEmp"]))  
         {  
              $TxtFotEmp = explode('.', $_FILES['TxtFotEmp']['name']);  
              $new_name = rand() . '.' . $TxtFotEmp[1];  
              $destination2 = './assets/images/users/'.$new_name;  
              move_uploaded_file($_FILES['TxtFotEmp']['tmp_name'], $destination2);  
              return $new_name;  
         }  
    } 

}