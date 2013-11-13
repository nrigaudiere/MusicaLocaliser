<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Add extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }
     
    public function index()
    {
    	$country = $this->dataaccess->getCountries();
		
		$data['country'] = $country;
		
    	$this->load->view('header_view');
		$this->load->view('add_view', $data);
		$this->load->view('footer_view');
    }
	
	public function newshop()
	{
		$config['upload_path']= './assets/img/shoppictures';
		$config['allowed_types']= 'jpg|png|gif|bmp|jpeg';
		$config['max_size']= '150000';
		
		$this->load->library('upload', $config);
		
		
		if($this->upload->do_upload("image"))
		{
			
			$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('address', 'Address', 'trim|xss_clean|required');
			$this->form_validation->set_rules('zip', 'Zip Code', 'trim|required|xss_clean|numeric|max_length[5]');
			$this->form_validation->set_rules('city', 'City', 'trim|xss_clean');
			
			$this->form_validation->set_rules('country', 'Country', 'trim|required|xss_clean');
			$this->form_validation->set_rules('description', 'Description', 'trim|required|xss_clean');
			$this->form_validation->set_rules('type', 'Type', 'trim|xss_clean|required');
			
			
			//Check new form
			if($this->form_validation->run())
		 	{
			
				$upData = $this->upload->data();
				
				$path = explode('/MusicaLocaliser/', $upData['full_path']);
				
				
		 		$data = array(
				'name'=>$this->input->post('name'),
				'address'=>$this->input->post('address'),
				'zip'=> $this->input->post('zip'),
				'city'=> $this->input->post('city'),
				'country'=> $this->input->post('country'),
				'description'=> $this->input->post('description'),
				'type'=> $this->input->post('type'),
				'path' => $path[1]
				);
				
				$dataTest = array('updata' => $path);
				
				
				$this->dataaccess->addShop($data);
				
				/* RESIZE IMAGE */
				
				
				$config['image_library'] = 'gd2';
				$config['source_image'] = $path[1];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = TRUE;
				$config['width'] = 70;
				$config['height'] = 70;
				$config['master_dim'] = 'auto';
				
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				
								
				redirect(site_url("/search"));
			}else{
				$this->index();
			}
			
		}
	}			

}