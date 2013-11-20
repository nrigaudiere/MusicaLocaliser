<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Administrate extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }
	
	public function index()
	{
		if($this->session->userdata('logged') == TRUE)
		{
			$allShops = $this->dataaccess->getAllShops();
			
			$data = array('shops'=> $allShops);
			
			$this->load->view("header_view");
			$this->load->view("administrate_view", $data);
			$this->load->view("footer_view");
		}
		else {
			redirect('home');
		}
	}
	
	public function delete($shop)
	{
		if($this->session->userdata('logged') == TRUE)
		{
			$this->dataaccess->deleteShop($shop);	
			
			$this->index();
		}
		else {
			redirect('home');
		}	
	}
	

}