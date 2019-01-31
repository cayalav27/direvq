<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlogin extends CI_Model
{
	public function login($UsrEmp, $PswEmp){

		$this->db->select('e.CodEmp, e.DniEmp, e.NomEmp, e.ApeEmp, e.EmlEmp, e.GnrEmp, e.FotEmp, e.MovEmp, e.UsrEmp, e.PswEmp,
						   e.CodPrf, p.NomPrf, e.CodCrg, c.NomCrg, e.indicador, e.CprEmp, e.MprEmp, e.Dr1Emp, e.Dr2Emp, e.TprEmp, e.FcnEmp, e.NemEmp, e.IntEmp, e.RsmEmp, e.FcbEmp, e.LkdEmp, e.TwtEmp, a.CodAre, a.NomAre');
		$this->db->from('Empleado e');
		$this->db->join('Perfil p', 'p.CodPrf = e.CodPrf');
		$this->db->join('Cargo c', 'c.CodCrg = e.CodCrg');
		$this->db->join('Area a', 'a.CodAre = a.CodAre');
		$this->db->where('p.indicador = 1');
		$this->db->where('c.indicador = 1');
		$this->db->where('e.indicador = 1');
		$this->db->where('e.UsrEmp',$UsrEmp);
		$this->db->where('e.PswEmp',$PswEmp);

                $result = $this->db->get();

                if ($result->num_rows()>0) {
                        return $result->row();
                }
                else{
                        return false;
                }

	}
}
