<div class="administrate">
	
	<div class="container-fluid">
		
		<!-- TITLE -->
		
		<div class="row-fluid" id="title">
			<div class="span3"></div>
			<div class="span6 text-center" > ADMINISTRATE SHOPS </div>
			<div class="span3"></div>
		</div>
		
		<!-- LINE -->
		
		<div class="row-fluid">&nbsp;</div>
		
		<div class="row-fluid">
			<table class="table table-bordered table-condensed">
			  
			   <thead id="tableHead">
			      <tr>
			            <th>Name</th>
			            <th>Address</th>
			            <th>Zip</th>
			            <th>City</th>
			            <th>Country</th>
			            <th>Description</th>
			            <th>Type</th>
			            <th>Path</th>
			            <th></th>
			      </tr>
			   </thead>
			   <tbody>
			   	
			   	<?php foreach ($shops as $s):?>
			          <tr id="tableBody">
			            <td><?php echo $s['name']?></td>
			            <td><?php echo $s['address']?></td>
			            <td><?php echo $s['zip']?></td>
			            <td><?php echo $s['city']?></td>
			            <td><?php echo $s['country']?></td>
			            <td><?php echo $s['description']?></td>
			            <td><?php echo $s['type']?></td>
			            <td><?php echo $s['path']?></td>
			            <td> <a  title="Delete" href="<?php echo site_url("/administrate/delete/".$s['id']);?>" onClick="return confirm('Are you sure you want to delete this shop ?');"><img src="<?php echo base_url();?>/assets/img/misc/delete.png" title="Delete"></a></td>
			          </tr>
			         
			     <?php endforeach;?>
			    </tbody>
			</table>
		</div>
	</div>
</div>
