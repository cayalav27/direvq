<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mcargo extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	var $tare = "Area a";
	var $tcrg = "Cargo c";
	var $select_column = array("c.CodCrg", "c.NomCrg", "a.NomAre", "c.indicador");  
	var $order_column = array("c.CodCrg", "c.NomCrg", "a.NomAre", "c.indicador");  
	function make_query()  
	  {  
        $this->db->select($this->select_column);  
        $this->db->from($this->tcrg);
        $this->db->join($this->tare, 'a.CodAre = c.CodAre');
        if(isset($_POST["search"]["value"]))  
        {  
            $this->db->like("c.CodCrg", $_POST["search"]["value"]); 
            $this->db->or_like("c.NomCrg", $_POST["search"]["value"]); 
            $this->db->or_like("a.NomAre", $_POST["search"]["value"]);  
            $this->db->or_like("c.indicador", $_POST["search"]["value"]);  
        }  
        if(isset($_POST["order"]))  
        {  
            $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
        }  
        else  
       	{  
            $this->db->order_by('c.CodCrg', 'DESC');  
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
        $this->db->query("EXEC ups_CrgList"); 
	    return $this->db->count_all_results();  
	}  


    function GetSingleCrg($CodCrg)  
    {  
        $this->db->where("CodCrg", $CodCrg);  
        $query=$this->db->get('Cargo');  
        return $query->result();  
    } 

    function UpdCrg($CodCrg, $data)  
    {  
        $this->db->where("CodCrg", $CodCrg);  
        $this->db->update("Cargo", $data);  
    }  

}
