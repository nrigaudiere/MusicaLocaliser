<!DOCTYPE html>
<html lang="en">
	<head>
		<title>MusicaLocaliser</title>
	
<<<<<<< HEAD
		<link rel="shortcut icon" href="<?php echo base_url()?>assets/img/misc/favicon.ico"/>		
=======
		<link rel="shortcut icon" href="<?php echo site_url("assets/img/misc/favicon.ico")?>"/>		
>>>>>>> ace4e05fe83b2c955d56946afca5a634dbbe97d9
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
<<<<<<< HEAD
					<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo.png" /> </a>
				</div>
				<div class="span5">
					
					
					Name of the Shop <?php echo $shops[0]['name'];?><br>
					Address <?php echo $shops[0]['address'];?><br>
					Zip Code <?php echo $shops[0]['zip'];?><br>
					City <?php echo $shops[0]['city'];?><br>
					Country <?php echo $shops[0]['country'];?><br>
					Description <?php echo $shops[0]['description'];?><br>
				</div>
=======
					<a href="<?php echo base_url();?>"><img src="<?php echo site_url("assets/img/logo.png");?>" /> </a>
				</div>
				<div class="span5"></div>
>>>>>>> ace4e05fe83b2c955d56946afca5a634dbbe97d9
				
			</div>
			
			<!-- INNER LINE -->
			<div class="row-fluid">
				<div class="span12"></div>
			</div>
			
<<<<<<< HEAD
			
		<div class="line">
			<br><br>
			
=======
>>>>>>> ace4e05fe83b2c955d56946afca5a634dbbe97d9
			<!-- MAP -->
			
			<div class="row-fluid">
				<div class="span1"></div>
				<div class="span10">
					<?php echo $map['html'];?>
				</div>
				<div class="span1"></div>
			</div>
<<<<<<< HEAD
			
			
		</div>
		
		<br><br>
		
	</div>
=======
		</div>
		
		
	</body>
>>>>>>> ace4e05fe83b2c955d56946afca5a634dbbe97d9
 