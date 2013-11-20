<div class="contact">
	
<div class="container-fluid">
	
	<div class="row-fluid" id="title">
		<div class="span3"></div>
		<div class="span6 text-center" > Contact Us </div>
		<div class="span3"></div>
	</div>

			
	<div class="row-fuid">&nbsp;</div>
	
	<div class="row-fluid">
	
		<div class="span3"></div>
		
		<div class="span6">
			<div class="well">
			
			<?php echo form_open('contact');?>

			<div class="row-fluid">
				
				<div class="span3 text-right">
					<label for="nom">Name *</label>
					
				</div>
				
				<div class="span1"></div>
				
				<div class="span5">
					<input type="text" name="nom" id="nom" value="<?php echo set_value('nom');?>"autofocus/>
					<?php echo form_error('nom','<br><span class="error">', '</span>');?>
				</div>
			</div>
			
			
			<div class="row-fluid">
				<div class="span3 text-right">
					<label for="email">Email Address *</label>
						
				</div>
				
				<div class="span1"></div>
				
				<div class="span5">
					<input type="text" name="email" id="email" value="<?php echo set_value('email');?>"/>
					<?php echo form_error('email','<br><span class="error">', '</span>');?>
				</div>
			</div>
			
			<div class="row-fluid">
				<div class="span3 text-right">
					<label for="sujet">Subject *</label>
						
				</div>
				
				<div class="span1"></div>
				
				<div class="span5">
					<input type="text" name="sujet" id="sujet" value="<?php echo set_value('sujet');?>"/>
					<?php echo form_error('sujet','<br><span class="error">', '</span>');?>
				</div>
			</div>
			
			
			<div class="row-fluid">
				<div class="span3 text-right">
					<label for="message">Message * </label>	
								
				</div>
				
				<div class="span1"></div>
				
				<div class="span5">
					<textarea  name="message" id="message" value="<?php echo set_value('message');?>"></textarea>
					<?php echo form_error('message','<br><span class="error">', '</span>');?>
				</div>
			</div>
			
			<div class="row-fluid">&nbsp;</div>
			
			<div class="row-fluid">
				<div class="span4"></div>
				
				<div class="span2">
		 			<button class="btn btn-success" type="submit">Send</button>
				</div>
				<div class="span2">
					<button class="btn btn-danger" type="reset">Delete</button>
				
				</div>
				
			<div class="row-fluid">&nbsp;</div>	
			<div class="row-fluid">
				
				<i>(*) required field</i>
					
			</div>
			</div>
		</fieldset>
	<?php echo form_close();?>
	
	</div>
	</div>
	
	</div>
	
	</div>
</div>