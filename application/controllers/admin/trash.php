<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trash extends CI_Controller {

	function __construct() {
		parent::__construct();
		if($this->users_model->Secure(array('type_2' => 'developer')) || $this->users_model->Secure(array('type_2' => 'admin'))
			|| $this->users_model->Secure(array('type_2' => 'manager'))){
		}else{
			$this->session->flashdata('flasherror', 'You must be logged into a valid admin account to access the admin area.');
			redirect('admin/login');
		}
		$this->load->model('admin/articles_model');
		$this->lang->load('admin_base', 'portuguese');
	}


	// LIST ARTICLES
	public function index($offset = 0){
		
		//load dependencies
		$this->load->library('pagination');
		$this->load->model('admin/category_model');
		
		$perpage = 10;
		
		$config['base_url'] 		= base_url() . 'index.php/admin/trash/index/';
		$config['per_page']			= $perpage;
		$config['uri_segment']  	= 5;
		$config['first_link'] 		= true;
		$config['last_link'] 		= true;
		$config['next_link'] 		= 'Seguinte »';
		$config['prev_link'] 		= '« Anterior';
		$config['anchor_class']		= "class='number' ";
		
		$config['total_rows'] 		= $this->articles_model->GetArticles(array('count' => true, 'articlestatus' => 'deleted'));
		
		$data['records'] 			= $this->articles_model->GetArticles(array('articlestatus' => 'deleted', 'limit' => $perpage, 'offset' => $offset));	
		
		$this->pagination->initialize($config); 		
		$data['pagination'] = $this->pagination->create_links();
		
		$data['categories'] 	= $this->category_model->GetCategories();
		$data['main_content'] 	= 'admin/trash_view';
		$data['action'] 		= 'list';
		$data['current_page'] 	= 'trash';
		$this->load->view('admin/template/template', $data);
		
	}
	
	// LIST MENUS
	public function menus($offset = 0){
		
		/** In progress **/
		//load dependencies
		$this->load->model('admin/menus_model');
		$data['records'] = $this->menus_model->GetMenus();
		
		//$data['main_content'] = 'admin/trash_view';
		$data['action'] = 'list';
		$data['current_page'] = 'trash';
		$this->load->view('admin/template/template', $data);
		
	}
	
	
	
}