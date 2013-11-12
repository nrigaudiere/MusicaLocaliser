<div class="add">
	
<div class="container-fluid">
			

	<div class="row-fluid">
	
	<div class="span3"></div>
	
	<div class="span6">
		<div class="well">
			
	<?php echo form_open_multipart('add/newshop');?>	
		
			
		<div class="row-fluid">
			
			<div class="span3">
				<label for="name" class="control-label" width=100%>Name of the shop</label>
				<?php echo form_error('name','<br><span class="error">', '</span>');?>
			</div>
			
			<div class="span1"></div>
			
			<div class="span2">
				<input type="text" name="name" value="<?php echo set_value('name');?>" autofocus/>
			</div>
		</div>
		
		
		<div class="row-fluid">
			
			<div class="span3">
				<label for="address" class="control-label" width=100%>Address</label>
				<?php echo form_error('address','<br><span class="error">', '</span>');?>
			</div>
			
			<div class="span1"></div>
			
			<div class="span2">	
				<input type="text" name="address" value="<?php echo set_value('address');?>" />
			</div>
		</div>	
		
		
		<div class="row-fluid">
			
			<div class="span3">	
				<label for="zip" class="control-label" width=100%>Zip Code</label>
				<?php echo form_error('zip','<br><span class="error">', '</span>');?>
			</div>
			
			<div class="span1"></div>
			
			<div class="span2">			
				<input type="text" name="zip" value="<?php echo set_value('zip');?>" />
			</div>
		</div>	
		
		
		<div class="row-fluid">
			<div class="span3">	
				<label for="city" width=100%>City</label>
				<?php echo form_error('city','<br><span class="error">', '</span>');?>
			</div>
			
			<div class="span1"></div>
			
			<div class="span2">
				<input type="text" name="city" value="<?php echo set_value('city');?>" />
			</div>
		</div>	
		
		<div class="row-fluid">
			<div class="span3">		
				<label for="country" width=100%>Country</label>
				<?php echo form_error('city','<br><span class="error">', '</span>');?>
			</div>
			
			<div class="span1"></div>
			
			<div class="span2">
				<select name="country" onChange="set_id(this);" >
					<option selected="selected"><?php echo set_value('country', 'France');?>
					<option disabled>-----------------
				
					
					<?php foreach($country as $co):?>  
				
						<option><?php echo $co->name;?>
					
					<?php endforeach?>
				</select>		
			</div>
		</div>	
		
		<div class="row-fluid">
			<div class="span3">			
				<label for="description" width=100%>Description</label>
				<?php echo form_error('description','<br><span class="error">', '</span>');?>
			</div>
			
			<div class="span1"></div>
			
			<div class="span2">	
					<textarea name="description" value="<?php echo set_value('description');?>" >
						</textarea>
			</div>
		</div>	
		
		<div class="row-fluid">
			<div class="span3">		
				<label for="type" width=100%>Type of shop</label>
				<?php echo form_error('type','<br><span class="error">', '</span>');?>
			</div>
			
			<div class="span1"></div>
			
			<div class="span2">		
					<input type="text" name="type" value="<?php echo set_value('type');?>" />
			</div>
		</div>	
		
		<div class="row-fluid">
			<div class="span3">		
				<label for="type" width=100%>Picture</label>
				<?php echo form_error('file','<br><span class="error">', '</span>');?>
			</div>
			
			<div class="span1"></div>
			
			<div class="span2">		
					<input type="file" name="image" size="20" />
			</div>
		</div>	
		
		<div class="row-fluid"><div class="span12"></div></div>
		
		
		<div class="row-fluid">
			<div class="span4"></div>
			<div class="span5">			
				
				<button class="btn btn-success btn-block" type="submit" />Add</button>
			</div>
			
		</div>
			
		<?php echo form_close();?>
		</div>
	</div>
	
	<div class="span3"></div>
	
	</div>
	
</div>
</div>



