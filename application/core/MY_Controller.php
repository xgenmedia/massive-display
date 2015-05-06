<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class MY_Controller extends CI_Controller
{
	public $data =array();

	function __construct()
	{
			parent::__construct();
		// load library
			$this->load->library('form_validation');
		// 	
			$this->data['site_name'] ="Massive Display";
			$this->data['title'] ="Massive Display";
		// Dynamic Load file 
			$this->data['css'] = array();
			$this->data['js'] = array();
			$this->data['style'] = array();
			$this->data['script'] = array();
	}
}