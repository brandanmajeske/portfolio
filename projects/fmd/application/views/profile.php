<?php $error = isset($error)? $error :  null; ?>
<h3 class="page-header"><?php echo ucfirst($user_data['username']);?>'s Public Profile</h3>
<div class="row">
<div class="col-4 pull-right">
		<?php echo '<img class="img-thumbnail" src="'.base_url().'uploads/user_profile_img/'.$profile[0]['user_image'].'" />';?>
			<div class="clearfix"></div>
			<a href="#" id="profile_img"><span class="glyphicon glyphicon-upload"></span> Upload Profile Image</a>
			<div id="profile_img_form">
			<?php echo form_open_multipart('userhome/do_upload'); ?>
			<fieldset>
				<div class="form-group">
					<input type="file" name="userfile" />
					<input class="btn btn-sm btn-primary" type="submit" value="upload" />
				</div>
			</fieldset>
			</form>
			</div>
		<?php echo "<p>Username: ".$profile[0]['username']."</p>";
			echo "<p>Name: ".$profile[0]['name']."</p>";
			echo "<p>Joined: ".$profile[0]['join_date']."</p>";
		?>
	</div>
<div class="col-8">
<?php 
if(!is_null($error )){
	echo $error['error'];
	}
?>
</div>
<div class="col-8 pull-left">
<div class="panel panel-default" id="bio">
<div class="panel-heading"><a class="pull-right" id="bio_edit" href="#bio_edit"><span class="glyphicon glyphicon-edit"></span> Edit</a>
	<h3 class="panel-title">Bio</h3>
</div>

	<?php echo "<p>".$profile[0]['user_bio']."</p>"; ?>
	
</div>

	<div id="bio_edit_form">
	<div class="panel panel-default">
	<?php 
	$user = $user_data['username'];
	$hidden = array('username' => $user);
	echo form_open('userhome/editBio', '', $hidden); ?>
	<fieldset>
		<div class="form-group">
		<div class="panel-heading"><div class="panel-title">
		<label><strong>Edit Bio:</strong></label></div></div>
		<textarea class="form-control input-lg" name="user_bio"><?php echo $profile[0]['user_bio']; ?></textarea>
		</div>
		<input type="submit" class="btn btn-primary" value="Update"/>
	</fieldset>
	<?php echo form_close(); ?>
	</div> 
	</div><!-- end bio edit form -->
</div> <!-- end BIO -->

<div class="col-8 pull-left">
<div class="panel panel-default" id="interests">
<div class="panel-heading"><a class="pull-right" id="interests_edit" href="#interests_edit"><span class="glyphicon glyphicon-edit"></span> Edit</a>

	<h3 class="panel-title">Interests</h3>
</div>	

	<?php echo "<p>".$profile[0]['user_interests']."</p>"; ?>
	
</div>

	<div id="interests_edit_form">
	<div class="panel panel-default">
	<?php 
	$user = $user_data['username'];
	$hidden = array('username' => $user);
	echo form_open('userhome/editInterests', '', $hidden); ?>
	<fieldset>
		<div class="form-group">
		<div class="panel-heading"><div class="panel-title">
		<label><strong>Edit Interests:</strong></label></div></div>
		<textarea class="form-control input-lg" name="user_interests"><?php echo $profile[0]['user_interests']; ?></textarea>
		</div>
		<input type="submit" class="btn btn-primary" value="Update"/>
	</fieldset>
	<?php echo form_close(); ?>
	</div> 
	</div><!-- end interests edit form -->
</div> <!-- end INTERESTS -->
</div> <!-- End ROW -->
<div clas="col-12-lg col-10-sm pull-right">
	<h3 class="page-header">Projects  <a class="btn btn-primary btn-sm" title="Add New Project" href="<?php echo base_url().'projects';?>"><strong><span class="glyphicon glyphicon-plus"></span></strong></a></h3>
	<?php 

		if(!empty($projects)){
			foreach($projects as $project){
			
			echo '<div class="col-10-lg col-8-sm project">';

			$title = $project['title'];
            $id = $project['id'];
			$description = substr($project['description'],0,135);
			echo '<div class="panel panel-default">';
		  	echo '<div class="panel-heading">';
		  		echo "<h4>$title</h4>";
		  	echo '</div>';
		  		echo "<p>$description</p>";
		  		echo '<a href="'.base_url().'projects/view/'.$id.'"><em class="btn btn-primary">More <span class="glyphicon glyphicon-arrow-right"></span></em></a>';
		  	echo '</div>';
			echo '<div class="clearfix"></div>';
			
			}
		} else {
			
			echo '<div class="col-10-lg col-8-sm">';
			echo "<h4>Add a new project</h4>";
			echo '</div>';
			
		}
		

	?>
</div>