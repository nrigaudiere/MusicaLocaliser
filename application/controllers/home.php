<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
     
    public function index()
    {
<<<<<<< HEAD
		$this->load->helper('url');
=======
>>>>>>> ace4e05fe83b2c955d56946afca5a634dbbe97d9
		$this->load->view('home_view');
		
    }

}