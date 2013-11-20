<!DOCTYPE html>
<html lang="en">
	<head>
		<title>MusicaLocaliser</title>
	
		<link rel="shortcut icon" href="<?php echo base_url()?>assets/img/misc/favicon.ico"/>		
		<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url();?>assets/css/design.css" rel="stylesheet" type="text/css">
		<script src= "<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
				
		<script type="text/javascript">
			var centreGot = false;
		</script>
		<?php echo $map['js'];?>
	</head>

	<body>
		<div class="container-fluid">
			
			<!-- HEADER -->
			<div class="row-fluid">
				
				<div class="span1"></div>
				<div class="span6">
					<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo.png" width="35%" /> </a>
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
				
			</div>
			
			<!-- INNER LINE -->
			<div class="row-fluid">
				<div class="span12"></div>
			</div>
			
			
		<div class="line">
			<br><br>
			
			<!-- MAP -->
			
			<div class="row-fluid" id="title">
				<div class="span3"></div>
				<div class="span6 text-center" > SEARCH A SHOP </div>
				<div class="span3"></div>
			</div>
				<br><br>
			
			<div class="row-fluid">
				<div class="span1"></div>
				<div class="span10">
					<?php echo $map['html'];?>
				</div>
				<div class="span1"></div>
			</div>
			
			
		</div>
		
		<br><br>
		
	</div>
 