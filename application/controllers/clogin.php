<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clogin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('mlogin');
	}

	public function index(){

		if ($this->session->userdata('login')) {
			switch($this->session->userdata('s_NomPrf')) {
			    case 'Administrador':
					redirect(site_url("canexos"));
			        break;
			    case 'Usuario':
					redirect(base_url());
			        break;
			    case 'Supervisor':
					redirect(site_url("csegemp"));
					break;
			}
		}
		else{
			$this->load->view('Login/vlogin');
		}
					
	}

	public function login(){
		$UsrEmp = $this->security->xss_clean(strip_tags($this->input->post('TxtUsrEmp')));
		$PswEmp = sha1($this->security->xss_clean(strip_tags($this->input->post('TxtPswEmp'))));

		$res = $this->mlogin->login($UsrEmp, $PswEmp);

		if($res){
			$data = [
				"s_CodEmp" => $res->CodEmp,
        		"s_DniEmp" => $res->DniEmp,
        		"s_NomEmp" => $res->NomEmp,
        		"s_ApeEmp" => $res->ApeEmp,
        		"s_EmlEmp" => $res->EmlEmp,
        		"s_GnrEmp" => $res->GnrEmp,
        		"s_FotEmp" => $res->FotEmp,
        		"s_MovEmp" => $res->MovEmp,
        		"s_UsrEmp" => $res->UsrEmp,
        		"s_PswEmp" => $res->PswEmp,
        		"s_CodPrf" => $res->CodPrf,
        		"s_NomPrf" => $res->NomPrf,
        		"s_CodCrg" => $res->CodCrg,
        		"s_NomCrg" => $res->NomCrg,
				"s_CprEmp" => $res->CprEmp, 
				"s_MprEmp" => $res->MprEmp, 
				"s_Dr1Emp" => $res->Dr1Emp, 
				"s_Dr2Emp" => $res->Dr2Emp, 
				"s_TprEmp" => $res->TprEmp, 
				"s_FcnEmp" => $res->FcnEmp, 
				"s_NemEmp" => $res->NemEmp, 
				"s_IntEmp" => $res->IntEmp, 
				"s_RsmEmp" => $res->RsmEmp, 
				"s_FcbEmp" => $res->FcbEmp, 
				"s_LkdEmp" => $res->LkdEmp, 
				"s_TwtEmp" => $res->TwtEmp, 
				"s_CodAre" => $res->CodAre, 
				"s_NomAre" => $res->NomAre,
				"login" => TRUE
			];

			switch ($this->session->userdata('s_NomPrf')) {
				case 'Administrador':
					echo "administrador";
					break;
				
				case 'Usuario':
					echo "usuario";
					break;

				case 'Supervisor':
					echo "supervisor";
					break;
			}

			$this->session->set_userdata($data);

		}
		else{
			echo "error";
		}

	}

	public function logout(){
		$this->session->sess_destroy();
	}

}