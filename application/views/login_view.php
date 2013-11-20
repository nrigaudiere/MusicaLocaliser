<div class="login">
	
	<div class="container-fluid">
		<!-- LINE -->
		
		<div class="row-fluid">
			<div class="span12">&nbsp;</div>
		</div>

		<div class="row-fluid">
			<div class="span3"></div>
			
			<div class="span6">
				<div class="well">
					
					<?php echo form_open('login/connect');?>
					
					<!-- LOGIN -->
					
					<div class="row-fluid">
				
						<div class="span3 text-right">
							<label for="login" class="control-label" width=100%>Login</label>
							
						</div>
						
						<div class="span1"></div>
						
						<div class="span5">
							<input type="text" name="login" value="<?php echo set_value('login');?>" autofocus id="element"/>
							<?php echo form_error('login','<span class="error">', '</span><br>');?>
						</div>
					</div>
					
					<!-- PASSWORD -->
					
					<div class="row-fluid">
				
						<div class="span3 text-right">
							<label for="password" class="control-label" width=100%>Password</label>
							
						</div>
						
						<div class="span1"></div>
						
						<div class="span5">
							<input type="password" name="password" value="<?php echo set_value('password');?>" autofocus id="element"/>
							<?php echo form_error('password','<span class="error">', '</span><br>');?>
						</div>
					</div>
					
					<!-- LINE -->
					
					<div class="row-fluid">
						<div class="span12">&nbsp;</div>
					</div>
					<!-- BUTTON -->
					
					<div class="row-fluid">
						<div class="span4"></div>
						<div class="span5">			
							<button class="btn btn-success btn-block " type="submit" />Login</button>
						</div>
				
					</div>
				
					<?php echo form_close();?>
					
				</div>
			</div>
			
			<div class="span3"></div>
			
		</div>
		
		<!-- LINE -->
					
		<div class="row-fluid">
			<div class="span12">&nbsp;</div>
		</div>

	</div>
</div>