<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mempleado extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	var $temp = "Empleado e";
	var $tare = "Area a";
	var $tcrg = "Cargo c";
	var $select_column = array("e.CodEmp", "e.DniEmp", "e.NomEmp", "e.ApeEmp", "e.EmlEmp", "e.GnrEmp", "e.FotEmp", "e.MovEmp", "a.NomAre", "c.NomCrg", "e.indicador", "e.CprEmp", "e.MprEmp", "e.Dr1Emp", "e.Dr2Emp", "e.TprEmp", "e.FcnEmp", "e.NemEmp", "e.IntEmp", "e.RsmEmp", "e.FcbEmp", "e.LkdEmp", "e.TwtEmp");  
	var $order_column = array("e.CodEmp", "e.DniEmp", "e.ApeEmp", "a.NomAre", "c.NomCrg", "e.MovEmp", "e.EmlEmp", "e.indicador");  
	function make_query()  
	  {  
        $this->db->select($this->select_column);  
        $this->db->from($this->temp);
        $this->db->join($this->tcrg, 'c.CodCrg = e.CodCrg');
        $this->db->join($this->tare, 'a.CodAre = c.CodAre');
        if(isset($_POST["search"]["value"]))  
        {  
            $this->db->like("e.CodEmp", $_POST["search"]["value"]);  
            $this->db->or_like("e.DniEmp", $_POST["search"]["value"]);
            $this->db->or_like("e.ApeEmp", $_POST["search"]["value"]);
            $this->db->or_like("e.NomEmp", $_POST["search"]["value"]);
            $this->db->or_like("a.NomAre", $_POST["search"]["value"]);  
            $this->db->or_like("c.NomCrg", $_POST["search"]["value"]); 
            $this->db->or_like("e.MovEmp", $_POST["search"]["value"]);  
            $this->db->or_like("e.EmlEmp", $_POST["search"]["value"]);  
        }  
        if(isset($_POST["order"]))  
        {  
            $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
        }  
        else  
       	{  
            $this->db->order_by('e.CodEmp', 'DESC');  
        }  
	}  
	public function make_datatables(){  
        $this->make_query();  
        if($_POST["length"] != -1)  
        {  
            $this->db->limit($_POST['length'], $_POST['start']);  
        }  
        $query = $this->db->get();  
        return $query->result();  
	}  
	public function get_filtered_data(){  
        $this->make_query();  
        $query = $this->db->get();  
        return $query->num_rows();  
	}       
	public function get_all_data()  
	{  
        $this->db->query("EXEC ups_EmpList");
	    return $this->db->count_all_results();  
	}  

    public function GetSingleEmp($CodEmp)  
    {  
        $this->db->where("CodEmp", $CodEmp);  
        $query=$this->db->get('Empleado');  
        return $query->result();  
    } 

    public function UpdEmp($CodEmp, $data)  
    {  
        $this->db->where("CodEmp", $CodEmp);  
        $this->db->update("Empleado", $data);  
    }  

    public function InsEmp($data)  
    {  
       $this->db->insert('Empleado', $data);  
    }  

    public function getPrf($setPrf){
        $setPrf = $this->db->query('EXEC ups_PrfAjx '.$setPrf);
        return $setPrf->result();
    }

    public function getAre($setAre){
        $setAre = $this->db->query('EXEC ups_AreAjx '.$setAre);
        return $setAre->result();
    }

    public function getCrg($setCrg){
        $setCrg = $this->db->query('EXEC ups_CrgAjx '.$setCrg);
        return $setCrg->result();
    }

}
