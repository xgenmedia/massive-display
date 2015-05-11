<div class="container-fluid">
	<ol class="breadcrumb" style="margin-top:80px;">
  		<li class=""><a href="<?php echo base_url("dashboard");?>">Dashboard</a></li>
  		<li class=""><a href="<?php echo base_url("client");?>">Client</a></li>
  		<li class="active">Add / Edit Client</li>
	</ol>
	<div class="row-fluid">
		 <div class="col-sm-3">
		 		<?php $this->load->view("components/left_side_bar");?>
		 </div>
		 <div class="col-sm-9">
		 		<?php echo validation_errors(); ?>
		 		<form class="form-horizontal" method="POST" action="">
				  <div class="form-group">
				    <label for="name" class="col-sm-2 control-label">Name</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $client->name;?>">
				    </div>
				  </div><div class="form-group">
				    <label for="email" class="col-sm-2 control-label">Email</label>
				    <div class="col-sm-10">
				      <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $client->email;?>">
				    </div>
				  </div><div class="form-group">
				    <label for="phone" class="col-sm-2 control-label">Phone</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="<?php echo $client->phone;?>">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="fax" class="col-sm-2 control-label">Fax</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="fax" name="fax" placeholder="FAX" value="<?php echo $client->fax;?>">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="address" class="col-sm-2 control-label">Address</label>
				    <div class="col-sm-10">
				      <textarea class="form-control" id="address" name="address" placeholder="Address"><?php echo $client->address;?></textarea>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-primary">Save</button>
				      <a href="<?php echo site_url("client");?>" class="btn btn-default">Cancel</a>
				    </div>
				  </div>
				</form>
		 </div>
	</div>
</div>