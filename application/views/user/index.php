
<div class="container-fluid">
	<ol class="breadcrumb" style="margin-top:80px;">
		<li><a href="<?php echo base_url("dashboard");?>">Dashboard</a></li>
  		<li class="active">User</li>
  		<li class="pull-right">
  			<a href="<?php echo base_url("user/edit");?>"><i class="glyphicon glyphicon-plus"></i> Add User</a>
  		</li>
	</ol>
	<div class="row-fluid">
		 <div class="col-sm-3">
		 		<div class="list-group">
				      <a href="#" class="list-group-item ">Resource</a>
				      <a href="<?php echo base_url("group");?>" class="list-group-item"> Group</a>
				      <a href="<?php echo base_url("user");?>" class="list-group-item active">User</a>
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
		 		<!--   Success and Error Message --> 
				<?php if($this->session->flashdata('success_message')) {?>
					<p class="bg-primary"> <?php echo $this->session->flashdata('success_message');?> </p>
				<?php } ?>
				<?php if($this->session->flashdata('error_message')) {?>
					<p class="bg-danger"> <?php echo $this->session->flashdata('error_message');?> </p>
				<?php } ?>
				<!--                             -->
		 		<table class="table table-hover">
		 			<thead>
		 				<tr>
		 					<th>Sl. No.</th>
		 					<th>Name</th>
		 					<th>Email</th>
		 					<th>Phone</th>
		 					<th>Actions</th>
		 				</tr>
		 			</thead>
		 			<tbody>
		 				<?php foreach ($users as $key => $value) :?>
			 				<tr>
			 					<td>1</td>
			 					<td><?php echo e($value->name);?></td>
			 					<td>
			 						 <a href="mailto:<?php echo e($value->email);?>" > <?php echo e($value->email);?> </a>
			 					</td>
			 					<td><?php echo e($value->phone);?></td>
			 					<td>
			 						 <?php echo btn_edit("user/edit/".$value->id);?>
			 						 <?php echo btn_delete("user/delete/".$value->id);?>
			 					</td>
			 				</tr>
		 				<?php endforeach;?>
		 			</tbody>
		 		</table>
		 </div>
	</div>
</div>