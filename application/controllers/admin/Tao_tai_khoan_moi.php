	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tao_tai_khoan_moi extends CI_Controller {
    function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Load thư viện session
		$this->load->library('session');

		// Kết nối đến MODEL
		$this->load->model('m_admin');
	}
	public function index()
	{

		$this->load->view('admin/v_tao_tai_khoan_moi');
	}
	 

	public function them_moi_mat_khau()
	{
		// Load thư viện URL
		$this->load->helper('url');
		
		$data['tieu_de'] = "Quên mật khẩu | Bookcarepet";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
	
		// Hiển thị dữ liệu ra view
		$this->load->view('admin/v_them_moi_mat_khau', $data);
	}


	public function thuc_hien_them_moi_mat_khau()
	{
		
		
		// Thên mới book lich thông qua qua MODEL
		$this->m_admin->them_moi_mat_khau();
	
		// Cho các bạn quay về trang Quản trị book_lich
		redirect(base_url()."admin/dang_nhap");
	}

	
	
}
