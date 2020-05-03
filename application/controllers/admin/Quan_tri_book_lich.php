<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_book_lich extends CI_Controller {
    function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('m_book_lich');
		$this->load->model('m_dich_vu');
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
		$data['book_lich'] = $this->m_book_lich->book_lich();
		// Khai báo tiêu đề của trang
		$data['tieu_de'] = "Quản trị book_lich | Bookcarepet";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');

		// Hiển thị dữ liệu ra view
		$this->load->view('admin/v_quan_tri_book_lich', $data);
	}


	public function them_moi_book_lich()
	{
		// Load thư viện URL
		$this->load->helper('url');
		$data['dich_vu'] = $this->m_dich_vu->lay_danh_sach_dich_vu();
		$data['phong_kham'] = $this->m_phong_kham->lay_danh_sach_phong_kham();
		$data['tieu_de'] = "Thêm mới book lịch | Bookcarepet";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
	
		// Hiển thị dữ liệu ra view
		$this->load->view('admin/v_them_moi_book_lich', $data, $data);
	}


	public function thuc_hien_them_moi_book_lich()
	{
		
		
		// Thên mới book lich thông qua qua MODEL
		$this->m_book_lich->them_moi_book_lich();
	
		// Cho các bạn quay về trang Quản trị book_lich
		redirect(base_url()."admin/quan_tri_book_lich");
	}
	// Hàm này có tác dụng LOAD tin tức có ID cụ thể ra form để sửa thông tin
	public function sua()
	{
		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('m_book_lich');

		// Lấy ra ID của tin tức cần cập nhật
		$ma_book_lich = $this->uri->segment(4);

		// Lấy thông tin về tin tức thông qua qua MODEL
		$data['book_lich'] = $this->m_book_lich->lay_book_lich_theo_ID($ma_book_lich);

		$data['tieu_de'] = "Quản trị book_lich | Bookcarepet";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
	
		// Hiển thị dữ liệu ra view
		$this->load->view('admin/v_sua_book_lich', $data);
	}


	// Hàm này có tác dụng thực hiện sửa tin tức, cập nhật vào CSDL
	public function thuc_hien_sua_book_lich()
	{
		// Sửa tin tức thông qua MODEL
		$this->m_book_lich->sua_book_lich();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/quan_tri_book_lich.html");
	}

	// Hàm này có tác dụng xóa tin tức
	public function xoa()
	{
		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('m_book_lich');

		// Lấy ra ID của book lich cần xóa
		$ma_book_lich = $this->uri->segment(4);

		// Xóa tin tức thông qua MODEL
		$this->m_book_lich->xoa_book_lich($ma_book_lich);
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/quan_tri_book_lich.html");
	}
	
}
