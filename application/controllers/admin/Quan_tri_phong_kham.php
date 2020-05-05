<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_phong_kham extends CI_Controller {
    function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		
		$this->load->model('m_phong_kham');

		// Load thư viện session
		$this->load->library('session');

		if ($this->session->userdata('tai_khoan')=="") {
			redirect(base_url()."admin/dang_nhap.html");
		}
	}

	public function index()
	{
		

		// Lấy kết quả  sự kiện qua MODEL
		$data['phong_kham'] = $this->m_phong_kham->phong_kham();
		// Khai báo tiêu đề của trang
		$data['tieu_de'] = "Quản trị phong kham | Bookcarepet";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');

		// Hiển thị dữ liệu ra view
		$this->load->view('admin/v_quan_tri_phong_kham', $data);
	}


	public function them_moi_phong_kham()
	{
		// Load thư viện URL
		$this->load->helper('url');
		
		$data['tieu_de'] = "Thêm mới phòng khám | Bookcarepet";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
	
		// Hiển thị dữ liệu ra view
		$this->load->view('admin/v_them_moi_phong_kham', $data);
	}


	public function thuc_hien_them_moi_phong_kham()
	{
		
		
		// Thên mới book lich thông qua qua MODEL
		$this->m_phong_kham->them_moi_phong_kham();
	
		// Cho các bạn quay về trang Quản trị book_lich
		redirect(base_url()."admin/quan_tri_phong_kham");
	}
	
	// Hàm này có tác dụng LOAD tin tức có ID cụ thể ra form để sửa thông tin
	public function sua()
	{
		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('m_phong_kham');

		// Lấy ra ID của tin tức cần cập nhật
		$ma_phong_kham = $this->uri->segment(4);

		// Lấy thông tin về tin tức thông qua qua MODEL
		$data['phong_kham'] = $this->m_phong_kham->lay_phong_kham_theo_ID($ma_phong_kham);

		$data['tieu_de'] = "Quản trị phòng khám | Bookcarepet";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
	
		// Hiển thị dữ liệu ra view
		$this->load->view('admin/v_sua_phong_kham', $data);
	}


	// Hàm này có tác dụng thực hiện sửa tin tức, cập nhật vào CSDL
	public function thuc_hien_sua_phong_kham()
	{
		// Sửa tin tức thông qua MODEL
		$this->m_phong_kham->sua_phong_kham();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/quan_tri_phong_kham.html");
	}

	// Hàm này có tác dụng xóa tin tức
	public function xoa()
	{
		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('m_phong_kham');

		// Lấy ra ID của book lich cần xóa
		$ma_phong_kham = $this->uri->segment(4);

		// Xóa tin tức thông qua MODEL
		$this->m_phong_kham->xoa_phong_kham($ma_phong_kham);
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/quan_tri_phong_kham.html");
	}
	
}
