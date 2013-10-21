<div class="add">
	
	<?php echo form_open('add/newshop');?>
		<table>
			<tr>
				<td>
					<label for="name" width=100%>Name of the shop</label>
						<?php echo form_error('name','<br><span class="error">', '</span>');?>
				</td>
				<td><input type="text" name="name" value="<?php echo set_value('name');?>" autofocus/></td>
			</tr>
			<tr>
				<td>
					<label for="address" width=100%>Address</label>
						<?php echo form_error('address','<br><span class="error">', '</span>');?>
				</td>
				<td><input type="text" name="address" value="<?php echo set_value('address');?>" /></td>
			</tr>
			<tr>
				<td>
					<label for="zip" width=100%>Zip Code</label>
						<?php echo form_error('zip','<br><span class="error">', '</span>');?>
				</td>
				<td><input type="text" name="zip" value="<?php echo set_value('zip');?>" /></td>
			</tr>	
			<tr>
				<td>
					<label for="city" width=100%>City</label>
						<?php echo form_error('city','<br><span class="error">', '</span>');?>
				</td>
				<td><input type="text" name="city" value="<?php echo set_value('city');?>" /></td>
			</tr>
			<tr>
				<td>
					<label for="country" width=100%>Country</label>
						<?php echo form_error('city','<br><span class="error">', '</span>');?>
				</td>
				<td>
					<select name="country" onChange="set_id(this);" >
						<option selected="selected"><?php echo set_value('country', 'France');?>
						<option disabled>-----------------
					
						
						<?php foreach($country as $co):?>  
					
							<option><?php echo $co->name;?>
						
						<?php endforeach?>
					</select>		
				</td>
			</tr>
			<tr>
				<td>
					<label for="description" width=100%>Description</label>
						<?php echo form_error('description','<br><span class="error">', '</span>');?>
				</td>
				<td><textarea name="description" value="<?php echo set_value('description');?>" >
					</textarea>
				</td>
			</tr>	
			<tr>
				<td>
					<label for="type" width=100%>Type of shop</label>
						<?php echo form_error('type','<br><span class="error">', '</span>');?>
				</td>
				<td><input type="text" name="type" value="<?php echo set_value('type');?>" /></td>
			</tr>	
			
			<tr><td><input type="submit" value="Add" /></td></tr>
			
		</table>
	<?php echo form_close();?>

</div>



