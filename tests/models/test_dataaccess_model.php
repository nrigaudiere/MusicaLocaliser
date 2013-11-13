<?php
class test_dataaccess_model extends CodeIgniterUnitTestCase
{
	protected $rand = '';

	public function __construct()
	{
		parent::__construct('Data Model');

		
		$this->load->model('dataaccess');

		$this->rand = rand(500,15000);
	}
	
	/*public function setUp()
	{
		$this->db->truncate('users');

		$insert_data = array(
			    'user_email' => 'demo'.$this->rand.'@demo.com',
			    'user_username' => 'test_'.$this->rand,
			    'user_password' => 'demo_'.$this->rand,
			    'user_join_date' => time(),
				'user_group'	=> 1
			);
		$user_id = $this->users_model->add_user($insert_data);
		$this->user = $this->users_model->get_user($user_id);
    }*/

    public function tearDown()
	{

    }

	/*public function test_included()
	{
		$this->assertTrue(class_exists('users_model'));
	}*/
	
	public function test_addShop()
	{
		$insert = array('name'=> 'SimpleTest',
						'address' => '9 Street',
						'zip' => '75000',
						'city' => 'Paris',
						'country' => 'France',
						'description' => 'DESCRIPTION',
						'type' => 'Sonorisation',
						'latitude' => '10',
						'longitude' => '20',
						'path' => '/assets/img/template.png');
						
		$this->dataaccess->addShop($insert);
		
		$numRows = $this->db->count_all('nr_shop');
		
		$shop = $this->dataaccess->getShop($numRows);
		
		
	}
	
	public function test_getAllShops()
	{
		$allShops = $this->dataaccess->getAllShops();	
		
		$numRows = $this->db->count_all('nr_shop');
		
		$numShops = count($allShops);
		
		$this->assertEqual($numRows, $numShops, 'All shops caught');
		
	}
	
	public function test_getCountries()
	{
		$countries = $this->dataaccess->getCountries();
		
		$res = count($countries);
		
		$this->assertEqual($res, 239, 'countries = 239');
		
	}
}
?>