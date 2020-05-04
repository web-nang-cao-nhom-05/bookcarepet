<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class quan_tri_phan_hoi extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('m_tin_tuc');
		//$this->load->model('m_loai_tin_tuc');

		// Load thư viện session
		$this->load->library('session');

		if ($this->session->userdata('tai_khoan')=="") {
			redirect(base_url()."admin/dang_nhap.html");
		}
	}
	public function index()
	{
		// Kết nối đến CSDL
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('m_phan_hoi');


		// Lấy kết quả truy vấn dữ liệu
		$data['phan_hoi'] = $this->m_phan_hoi->lay_phan_hoi();



		// Hiển thị dữ liệu ra view
		$this->load->view('admin/v_quan_tri_phan_hoi', $data);
	}
	


	public function xoa_phan_hoi()
	{
		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('m_phan_hoi');

		// Lấy ra ID của tin tức cần xóa
		$id = $this->uri->segment(4);

		// Xóa tin tức thông qua MODEL
		$this->m_phan_hoi->xoa_phan_hoi($id);
	
		// Cho các bạn quay về trang 
		redirect(base_url()."admin/quan_tri_phan_hoi.html");
	}
}
