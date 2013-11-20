<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Contact extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
    }
     
	
	function index()
	{
		$this->load->view('header_view');
		$this->contact();
	}
	
	function contact()
	{
		$this->form_validation->set_rules('nom','Name','trim|required|xss_clean');
		$this->form_validation->set_rules('email','Email','trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('sujet','Subject','trim|required|xss_clean');
		$this->form_validation->set_rules('message','Message','trim|required|xss_clean');
		
		if($this->form_validation->run())
		{
			$data = array(
			'nom'=>$this->input->post('nom'),
			'email'=>$this->input->post('email'),
			'sujet'=> $this->input->post('sujet'),
			'message'=> $this->input->post('message')
			);
			
			$config = $this->config();
			
			$this->load->library('email', $config);
			
			/*Envoi d'email de confirmation*/
			$this->email->from($this->input->post('email'), $this->input->post('nom'));
			$this->email->to('nicolas.rigaudiere@gmail.com', 'Admin');
			$this->email->subject($this->input->post('sujet'));
			$this->email->message($this->input->post('message'));
			
			$b = $this->email->send();
			
						
			$this->load->view('home_view');
			$this->load->view('footer_view');
			
		}
		else 
			{
				
				$this->load->view('contact_view');
				$this->load->view('footer_view');
			}

				
	}

	public function config()
	{
		$config = Array(
		  'protocol' => 'smtp',
		  'smtp_host' => 'ssl://smtp.googlemail.com',
		  'smtp_port' => 465,
		  'smtp_user' => 'nicolas.rigaudiere@gmail.com', // change it to yours
		  'smtp_pass' => '$RNRsw26!', // change it to yours
		  'mailtype' => 'html',
		  'charset' => 'iso-8859-1',
		  'wordwrap' => TRUE
		 );
		  
		  return $config;
	} 
}