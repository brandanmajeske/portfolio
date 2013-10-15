<div class="row">
	<div class="col-12">
		<h3 class="page-header"><?php echo ucfirst($user_data['username']);?>'s Admin Dashboard</h3>
	</div>
</div><!-- end row -->
<div class="row">
<?php $error = isset($error)? $error :  null; ?>
<div class="user-profile col-3 pull-right">

<?php 
	echo "<h4>Username: ".ucfirst($profile[0]['username'])."<br/>";
	echo "Name: ".ucwords($profile[0]['name'])."<br/>";
	echo "Joined: ".$profile[0]['join_date']."</h4>";
	echo '<ul class="nav">';
	echo '<li><a href="'.base_url().'password_reset"><span class="glyphicon glyphicon-edit"> Change Password</span></a></li>';
	echo '<li><a href="'.base_url().'admin/add"></label><span class="glyphicon glyphicon-plus-sign"> Add New Record</span></a></li>';
	echo '</ul>';
?>

</div>

		<!-- Search Input -->
<div class="admin_search">
<div id="searcharea pull-left">
<div class="form-group col-8">
<label for="admin-search" id="searchlabel"><h2>FMD Data Edit <span class="glyphicon glyphicon-question-sign"></span></h2></label>
<input class="form-control input-lg" name="admin-search" id="admin-search" placeholder="Search..." />
<br />
<div class="clearfix" id="update"></div>
</div> <!-- end search -->
</div> <!-- end col-8 -->
</div> <!-- end col-8 -->
</div> <!-- end ROW -->


<!-- 

<div class="live_search">
<div id="searcharea">
<div class="clearfix">
<label for="search" class="col-lg-6 col-md-12 col-sm-12" id="searchlabel"><h2>FMD Search Tool</h2></label>
<input class="form-control input-lg col-12" type="text" name="search" id="search" placeholder="Search..." />
</div>
<br />
<div class="clearfix" id="update"></div>
</div>
</div> -->