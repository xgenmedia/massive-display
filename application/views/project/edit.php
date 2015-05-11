<div class="container-fluid">
	<ol class="breadcrumb" style="margin-top:80px;">
		<li> <a href="<?php echo base_url("dashboard");?>" > Dashboard</a></li>
  		<li> <a href="<?php echo base_url("project");?>" > Project</a></li>
  		<li class="active"> Add / Edit Project </li>
	</ol>
	<div class="row-fluid">
		 <div class="col-sm-3">
		 		<?php $this->load->view("components/left_side_bar");?>
		 </div>
		 <div class="col-sm-9">
		 			<?php echo validation_errors(); ?>
			 		<form class="form-horizontal" method="POST" action="">

					  <div class="form-group">
					    <label for="code" class="col-sm-2 control-label">Code</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="code" name="code" placeholder="Project Code" value="<?php echo $project->code;?>">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="client" class="col-sm-2 control-label">Client</label>
					    <div class="col-sm-10">
					        <?php echo form_dropdown("client",$client,$project->client_id,array('class'=>'form-control'));?>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="user" class="col-sm-2 control-label">Employee</label>
					    <div class="col-sm-10">
					      <?php echo form_dropdown("user",$users,$project->user_id,array('class'=>'form-control'));?>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="user" class="col-sm-2 control-label">Status</label>
					    <div class="col-sm-10">
					      <?php echo form_dropdown("status",$status,$project->status,array('class'=>'form-control'));?>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="user" class="col-sm-2 control-label">Active</label>
					    <div class="col-sm-10">
					      <?php echo form_dropdown("is_active",array("Y"=>"Y","N"=>"N"),$project->is_active,array('class'=>'form-control'));?>
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-primary">Save</button>
					      <a href="<?php echo site_url("project");?>" class="btn btn-default">Cancel</a>
					    </div>
					  </div>
					</form>
		 </div>
	</div>
</div>