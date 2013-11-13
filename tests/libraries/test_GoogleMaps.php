<?php
class test_GoogleMaps extends CodeIgniterUnitTestCase
{
	protected $rand = '';

	public function __construct()
	{
		parent::__construct('Google Maps');

		
		$this->load->library('Googlemaps');

		$this->rand = rand(500,15000);
	}
	
	public function test_initialize()
	{
		$config = array();
		$config['center'] = 'auto';  
		$config['zoom'] = '12'; 
			
		$this->googlemaps->initialize($config);  
		
		$data = $this->googlemaps->create_map();
		
		$num = count($data);
		
		$this->assertEqual($num, 3, 'Initialization done');
	}
	
	public function test_is_lat_long()
	{
		$input = '0, 0';
		$res = $this->googlemaps->is_lat_long($input);
		$this->assertEqual($res, TRUE, 'Is latitude/longitude');
		
	}
	
}
	