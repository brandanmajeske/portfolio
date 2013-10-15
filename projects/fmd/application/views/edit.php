<?php 
// declare varaibles
$id = $data[0]['id'];
$division = $data[0]['division'];
$month_of_schedule = $data[0]['month_of_schedule'];
$week_of_schedule = $data[0]['week_of_schedule'];
$banner_store_number = $data[0]['banner_store_number'];
$oracle_store_number = $data[0]['oracle_store_number'];
$store_name = $data[0]['store_name'];
$address = $data[0]['address'];
$city = $data[0]['city'];
$state = $data[0]['state'];
$last_update = isset($data[0]['last_update'])? $data[0]['last_update'] : NULL;
$updated_by = isset($data[0]['updated_by'])? $data[0]['updated_by'] : NULL;
$special_note = isset($data[0]['special_note'])? $data[0]['special_note'] : NULL;
$username = $this->session->userdata('username');
?>
<h2>Edit <?php echo $store_name; ?></h2>

<?php 
  	$attributes = array('class' => 'form', 'id' => 'form');
  	echo form_open('admin/update', $attributes);?>
  	<fieldset>
  	<?php $data = array('id' => $id, 'username' => $username);
  		echo form_hidden($data); ?>

  		<table class="table table-striped table-bordered">
  			<thead>
  				<td class="table-header">Division</td>
  				<td class="table-header">Month of Schedule</td>
  				<td class="table-header">Week of Schedule</td>
  				<td class="table-header">Banner Store Number</td>
  				<td class="table-header">Oracle Store Number</td>
  			</thead>
  			<tbody>
  				<td class="table-data"><p><?php echo $division; ?></p><input type="text" class="table-data-input form-control inpu-sm" name="division" value="<?php echo $division; ?>" /></td>
  				<td class="table-data"><p><?php echo $month_of_schedule; ?></p><input type="text" class="table-data-input form-control inpu-sm" name="month_of_schedule" value="<?php echo $month_of_schedule; ?>" /></td>
  				<td class="table-data"><p><?php echo $week_of_schedule; ?></p><input type="text" class="table-data-input form-control inpu-sm" name="week_of_schedule" value="<?php echo $week_of_schedule; ?>" /></td>
  				<td class="table-data"><p><?php echo $banner_store_number; ?></p><input type="text" class="table-data-input form-control inpu-sm" name="banner_store_number" value="<?php echo $banner_store_number; ?>" /></td>
  				<td class="table-data"><p><?php echo $oracle_store_number; ?></p><input type="text" class="table-data-input form-control inpu-sm" name="oracle_store_number" value="<?php echo $oracle_store_number; ?>" /></td>
  			</tbody>
  			<thead>
  				<td class="table-header">Store Name</td>
  				<td class="table-header">Address</td>
  				<td class="table-header">City</td>
  				<td class="table-header">State</td>
  				<td class="table-header">Last Update</td>
  			</thead>
  			<tbody>
  				<td class="table-data"><p><?php echo $store_name; ?></p><input type="text" class="table-data-input form-control inpu-sm" name="store_name" value="<?php echo $store_name; ?>" /></td>
  				<td class="table-data"><p><?php echo $address; ?></p><input type="text" class="table-data-input form-control inpu-sm" name="address" value="<?php echo $address; ?>" /></td>
  				<td class="table-data"><p><?php echo $city; ?></p><input type="text" class="table-data-input form-control inpu-sm" name="city" value="<?php echo $city; ?>" /></td>
  				<td class="table-data"><p><?php echo $state; ?></p><input type="text" class="table-data-input form-control inpu-sm" name="state" value="<?php echo $state; ?>" /></td>
  				<td><p>Last Update:<?php echo $last_update; ?> <br />By:<?php echo $updated_by; ?></p></td>
  			</tbody>	
  		</table>
  		<div class="form-group pull-left">
  		<label for="special_note">Special Note:</label>
  		<textarea name="special_note" class="form-control input-lg"><?php if(!is_null($special_note)){echo htmlspecialchars($special_note);};?></textarea>
  		</div>
  			<div class="form-group pull-right">
  				<a href="#" class="btn btn-sm btn-primary" onclick="document.getElementById('form').submit();"><span class="glyphicon glyphicon-refresh"></span> Update</a>
          <a href="<?php echo base_url(); ?>admin/" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-remove"></span> Cancel</a>
  				<a data-toggle="modal" href="#delModal" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a> 			
        </div>
  		</fieldset>
  	<?php echo form_close(); ?>

   <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="delModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Delete <?php echo $store_name; ?></h4>
          </div>
          <div class="modal-body">
            <p>You're about to delete this record from the Database. Are you sure you want to do that?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
            <a href="<?php echo base_url().'admin/delete/'.$id;?>" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->