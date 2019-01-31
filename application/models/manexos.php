<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manexos extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	var $temp = "Empleado e";
	var $tdir = "Directorio d";
	var $tare = "Area a";
	var $tcrg = "Cargo c";
	var $select_column = array("e.CodEmp", "d.CodDir", "d.AnxDir", "e.NomEmp", "e.ApeEmp", "a.NomAre", "c.NomCrg", "e.MovEmp", "e.EmlEmp", "d.indicador");  
	var $order_column = array("d.CodDir", "d.AnxDir", "e.ApeEmp", "a.NomAre", "c.NomCrg", "e.MovEmp", "e.EmlEmp", "e.indicador");  
	function make_query()  
	  {  
        $this->db->select($this->select_column);  
        $this->db->from($this->temp); 
        $this->db->join($this->tdir, 'd.CodEmp = e.CodEmp');
        $this->db->join($this->tcrg, 'c.CodCrg = e.CodCrg');
        $this->db->join($this->tare, 'a.CodAre = c.CodAre');
        if(isset($_POST["search"]["value"]))  
        {  
            $this->db->like("d.CodDir", $_POST["search"]["value"]); 
            $this->db->or_like("d.AnxDir", $_POST["search"]["value"]);   
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
            $this->db->order_by('d.CodDir', 'DESC');  
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
        $this->db->query("EXEC ups_DirList"); 
	    return $this->db->count_all_results();  
	}  

    public function GetSingleAnx($CodDir)  
    {  
        $this->db->where("d.CodDir", $CodDir); 
        $this->db->join("Empleado e", 'e.CodEmp = d.CodEmp');
        $query=$this->db->get('Directorio d');  
        return $query->result();  
    } 

    public function UpdAnx($CodDir, $data)  
    {  
        $this->db->where("CodDir", $CodDir);  
        $this->db->update("Directorio", $data);  
    }  

    public function InsAnx($data)  
    {  
       $this->db->insert('Directorio', $data);  
    }  

    public function getEmp($setEmp){
        $setEmp = $this->db->query('EXEC ups_EmpAjx '.$setEmp);
        return $setEmp->result();
    }

    public function DltSingleAnx($CodDir)  
    {  
       $this->db->where("CodDir", $CodDir);  
       $this->db->delete("Directorio");  
       //DELETE FROM users WHERE id = '$user_id'  
    } 

}
