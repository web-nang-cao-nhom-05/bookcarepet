<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_tin_tuc extends CI_Controller {

	
	public function index()
	{
		// Kết nối đến CSDL
		$this->load->database();


		// Viết câu lệnh truy vấn SQL lấy các tin tức sự kiện (có mã loai_tin_id=1)
		$query1 = $this->db->query("
			SELECT * 
			FROM tin_tuc");

		// Lấy kết quả truy vấn dữ liệu
		$data['tin_tuc'] = $query1->result();

		$this->load->view('admin/v_quan_tri_tin_tuc', $data);
	}
}