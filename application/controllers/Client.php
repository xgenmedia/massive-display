<?php
/**
* 
*/
class Client extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		// Load model
		$this->load->model('client_model');
	}

	public function index()
	{
		
		$this->data['clients'] = $this->client_model->get_by(array('is_delete'=>'N'));
		// Load view
		$this->data['subview'] = 'client/index';
		$this->load->view("__layout_main",$this->data);
	}

	public function edit($id = NULL)
	{
		
		$rules = array('name' => array(
										'field' => 'name',
						                'label' => 'Name',
						                'rules' => 'required'
									   ),
						'email' => array(
										'field' => 'email',
						                'label' => 'Email',
						                'rules' => 'required|valid_email'
									   ),
						'Phone' => array(
										'field' => 'phone',
						                'label' => 'Phone',
						                'rules' => 'required'
									   ),
						'address' => array(
										'field' => 'address',
						                'label' => 'Address',
						                'rules' => 'required'
									   ),
					  );
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() == TRUE){
			$data = array(
					'name'=>$this->input->post('name'),
					'address'=>$this->input->post('address'),
					'phone'=>$this->input->post('phone'),
					'email'=>$this->input->post('email'),
					'fax'=>$this->input->post('fax'),
					'is_active'=>'Y',
					);
			if($id) {
					if($this->client_model->save($data,$id)) {
						 $this->session->set_flashdata('success_message', 'Record edited successfully');
					} else {
						$this->session->set_flashdata('error_message', 'Error found to edit record');
					}
				} else {
					if($this->client_model->save($data)) {
						$this->session->set_flashdata('success_message', 'Record added successfully');
					} else {
						$this->session->set_flashdata('error_message', 'Error found to add record');
					}
				}
				// reditect
				redirect(array("client"));
		}

		if($id) {
			$this->data['client'] = $this->client_model->get($id,TRUE); 
		} else {
			$this->data['client'] = new stdClass;
			$this->data['client']->name ='';
			$this->data['client']->email ='';
			$this->data['client']->phone ='';
			$this->data['client']->fax ='';
			$this->data['client']->address ='';
		}
		// Load view
		$this->data['subview'] = 'client/edit';
		$this->load->view("__layout_main",$this->data);
	}


	public function delete($id)
	{
		$data = array('is_delete'=>'Y');
		if( $this->client_model->save($data,$id)) {
			 $this->session->set_flashdata('success_message', 'Record deleted successfully');
		} else {
			$this->session->set_flashdata('error_message', 'Error found to delete record');
		}
		// reditect
		redirect(array("client"));
	}

	
}