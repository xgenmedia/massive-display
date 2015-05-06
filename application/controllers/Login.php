<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Login extends Admin_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
	}

	public function index()
	{
		
		// load view
		$this->data['subview'] = 'login/index';	
		$this->load->view('__layout_login',$this->data);
	}


	public function logout()
	{
		redirect(array('login'));
	}
        
}