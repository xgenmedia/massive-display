<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Project extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();

		// load model
		$this->load->model('project_model');
	}

	public function index()
	{
		
		$this->data['projects'] = $this->project_model->get_by(array('is_delete'=>'N'));
		// Load view
		$this->data['subview'] = 'project/index';
		$this->load->view("__layout_main",$this->data);
	}

	public function edit($id = NULL)
	{
		$this->load->model('client_model');
		$this->load->model('project_status_model');
		$this->load->model('user_model');
		
		$this->load->model('project_client_model');
		$this->load->model('project_user_model');

		$rules = array('code' => array(
										'field' => 'code',
						                'label' => 'Code',
						                'rules' => 'required'
									   ));
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() == TRUE){
			     $data = array(
						 'code'=>$this->input->post('code'),
						 'is_active'=>$this->input->post('is_active'),
						 'status'=>$this->input->post('status'),
						 );
			     if($id) {
			     	 if($this->project_model->save($data,$id)){
			     		 // update client
			     		$arrClient = array('project_id'=>$id,'client_id'=>$this->input->post('client'));
			     		$this->project_client_model->delete_by(array('project_id'=>$id));
			     		$this->project_client_model->save($arrClient);		
			     		// update employee.
			     		$arrUser = array('project_id'=>$id,'user_id'=>$this->input->post('user'));
			     		$this->project_user_model->delete_by(array('project_id'=>$id));
			     		$this->project_user_model->save($arrUser);	 	

			     		// session message
			     		 $this->session->set_flashdata('success_message', 'Record edited successfully');
			     	 } else {
			     	 	$this->session->set_flashdata('error_message', 'Error found to edit record');
			     	 }
			     } else {
			     	$projectId = $this->project_model->save($data,$id);
			     	if($projectId){
			     		// save client
			     		$this->project_client_model->save(array('project_id'=>$projectId,'client_id'=>$this->input->post('client')));
			     		// save employee
			     		$this->project_user_model->save(array('project_id'=>$projectId,'user_id'=>$this->input->post('user')));		

			     		// session message
			     		$this->session->set_flashdata('success_message', 'Record added successfully');
			     	} else {
			     		$this->session->set_flashdata('error_message', 'Error found to add record');
			     	}
			     	
			     }

			     // redirect
			     redirect(array("project"));
		}
		
		if($id) {
			$project = $this->project_model->join_with_user_client($id,array(),TRUE);
		} else {
			$project = new stdClass;
			$project->id='';
			$project->code='';
			$project->is_active='Y';
			$project->status=1;
			$project->status=1;
			$project->client_id=1;
			$project->user_id=1;
		}
		$this->data['project'] = $project;
		// Project Status
		$status = $this->project_status_model->get_by(array('is_delete'=>'N'));
		foreach ($status as $stsKey => $statu) {
			$this->data['status'][$statu->id] = $statu->title;
		}
		// Users
		$users = $this->user_model->get_by(array('is_delete'=>'N'));
		foreach ($users as $keyUser => $user) {
			$this->data['users'][$user->id] = $user->name;
		}
		
		// Client
		$clients = $this->client_model->get_by(array('is_delete'=>"N")); 
		foreach ($clients as $clientKey => $client) {
			$this->data['client'][$client->id] = $client->name;
		}
		
		// Load view
		$this->data['subview'] = 'project/edit';
		$this->load->view("__layout_main",$this->data);
	}

	public function delete($id)
	{
		$data = array('is_delete'=>'Y');
		if( $this->project_model->save($data,$id)) {
			 $this->session->set_flashdata('success_message', 'Record deleted successfully');
		} else {
			$this->session->set_flashdata('error_message', 'Error found to delete record');
		}
		// reditect
		redirect(array("project"));
	}


	
}