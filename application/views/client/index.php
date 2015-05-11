<div class="container-fluid">
	<ol class="breadcrumb" style="margin-top:80px;">
  		<li class=""><a href="<?php echo base_url("dashboard");?>">Dashboard</a></li>
  		<li class="active">Client</li>
  		<li class="pull-right">
  			<a href="<?php echo base_url("client/edit");?>"><i class="glyphicon glyphicon-plus"></i> Add Client</a>
  		</li>
	</ol>
	<div class="row-fluid">
		 <div class="col-sm-3">
		 		<?php $this->load->view("components/left_side_bar");?>
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
		 				<?php 
		 					$i = 1;
		 					foreach ($clients as $key => $client) :?>
			 				<tr>
			 					<td><?php echo $i++; ?></td>
			 					<td><?php echo e($client->name);?></td>
			 					<td>
			 						<a href="mailto:<?php echo $client->email;?>"><?php echo $client->email;?></a>
			 					</td>
			 					<td><?php echo $client->phone;?></td>
			 					<td>
			 						 <?php echo btn_edit("client/edit/".$client->id);?>
			 						 <?php echo btn_delete("client/delete/".$client->id);?>
			 					</td>
			 				</tr>
		 				<?php endforeach;?>
		 			</tbody>
		 		</table>
		 </div>
	</div>
</div>