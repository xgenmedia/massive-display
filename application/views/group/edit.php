<div class="container-fluid">
	<ol class="breadcrumb" style="margin-top:80px;">
		<li> <a href="<?php echo base_url("dashboard");?>" > Dashboard</a></li>
  		<li> <a href="<?php echo base_url("user");?>" > User</a></li>
  		<li class="active"> Add / Edit User </li>
	</ol>
	<div class="row-fluid">
		 <div class="col-sm-3">
		 		<div class="list-group">
				      <a href="<?php echo base_url("task");?>" class="list-group-item ">Resource</a>
				      <a href="<?php echo base_url("group");?>" class="list-group-item active">Group</a>
				      <a href="<?php echo base_url("user");?>" class="list-group-item ">User</a>
				      <a href="#" class="list-group-item">Products Category</a>
				      <a href="#" class="list-group-item ">Products</a>
					  <a href="#" class="list-group-item">Clients</a>
					  <a href="#" class="list-group-item">Dept</a>
					  <a href="#" class="list-group-item">Employee</a>
					  <a href="#" class="list-group-item">Project</a>
					  <a href="#" class="list-group-item">Quotations</a>
					  <a href="#" class="list-group-item">Approve Project</a>
					  <a href="#" class="list-group-item">Settings</a>
				</div>
		 </div>
		 <div class="col-sm-9">
		 			<?php echo validation_errors(); ?>
			 		<form class="form-horizontal" method="POST" action="">

					  <div class="form-group">
					    <label for="name" class="col-sm-2 control-label">Name</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $group->title;?>">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="phone" class="col-sm-2 control-label">Phone</label>
					    <div class="col-sm-10">
					      <?php echo form_dropdown("is_active",array("Y"=>"Y","N"=>"N"),$group->is_active,array('class'=>'form-control'));?>
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-primary">Save</button>
					      <a href="<?php echo site_url("group");?>" class="btn btn-default">Cancel</a>
					    </div>
					  </div>
					</form>
		 </div>
	</div>
</div>