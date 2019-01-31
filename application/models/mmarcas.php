<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mmarcas extends CI_Model
{
    
    function __construct()
    {
        parent::__construct();
    }
        
    var $tmrc = "Marca";
    var $select_column = array("CodMrc", "NomMrc", "indicador");  
    var $order_column = array("CodMrc", "NomMrc", "indicador");  
    function make_query()  
      {  
        $this->db->select($this->select_column);  
        $this->db->from($this->tmrc);
        if(isset($_POST["search"]["value"]))  
        {  
            $this->db->like("CodMrc", $_POST["search"]["value"]); 
            $this->db->or_like("NomMrc", $_POST["search"]["value"]); 
            $this->db->or_like("indicador", $_POST["search"]["value"]);  
        }  
        if(isset($_POST["order"]))  
        {  
            $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
        }  
        else  
        {  
            $this->db->order_by('CodMrc', 'DESC');  
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
        $this->db->query("EXEC ups_PrfList"); 
        return $this->db->count_all_results();  
    }  

    function GetSingleMrc($CodMrc)  
    {  
        $this->db->where("CodMrc", $CodMrc);  
        $query=$this->db->get('Marca');  
        return $query->result();  
    } 

    function UpdMrc($CodMrc, $data)  
    {  
        $this->db->where("CodMrc", $CodMrc);  
        $this->db->update("Marca", $data);  
    }  

}
