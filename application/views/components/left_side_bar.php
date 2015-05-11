<div class="list-group">
      <a href="<?php echo base_url("task");?>" class="list-group-item <?php echo $this->uri->segment(1)=='task'?'active':'none';?>">Resource</a>
      <a href="<?php echo base_url("group");?>" class="list-group-item <?php echo $this->uri->segment(1)=='group'?'active':'none';?>">Group</a>
      <a href="<?php echo base_url("user");?>" class="list-group-item <?php echo $this->uri->segment(1)=='user'?'active':'none';?>	">User</a>
      <a href="#" class="list-group-item ">Products Category</a>
      <a href="#" class="list-group-item ">Products</a>
	  <a href="<?php echo base_url("client");?>" class="list-group-item <?php echo $this->uri->segment(1)=='client'?'active':'none';?>">Clients</a>
	  <a href="#" class="list-group-item">Dept</a>
	  <a href="#" class="list-group-item">Employee</a>
	  <a href="<?php echo base_url("project");?>" class="list-group-item <?php echo $this->uri->segment(1)=='project'?'active':'none';?>">Project</a>
	  <a href="#" class="list-group-item">Quotations</a>
	  <a href="#" class="list-group-item">Approve Project</a>
	  <a href="#" class="list-group-item">Settings</a>
</div>