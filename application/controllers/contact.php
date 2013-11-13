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
		$this->form_validation->set_rules('nom','Nom','trim|required|xss_clean');
		$this->form_validation->set_rules('email','Email','trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('sujet','Sujet','trim|required|xss_clean');
		$this->form_validation->set_rules('message','Votre Message','trim|required|xss_clean');
		
		if($this->form_validation->run())
		{
			$data = array(
			'nom'=>$this->input->post('nom'),
			'email'=>$this->input->post('email'),
			'sujet'=> $this->input->post('sujet'),
			'message'=> $this->input->post('message')
			);
			
			/*Envoi d'email de confirmation*/
			$this->email->from($this->input->post('email'), $this->input->post('nom'));
			$this->email->to('nrigaudiere@percephone.com', 'Admin');
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
}