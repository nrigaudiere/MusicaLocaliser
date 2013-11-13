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
				<div class="span5">
					
					
					Name of the Shop <?php echo $shops[1]['name'];?><br>
					Address <?php echo $shops[1]['address'];?><br>
					Zip Code <?php echo $shops[1]['zip'];?><br>
					City <?php echo $shops[1]['city'];?><br>
					Country <?php echo $shops[1]['country'];?><br>
					Description <?php echo $shops[1]['description'];?><br>
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
 