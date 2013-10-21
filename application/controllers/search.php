<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
     
    public function index()
    {
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
		$marker['onclick'] = 'alert(\'You just clicked at: \' + event.latLng.lat() + \', \' + event.latLng.lng());'; 
		
		$marker['icon'] = base_url().'/assets/img/misc/marker.png';
		 
		$this->googlemaps->add_marker($marker);
		
		$data['map'] = $this->googlemaps->create_map();
		 
		$this->load->view('search_view', $data);  
    }

}