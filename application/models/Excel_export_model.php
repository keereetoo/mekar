<?php
class Excel_export_model extends CI_Model
{
	function fetch_data()
	{
		$this->db->order_by("sachk_id", "DESC");
		$query = $this->db->get("tb_sales_chkout");
		return $query->result();
	}

	function get_detail() 
	{ 
		
		$this->db->join('tb_sales_chkout','sales_id=sachk_sales_id');
		$this->db->where('tb_sales.sales_pay_status','0');
		$query = $this->db->get('tb_sales');

		// echo $this->db->last_query(); die();

		return $query->result();

	}



}
