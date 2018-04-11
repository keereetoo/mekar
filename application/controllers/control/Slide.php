<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slide extends CI_Controller {
	
	protected $default_page = 'slide';

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

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		$this->load->view('control/pages/'.$this->default_page.'/index',$data);
	}
	
	public function insert()
	{
		
		$query = $this->Model_slide->insert();
		
		
		$data['page'] = $this->default_page;
		if ($query === TRUE)
		{

			$this->load->view(base_url().'control/pages/'.$this->default_page.'/index',$data);
			

		}else{
			
			$this->load->view(base_url().'control/pages/'.$this->default_page.'/index',$data);
			


		}
		
		
		
	}

	public function update()
	{
		$id = $this->input->post('id');
		$query = $this->Model_slide->update($id);
		$data['page'] = $this->default_page;
		$data['type'] = ""/*$this->input->post('type')*/;
		if ($query === TRUE)

		{

			$this->load->view('control/pages/'.$this->default_page.'/index',$data);

		}else{

			$this->load->view('control/pages/'.$this->default_page.'/index',$data);

		}

	}
	public function delete($value='')
	{
		$data = $this->Model_slide->delect();
	}
	
	
	
	
	
	
	
}
