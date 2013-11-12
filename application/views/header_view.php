<!DOCTYPE html>
<html lang="en">
	<head>
		
		<title>MusicaLocaliser</title>
	
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="description" content="" />
		<meta name="author" content="Nicolas Rigaudiere" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		
<<<<<<< HEAD
		<link rel="shortcut icon" href="<?php echo base_url()?>assets/img/misc/favicon.ico"/>
		<link href="<?php echo base_url();?>assets/css/design.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url();?>assets/css/jquery-ui.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		
		<script src= "<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
		
  
=======
		<link rel="shortcut icon" href="<?php echo site_url("assets/img/misc/favicon.ico")?>"/>
		<link href="<?php echo base_url();?>assets/styles/design.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url();?>assets/styles/jquery-ui.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
		
		<script src= "<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
		
    	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3E3TQJgA53dDBzGAL8_iANl91a4t23sA&sensor=false"></script>
	    <!--<script type="text/javascript">
	      function initialize() {

 var lat = 0;
 var long = 0;
	
  var myLatlng = new google.maps.LatLng(lat,long);
  var mapOptions = {
    zoom: 12,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.HYBRID
  }
  
  
  document.getElementById("lat").value = lat;
  document.getElementById("long").value = long;
  

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var contentString = '<h3>Marker position is:</h3>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Localisation',
	  draggable :true
  });
  
  google.maps.event.addListener(map, 'click', function(e) {
		    placeMarker(e.latLng, map, marker);
		  });
  
  google.maps.event.addListener(marker, 'click', function() {
  	
  	var latLng = marker.getPosition();
 		  infowindow.setContent('<b>Coordonn&eacute;es:</b><br>' +
     	  latLng.lat() + ', ' + latLng.lng());
    infowindow.open(map,marker);
  });
  
  google.maps.event.addListener(marker, 'drag', function(e) {
  	
  		  var latLng = marker.getPosition();
 		  infowindow.setContent('<h4>Emplacement :</h4>' +
     	  latLng.lat() + ', ' + latLng.lng());
     	  placeMarker(e.latLng, map, marker);
  });
  
}

function placeMarker(position, map, marker) 
		{
			var inputLatitude = document.getElementById("lat");
			var inputLongitude = document.getElementById("long");
		
		    marker.setPosition(position); 
		  //map.panTo(position);
		  
		  inputLatitude.value=position.lat();
  		  inputLongitude.value=position.lng();
		  
		}

google.maps.event.addDomListener(window, 'load', initialize);
	    </script>
    	
		<style type="text/css">
     	 html { height: 100% }
    	 body { height: 100%; margin: 0; padding: 0 }
   	 	 #map-canvas { height: 100% }
		</style>
	-->
		
>>>>>>> ace4e05fe83b2c955d56946afca5a634dbbe97d9
	</head>
	<body>
		<a name="top"></a>
		<header>
			
<<<<<<< HEAD
			<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo.png" /> </a>
		</header>
		
		<div class="line">
			<br><br>
		</div>
		
=======
			<a href="<?php echo base_url();?>"><img src="<?php echo site_url("assets/img/logo.png");?>" /> </a>
		</header>
		
>>>>>>> ace4e05fe83b2c955d56946afca5a634dbbe97d9
	