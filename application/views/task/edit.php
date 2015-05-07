<div class="container-fluid">
	<ol class="breadcrumb" style="margin-top:80px;">
		<li> <a href="<?php echo base_url("dashboard");?>" > Dashboard</a></li>
  		<li> <a href="<?php echo base_url("user");?>" > User</a></li>
  		<li class="active"> Add User </li>
	</ol>
	<div class="row-fluid">
		 <div class="col-sm-3">
		 		<div class="list-group">
				      <a href="<?php echo base_url("task");?>" class="list-group-item active">Resource</a>
				      <a href="<?php echo base_url("group");?>" class="list-group-item ">Group</a>
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
		 	<?php $attributes = array('class' => 'form-horizontal', 'role' => 'form');
                  echo form_open('', $attributes); 
              ?>
			 <div class="form-group">
                  <label for="code" class="col-sm-2 control-label">Code</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="code" name="code" value="<?php if(isset($values[0]->code)) echo $values[0]->code;?>" placeholder="Enter Code">
                  </div>
              </div>
              <div class="form-group">
                  <label for="title" class="col-sm-2 control-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title" value="<?php if(isset($values[0]->title)) echo $values[0]->title;?>" placeholder="Enter Title">
                  </div>
              </div>    
              <div class="form-group">
                  <label for="description" class="col-sm-2 control-label">Description</label>
                  <div class="col-sm-10">
                      <textarea class="form-control" id="description" name="description" placeholder="Enter Description"><?php if(isset($values[0]->description)) echo $values[0]->description;?></textarea>
                  </div>
              </div>  
           
              <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <?php echo anchor(site_url('task'),'Cancel','class="btn btn-default"');?>
                  </div>
              </div>
              <?php echo form_close();?>
		 </div>
	</div>
</div>