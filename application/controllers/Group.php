<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Group extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();

		// Load Model
		$this->load->model('group_model');
	}

	public function index()
	{
		$this->data['groups'] = $this->group_model->get_by(array('is_deleted'=>'N'));
		// Load view
		$this->data['subview'] = 'group/index';
		$this->load->view("__layout_main",$this->data);
	}


	public function edit($id = NULL)
	{
		$rules = array('name' => array(
										'field' => 'name',
						                'label' => 'Name',
						                'rules' => 'required'
									   ));
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() == TRUE){
				$data = array('title'=>$this->input->post('name'),
						  'is_active'=>$this->input->post('is_active')
						  );
				if($id) {
					if($this->group_model->save($data,$id)) {
						 $this->session->set_flashdata('success_message', 'Record edited successfully');
					} else {
						$this->session->set_flashdata('error_message', 'Error found to edit record');
					}
				} else {
					if($this->group_model->save($data)) {
						$this->session->set_flashdata('success_message', 'Record added successfully');
					} else {
						$this->session->set_flashdata('error_message', 'Error found to add record');
					}
				}
				// reditect
				redirect(array("group"));
		}
		

		if($id){
			$this->data['group'] = $this->group_model->get($id,TRUE);
		} else {
			$this->data['group'] = new stdClass;
			$this->data['group']->title='';
			$this->data['group']->is_active ='Y';
		}

		// Load view
		$this->data['subview'] = 'group/edit';
		$this->load->view("__layout_main",$this->data);	
	}
}