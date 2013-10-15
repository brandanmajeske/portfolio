<?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>

<?php echo form_open('login/auth'); ?>
<fieldset>

	<h2 class="page-header">Admin Login</h2>
	<div class="form-group">
		<?php 
		$data = array(
			"type" => "text",
			"class" => "form-control input-lg",
			"name" => "username",
			"required" => true,
			"value" =>  set_value(),
			"placeholder" => 'Enter your username...'
			);
		$attr1 = array(
			"for" => "username"
			);
		echo form_label('User Name', 'username', $attr1); ?>
		<?php echo form_input($data);?>
	</div>
	<div class="form-group">
			<?php 
		$data = array(
			"type" => "password",
			"class" => "form-control input-lg",
			"name" => "password",
			"required" => true,
			"value" =>  set_value(),
			"placeholder" => 'Enter your password...'
			);
		$attr2 = array(
			"for" => "password"
			);
		echo form_label('Password', 'password', $attr2); ?>	
	<?php echo form_input($data);?>	
	</div>
	<p class="visible-lg">Not a registered user? <a href="<?php echo base_url().'register'; ?>">Register</a></p>
	<p class="visible-lg">Forgot password?<a href="<?php echo base_url().'login/forgot_password'; ?>"> Reset Password</a></p>
	<p><button class="btn btn-primary" type="submit">Sign In</button></p>
	<p class="hidden-lg">Forgot Password? <br /><a class="btn btn-info" href="<?php echo base_url().'login/forgot_password'; ?>"> Reset Password</a></p>
	<p class="hidden-lg">Not a registered user? <br /><a class="btn btn-info" href="<?php echo base_url().'register'; ?>">Register</a></p>
</fieldset>
</form>