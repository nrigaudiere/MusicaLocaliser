<div class="add">
	
	
	
<div class="container-fluid">
	
	<div class="row-fluid" id="title">
		<div class="span3"></div>
		<div class="span6 text-center" > ADD A NEW SHOP </div>
		<div class="span3"></div>
	</div>

	<div class="row-fuid">&nbsp;</div>
	
	<div class="row-fluid">
	
		<div class="span3"></div>
		
		<div class="span6">
			<div class="well">
				
		<?php echo form_open_multipart('add/newshop');?>	
			
			<!-- NAME -->
				
			<div class="row-fluid">
				
				<div class="span3 text-right">
					<label for="name" class="control-label" width=100%>Name of the shop</label>
					<?php echo form_error('name','<br><span class="error">', '</span>');?>
				</div>
				
				<div class="span1"></div>
				
				<div class="span5">
					<input type="text" name="name" value="<?php echo set_value('name');?>" autofocus id="element"/>
				</div>
			</div>
			
			<!-- ADDRESS -->
						
			<div class="row-fluid">
				
				<div class="span3 text-right">
					<label for="address" class="control-label" width=100%>Address</label>
					<?php echo form_error('address','<br><span class="error">', '</span>');?>
				</div>
				
				<div class="span1"></div>
				
				<div class="span5">	
					<input type="text" name="address" value="<?php echo set_value('address');?>" id="element"/>
				</div>
			</div>	
			
			<!-- ZIP CODE -->
			
			<div class="row-fluid">
				
				<div class="span3 text-right">	
					<label for="zip" class="control-label" width=100%>Zip Code</label>
					<?php echo form_error('zip','<br><span class="error">', '</span>');?>
				</div>
				
				<div class="span1"></div>
				
				<div class="span5">			
					<input type="text" name="zip" value="<?php echo set_value('zip');?>" id="element"/>
				</div>
			</div>	
			
			<!-- CITY -->
			
			<div class="row-fluid">
				<div class="span3 text-right">	
					<label for="city" width=100%>City</label>
					<?php echo form_error('city','<br><span class="error">', '</span>');?>
				</div>
				
				<div class="span1"></div>
				
				<div class="span5">
					<input type="text" name="city" value="<?php echo set_value('city');?>" id="element"/>
				</div>
			</div>	
			
			<!-- COUNTRY -->
			
			<div class="row-fluid">
				<div class="span3 text-right">		
					<label for="country" width=100%>Country</label>
					<?php echo form_error('city','<br><span class="error">', '</span>');?>
				</div>
				
				<div class="span1"></div>
				
				<div class="span5">
					<select name="country" onChange="set_id(this);" id="element">
						<option selected="selected"><?php echo set_value('country', 'France');?>
						<option disabled>-----------------
					
						
						<?php foreach($country as $co):?>  
					
							<option><?php echo $co->name;?>
						
						<?php endforeach?>
					</select>		
				</div>
			</div>	
			
			<!-- DESCRIPTION -->
			
			<div class="row-fluid">
				<div class="span3 text-right">			
					<label for="description" width=100%>Description</label>
					<?php echo form_error('description','<br><span class="error">', '</span>');?>
				</div>
				
				<div class="span1"></div>
				
				<div class="span5">	
						<textarea name="description" value="<?php echo set_value('description');?>" id="element">
							</textarea>
				</div>
			</div>	
			
			<!-- TYPE -->			
			
			<div class="row-fluid">
				<div class="span3 text-right">		
					<label for="type" width=100%>Type of shop</label>
					<?php echo form_error('type','<br><span class="error">', '</span>');?>
				</div>
				
				<div class="span1"></div>
				
				<div class="span5">		
						<input type="text" name="type" value="<?php echo set_value('type');?>" id="element"/>
				</div>
			</div>	
			
			<!-- PICTURE -->
			
			<div class="row-fluid">
				<div class="span3 text-right">		
					<label for="type" width=100%>Picture</label>
					<?php echo form_error('file','<br><span class="error">', '</span>');?>
				</div>
				
				<div class="span1"></div>
				
				<div class="span5">		
						<input type="file" name="image" size="20" />
				</div>
			</div>	
			
			<div class="row-fluid"><div class="span12"></div></div>
			
			<!-- BUTTON -->
			
			<div class="row-fluid">
				<div class="span4"></div>
				<div class="span5">			
					
					<button class="btn btn-success btn-block" type="submit" id="element"/>Add</button>
				</div>
				
			</div>
				
			<?php echo form_close();?>
			</div>
		</div>
		
		<div class="span3"></div>
	
	</div>
	
	<div class="row-fuid">&nbsp;</div>
	
</div>
</div>



