<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Dataaccess extends CI_Model
{
	public function getCountries()
    {
		return $this->db->select('*')
                ->from('nr_country')
				->get()
				->result();
    }
	
	public function addShop($data)
	{
		$this->db->insert('nr_shop',$data); 
	}
	
	public function getShop()
	{
		
	}
	
	public function getAllShops()
	{
		return $this->db->select('*')
				 		->from('nr_shop')
						->get()
						->result_array();
	}
}