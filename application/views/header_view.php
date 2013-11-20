<!DOCTYPE html>
<html lang="en">
	<head>
		
		<title>MusicaLocaliser</title>
	
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="description" content="" />
		<meta name="author" content="Nicolas Rigaudiere" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		
		<link rel="shortcut icon" href="<?php echo base_url()?>assets/img/misc/favicon.ico"/>
		<link href="<?php echo base_url();?>assets/css/design.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url();?>assets/css/jquery-ui.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		
		<script src= "<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
		
  
	</head>
	<body>
		<a name="top"></a>
		<header>
			<div class="row-fluid">
				<div class="span1"></div>
				<div class="span6">
					<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo.png" width="35%"/> </a>
				</div>
				<div class="span5 text-right">
					<?php $session_id = $this->session->userdata('logged');
						if($session_id == true): ?>
						
						<a href="<?php echo base_url()?>administrate" id="logged">Administrate</a>
						<a href="<?php echo base_url()?>login/logout" id="logged">Log Out</a>
						
						<?php else:?>
							
							<a href="<?php echo base_url()?>login" id="login">Login</a>
						
						<?php endif;?>
				</div>
			<div id="name">
			  
			</div>>
		
		</header>
		
		<div class="line">
			<br><br>
		</div>
		
	