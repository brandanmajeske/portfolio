<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
<h2>Add New Record</h2>

<?php 
  	$attributes = array('class' => 'form', 'id' => 'form');
  	echo form_open('admin/addNew', $attributes);?>
  	<fieldset>
  	
    <?php 
    $username = $this->session->userdata('username');
    $data = array('username' => $username);
  		echo form_hidden($data); ?>
      <p class="text-muted"><span class="glyphicon glyphicon-asterisk">All fields (except Special Note) are required</span></p>
  		<table class="table table-striped table-bordered">
  			<thead>
  				<td class="table-header">Division</td>
  				<td class="table-header">Month of Schedule</td>
  				<td class="table-header">Week of Schedule</td>
  				<td class="table-header">Banner Store Number</td>
  				<td class="table-header">Oracle Store Number</td>
  			</thead>
  			<tbody>
  				<td class="table-data"><input type="text" required class="add-table-data-input form-control inpu-sm" value="<?php echo set_value('division'); ?>" name="division" /></td>
  				<td class="table-data"><input type="text" required class="add-table-data-input form-control inpu-sm" value="<?php echo set_value('month_of_schedule'); ?>" name="month_of_schedule" /></td>
  				<td class="table-data"><input type="text" required class="add-table-data-input form-control inpu-sm" value="<?php echo set_value('week_of_schedule'); ?>" name="week_of_schedule" /></td>
  				<td class="table-data"><input type="text" required class="add-table-data-input form-control inpu-sm" value="<?php echo set_value('banner_store_number'); ?>" name="banner_store_number" /></td>
  				<td class="table-data"><input type="text" required class="add-table-data-input form-control inpu-sm" value="<?php echo set_value('oracle_store_number'); ?>" name="oracle_store_number" /></td>
  			</tbody>
  			<thead>
  				<td class="table-header">Store Name</td>
  				<td class="table-header">Address</td>
  				<td class="table-header">City</td>
  				<td class="table-header">State</td>

  			</thead>
  			<tbody>
  				<td class="table-data"><input type="text" required class="add-table-data-input form-control inpu-sm" value="<?php echo set_value('store_name'); ?>" name="store_name" /></td>
  				<td class="table-data"><input type="text" required class="add-table-data-input form-control inpu-sm" value="<?php echo set_value('address'); ?>" name="address" /></td>
  				<td class="table-data"><input type="text" required class="add-table-data-input form-control inpu-sm" value="<?php echo set_value('city'); ?>" name="city" /></td>
  				<td class="table-data"><input type="text" required class="add-table-data-input form-control inpu-sm" value="<?php echo set_value('state'); ?>" name="state" /></td>
  			</tbody>	
  		</table>
  		<div class="form-group pull-left">
  		<label for="special_note">Special Note:</label>
  		<textarea name="special_note" class="form-control input-lg"><?php echo set_value('special_note'); ?></textarea>
  		</div>
  			<div class="form-group pull-right">
  				<a href="#" class="btn btn-sm btn-success" onclick="document.getElementById('form').submit();"><span class="glyphicon glyphicon-arrow-up"></span> Submit</a></td>
  				<a href="<?php echo base_url(); ?>admin/" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-remove"></span> Cancel</a></td>
  			</div>
  		</fieldset>
<?php echo form_close(); ?>