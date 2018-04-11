<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	protected $default_page = 'contact';

	public function __construct()
	{
		parent::__construct();		
		
		// if(!isset($_SESSION["user_username"])){

			// redirect('control');  

		// }
		// $this->load->model('Model_about');	
	}

	
	public function index()
	{	
		$data['type'] = $this->input->get('type');
		$data['page'] = $this->default_page;		
		if (@$_GET['type']== 'add') {



		}elseif(@$_GET['type']== 'edit'){


			
		}else{
			$data['type'] = $this->input->get('type');
			$this->load->view('control/pages/'.$this->default_page.'/index',$data);
		}
		
		
		
	}
	
	public function update()
	{
		
		$query = $this->Model_about->update();
		
		
		$data_page['page'] = "home" ;
		if ($query === TRUE)
		{
			
			$this->load->view('control/modal/success',$data_page);
			

		}else{
			
			$this->load->view('control/modal/error',$data_page);
			
			

		}
		
		
		
	}
	
	
	
	
	
	
	
}
