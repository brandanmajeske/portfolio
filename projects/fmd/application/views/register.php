<h2 class="page-header">Register</h2>

<?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>

<?php echo form_open('register/validate'); ?>
<fieldset>
<div class="col-4 col-lg-offset-2 pull-left">
  <div class="form-group">
<label>Username
<input class="form-control input-lg" type="text" name="username" required value="<?php echo set_value('username'); ?>"  /></label>
</div>
<div class="form-group">
<label>Email Address
<input class="form-control input-lg" type="text" name="email" required value="<?php echo set_value('email'); ?>"  /></label>
</div>
<div class="form-group">
<label>First Name
<input class="form-control input-lg" type="text" name="first_name" required value="<?php echo set_value('first_name'); ?>"  /></label>
</div>
<div class="form-group">
<label>Last Name
<input class="form-control input-lg" type="text" name="last_name" required value="<?php echo set_value('last_name'); ?>"  /></label>
</div>
</div> <!-- end left group -->
<div class="col-4 pull-left">
<div class="form-group">
<label>Password
<input class="form-control input-lg" type="password" name="password" required value="<?php echo set_value('password'); ?>"  /></label>
</div>
<div class="form-group">
<label>Password Confirm
<input class="form-control input-lg" type="password" name="passconf" required value="<?php echo set_value('passconf'); ?>"  /></label>
</div>
<div class="form-group">
<label>Secret Phrase
<input class="form-control input-lg" type="text" name="secret_phrase" required value="<?php echo set_value('secret_phrase'); ?>"  /></label>
</div>
<div class="form-group">
<label class="checkbox">
<input type="checkbox" name="tos" required value="1" <?php echo set_checkbox('tos'); ?> /><a data-toggle="modal" href="#TOSModal">I Agree to the Terms of Service</a>
</label>
</div>
<input type="submit" class="btn btn-sm btn-success btn-block" value="Register" />
</div> <!-- end right group -->
</fieldset>
<?php echo form_close(); ?>

<!-- Modal -->
  <div class="modal fade" id="TOSModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Terms of Service</h4>
        </div>
        <div class="modal-body">
          <p>Some Terms of Service... </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->