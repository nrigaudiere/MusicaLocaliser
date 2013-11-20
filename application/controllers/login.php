<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Login extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }
	
	public function index()
	{
		$this->load->view("header_view");
		$this->load->view("login_view");
		$this->load->view("footer_view");
	}
	
	public function connect()
	{
		$this->form_validation->set_rules('login', 'Login', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		
		$webmaster = $this->dataaccess->getLogin();
		
		if($this->form_validation->run() && $this->input->post('login') == $webmaster[0]['login'] && sha1($this->input->post('password')) == $webmaster[0]['password'])
		{
			
				$data = array('login'=>$this->input->post('login'), 'logged'=>true);
				
				$this->session->set_userdata($data);
				
				
				redirect('administrate');
				
				$this->load->view('header_view');
				$this->load->view('administrate_view');
				$this->load->view('footer_view');
			
		}
		else 
		{
			
			
			$this->index();
		}
	}
	
	public function logout()
	{
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('logged');
		$this->session->sess_destroy();
		
		redirect('search');
	}

		
	
}

?>