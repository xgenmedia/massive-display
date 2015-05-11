<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends MY_Model {

	   protected $_table_name='project';
	   public function __construct()
	   {
	   	parent::__construct();
	   }


	   public function join_with_user_client($id = NULL,$cond = array(),$single=FALSE)
	   {
	   		$this->db->select('project.id,project.code,project.is_active,project.status,project_client.client_id,project_users.user_id');
			$this->db->from($this->_table_name);
			$this->db->join('project_client', 'project_client.project_id = project.id');
			$this->db->join('project_users', 'project_users.project_id = project.id');
			if($id) {
				$this->db->where('project.id',$id);
			}
			if(count($cond)>0) {
				$this->db->where($cond);			
			}
			if($single){
				$query = $this->db->get()->row();	
			} else {
				$query = $this->db->get()->result();
			}
			
			return $query;
	   }

}

/* End of file Project_model.php */
/* Location: ./application/models/Project_model.php */