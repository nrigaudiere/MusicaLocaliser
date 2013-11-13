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
	
	public function deleteShop($name)
	{
		$this->db->delete('nr_shop', array('name' => $name));
	}
}