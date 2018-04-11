<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	
	protected $default_page = 'product';

	public function __construct()
	{
		parent::__construct();		
		
		// if(!isset($_SESSION["user_username"])){

			// redirect('control');  

		// }
		$this->load->model('Model_slide');	
	}

	
	public function index()
	{	
		if ($this->input->get('type') == 'edit') {
			$data = $this->Model_slide->get_detail($this->input->get('id'));
		}else{
			$data = $this->Model_slide->get_data();
		}

		
		$data['type'] = $this->input->get('type');
		$data['page'] = $this->default_page;		

		echo "<pre>";
		print_r($data);
		echo "</pre>";
		$this->load->view('control/pages/'.$this->default_page.'/index',$data);
	}
	
	public function insert()
	{
		
		$query = $this->Model_slide->insert();
		
		
		$data['page'] = $this->default_page;
		if ($query === TRUE)
		{

			$this->load->view();
			

		}else{
			
			$this->load->view();
			


		}
		
		
		
	}

	public function update()
	{
		
		$query = $this->Model_slide->update();
		
		
		$data_page['page'] = "home" ;
		if ($query === TRUE)
		{
			
			$this->load->view();
			

		}else{
			
			$this->load->view();
			

		}
		
		
		
	}
	
	
	
	
	
	
}
