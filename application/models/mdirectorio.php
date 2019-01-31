<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdirectorio extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	var $temp = "Empleado e";
	var $tdir = "Directorio d";
	var $tare = "Area a";
	var $tcrg = "Cargo c";
	var $select_column = array("e.CodEmp", "d.CodDir", "d.AnxDir", "e.NomEmp", "e.ApeEmp", "a.NomAre", "c.NomCrg", "e.MovEmp", "e.EmlEmp", "e.Em2Emp", "d.indicador");  
	var $order_column = array("e.CodEmp","e.ApeEmp", "a.NomAre", "c.NomCrg", "d.AnxDir",  "e.MovEmp", "e.EmlEmp", "e.Em2Emp", "e.indicador");  
	function make_query()  
	  {  
        $this->db->select($this->select_column);  
        $this->db->from($this->temp); 
        $this->db->join($this->tdir, 'd.CodEmp = e.CodEmp');
        $this->db->join($this->tcrg, 'c.CodCrg = e.CodCrg');
        $this->db->join($this->tare, 'a.CodAre = c.CodAre');
        $this->db->where('e.indicador = 1'); 
        if(isset($_POST["search"]["value"]))  
        {  
            $this->db->like("e.CodEmp", $_POST["search"]["value"]); 
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
            $this->db->order_by('e.CodEmp', 'DESC');  
        }  
	}  
	function make_datatables(){  
        $this->make_query();  
        if($_POST["length"] != -1)  
        {  
            $this->db->limit($_POST['length'], $_POST['start']);  
        }  
        $query = $this->db->get();  
        return $query->result();  
	}  
	function get_filtered_data(){  
        $this->make_query();  
        $query = $this->db->get();  
        return $query->num_rows();  
	}       
	function get_all_data()  
	{  
        $this->db->query("EXEC ups_DirList");
	    return $this->db->count_all_results();  
	}  

}
