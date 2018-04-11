<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_slide extends CI_Model
{
	private $type = 'slide';
	
	public function __construct()
	{
		parent::__construct();			
		$this->load->dbutil();
		$this->load->helper(array('classupload'));

	}

	public function get_data($value='')
	{
		$data['slide'] = $this->db->get('slide')->result_array();

		return $data;
	}

	public function get_detail($id='')
	{
		echo $id;
		$data['detail'] = $this->db->where('slide_id',$id)->get('slide')->row_array();

		return $data;
	}

	public function insert($value='')
	{
		/*echo "<pre>";
		print_r($this->input->post());
		echo $_FILES['images']["name"];
		echo "</pre>";
		die();*/

		$sort = count($this->db->get('slide')->result_array())+1;

		$data = array(
			'slide_title_TH' =>  $this->input->post('Title_TH'),
			'slide_title_EN' =>  $this->input->post('Title_EN'),
			'slide_des_TH' =>  $this->input->post('Detail_TH'),
			'slide_des_EN' =>  $this->input->post('Detail_EN'),
			'silde_sort' => $sort,
			
		);

		$this->db->insert('slide',$data);
		$id = $this->db->insert_id();
		// echo $id;

		/*echo "<pre>";
		print_r($data);
		echo "</pre>";
		die();*/
		

		if($this->db->trans_status() === TRUE)
		{

			return TRUE;

		}else{

			return FALSE;


		}
	}

	public function update($id='')
	{
		/*echo "<pre>";
		print_r($_POST);
		echo "</pre>";*/
		$data = array(
			'slide_title_TH' =>  $this->input->post('Title_TH'),
			'slide_title_EN' =>  $this->input->post('Title_EN'),
			'slide_des_TH' =>  $this->input->post('Detail_TH'),
			'slide_des_EN' =>  $this->input->post('Detail_EN'),
			
		);
		$this->db->where('slide_id',$id);
		$this->db->insert('slide',$data);
		$id = $this->db->insert_id();

		if($this->db->trans_status() === TRUE)
		{

			return TRUE;

		}else{

			return FALSE;


		}

	}

	public function delete($value='')
	{
		# code...
	}

}

?>