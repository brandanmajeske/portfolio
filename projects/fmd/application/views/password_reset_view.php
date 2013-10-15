<h2>Password Reset</h2>
<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); 
//variable for validation state - if user is not validated show auth form, if user is validated show password reset form
$validated = isset($data['validated']['is_true'])? $data['validated']['is_true'] : NULL;
$username = isset($data['validated']['username'])? $data['validated']['username'] : NULL;

/*If user authentication is successful, show the reset form else throw error*/
if($validated === FALSE || $validated === NULL){
$hidden = array('username' => $this->session->userdata('username'));	
echo form_open('password_reset/authenticate_user','', $hidden);
if($validated === FALSE && $validated !== NULL){
	echo '<div class="alert alert-danger">Your email or secret phrase failed to validate, please try again.</div>';
}
echo <<<EOT
<fieldset>
<div class="form-group">
<label>Email Address
EOT;
echo '<input class="form-control input-lg" type="text" name="email" required value="'.set_value('email').'"/></label>';
echo <<<EOT
</div>
<div class="form-group">
<label>Secret Phrase
EOT;
echo '<input class="form-control input-lg" type="text" name="secret_phrase" required value="'.set_value('secret_phrase').'"  /></label>';
echo <<<EOT
<br/>
<input type="submit" value="Submit" class="btn btn-primary" />
</div>
</fieldset>
EOT;
echo form_close();
} else {
$hidden = array('username' => $username);
echo form_open('password_reset/reset','', $hidden);
echo <<<EOT
<div class="alert alert-success">Your secret phrase has been validated, please reset your password.</div>
<fieldset>
<div class="form-group">
<label>New Password
EOT;
echo '<input class="form-control input-lg" type="password" name="password" required value="'.set_value('password').'"  /></label>';
echo <<<EOT
</div>
<div class="form-group">
<label>Confirm New Password
EOT;
echo '<input class="form-control input-lg" type="password" name="passconf" required value="'.set_value('passconf').'"  /></label>';
echo <<<EOT
<br />
<input type="submit" value="Submit" class="btn btn-primary" />
</div>
</fieldset>
EOT;
echo form_close();
}
?>