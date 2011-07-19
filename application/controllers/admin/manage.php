<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends CI_Controller {

	function __construct() {
		parent::__construct();
		if($this->users_model->Secure(array('type_2' => 'developer')) || $this->users_model->Secure(array('type_2' => 'admin'))
			|| $this->users_model->Secure(array('type_2' => 'manager'))){
		}else{
			$this->session->flashdata('flasherror', 'You must be logged into a valid admin account to access the admin area.');
			redirect('admin/login');
		}
		$this->lang->load('admin_base', 'portuguese');
	}
	
	public function index(){	
		$data['main_content'] = 'admin/home_view';
		$this->load->view('admin/template/template', $data);
	}
}