<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mareas extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	var $tprf = "Area";
	var $select_column = array("CodAre", "NomAre", "indicador");  
	var $order_column = array("CodAre", "NomAre", "indicador");  
	function make_query()  
	  {  
        $this->db->select($this->select_column);  
        $this->db->from($this->tprf);
        if(isset($_POST["search"]["value"]))  
        {  
            $this->db->like("CodAre", $_POST["search"]["value"]); 
            $this->db->or_like("NomAre", $_POST["search"]["value"]); 
            $this->db->or_like("indicador", $_POST["search"]["value"]);  
        }  
        if(isset($_POST["order"]))  
        {  
            $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
        }  
        else  
       	{  
            $this->db->order_by('CodAre', 'DESC');  
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
        $this->db->query("EXEC ups_AreList"); 
	    return $this->db->count_all_results();  
	}  

    function GetSingleAre($CodAre)  
    {  
        $this->db->where("CodAre", $CodAre);  
        $query=$this->db->get('Area');  
        return $query->result();  
    } 

    function UpdAre($CodAre, $data)  
    {  
        $this->db->where("CodAre", $CodAre);  
        $this->db->update("Area", $data);  
    }  
    
}
