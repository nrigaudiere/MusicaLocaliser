<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
     
    public function index()
    {
    	/* MAP */
		
    	$this->load->library('Googlemaps');
		 
		$config = array();
		$config['center'] = 'auto';  
		$config['zoom'] = '12'; 
		$config['onboundschanged'] =  
			'if (!centreGot) 
			{
				var mapCentre = map.getCenter();
				marker_0.setOptions({
					position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng()) 
									});
			}	
			centreGot = true;';
			
		$this->googlemaps->initialize($config);  
		
		
		$marker = array(); 
		
		$marker['icon'] = base_url().'/assets/img/misc/marker.png';
		$marker['clickable'] = false;
		 
		$this->googlemaps->add_marker($marker);
		
		
		/* END MAP */
		
		/* SHOPS */
		
		$data['shops'] = $this->dataaccess->getAllShops();
		
		foreach ($data['shops'] as $shop) 
		{
			$marker = array(); 
			//$marker['position'] = $shop['latitude'] . ',' . $shop['longitude'];
			$marker['position'] = $shop['address'] .',' . $shop['zip'] . ',' . $shop['city'] . ',' . $shop['country'];
			
			$marker['icon'] = base_url() . $shop['path'];
			$marker['infowindow_content'] = "<b>" .$shop['name'] ."</b><br>" . 
											$shop['address'] ."<br>"  . 
											$shop['zip'] .", "  . 
											$shop['city'] ."<br>"  . 
											$shop['country'] ."<br><br>"  . 
											$shop['description'];
			$this->googlemaps->add_marker($marker);
			
		}
		
			
		/*END SHOPS*/
		
		
		$data['map'] = $this->googlemaps->create_map();
		$data['path'] = $shop['path'];
		
		$this->load->view('search_view', $data);  
		$this->load->view('footer_view');
    }
	
	

}