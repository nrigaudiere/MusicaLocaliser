<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Dataaccess extends CI_Model
{
	
	/* POPULATE DROPDOWN LISTS */
	
	public function getCountries()
    {
		return $this->db->select('*')
                ->from('nr_country')
				->get()
				->result();
    }
	
	public function getTypes()
    {
		$res = $this->db->select('*')
                ->from('nr_type')
				->get()
				->result();
				
		 
		$data = array();				
		
		foreach($res as $r)
			$data[] = $r->type;
		
		
		natcasesort($data);
		
		return $data;
    }
	
	/* END POPULATE DROPDOWN LISTS */
	
	/* SHOPS MANAGEMENT */
	
	public function addShop($data)
	{
		$this->db->insert('nr_shop',$data); 
	}
	
	
	
	public function getShop($id)
	{
		return $this->db->select('*')
						->from('nr_shop')
						->where('id', $id)
						->get()->result();
	}
	
	public function getAllShops()
	{
		return $this->db->select('*')
				 		->from('nr_shop')
						->get()
						->result_array();
	}
	
	public function deleteShop($id)
	{
		$this->db->delete('nr_shop', array('id' => $id));
	}
	
	/* END SHOPS MANAGEMENT */
	
	/* ADMINISTRATE */
	
	public function getLogin()
	{
		return $this->db->select('*')
						->from('nr_login')
						->get()
						->result_array();
	}
	
}