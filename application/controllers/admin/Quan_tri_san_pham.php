<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_san_pham extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('m_san_pham');
		$this->load->model('m_ma_phong_kham');

		// Load thư viện session
		//$this->load->library('session');

		//if ($this->session->userdata('tai_khoan')=="") {
			//redirect(base_url()."admin/dang_nhap.html");
		//}
	}

	public function index()
	{
		// Lấy kết quả tin tức sự kiện qua MODEL
		$data['pk_1'] = $this->m_san_pham->lay_san_pham_theo_ma_phong_kham(1);

		// Lấy kết quả tin tức công nghệ qua MODEL
		$data['pk_2'] = $this->m_san_pham->lay_san_pham_theo_ma_phong_kham(2);
		// Lấy kết quả tin tức công nghệ qua MODEL
		$data['pk_3'] = $this->m_san_pham->lay_san_pham_theo_ma_phong_kham(3);

		// Hiển thị dữ liệu ra view
		$this->load->view('admin/v_quan_tri_san_pham', $data);
	}


	// Hàm này có tác dụng LOAD ra form nhập liệu
	public function them_moi_san_pham()
	{
		// Lấy danh sách loại tin để hiển thị bên View
		$data['ma_phong_kham'] = $this->m_ma_phong_kham->lay_danh_sach_ma_phong_kham();

		// Khai báo tiêu đề của trang
		$data['ten_san_pham'] = "Thêm mới sản phẩm | K19HTTTA";

		// Load ra được giao diện quản trị hệ thống
		//$this->load->view('admin/v_header', $data);
		//$this->load->view('admin/v_menu');
		$this->load->view('admin/v_san_pham_them_moi', $data);
	}


	// Hàm này có tác dụng thực hiện thêm mới tin tức vào CSDL
	public function thuc_hien_them_moi_san_pham()
	{
		// Thêm mới tin tức thông qua qua MODEL
		$this->m_san_pham->them_moi_san_pham();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/quan_tri_san_pham.html");
	}

	// Hàm này có tác dụng LOAD tin tức có ID cụ thể ra form để sửa thông tin
	public function sua()
	{
		// Lấy ra ID của tin tức cần cập nhật
		$ma_sp = $this->uri->segment(4);

		// Lấy thông tin về tin tức thông qua qua MODEL
		$data['san_pham'] = $this->m_san_pham->lay_san_pham_theo_ID($ma_sp);

		// Lấy danh sách loại tin để hiển thị bên View
		$data['ma_phong_kham'] = $this->m_ma_phong_kham->lay_danh_sach_ma_phong_kham();

		// Khai báo tiêu đề của trang
		$data['ten_san_pham'] = "Sửa dịch vụ | K19HTTTA";

		// Load ra được giao diện quản trị hệ thống
	//	$this->load->view('admin/v_header', $data);
	//	$this->load->view('admin/v_menu');
		$this->load->view('admin/v_san_pham_sua', $data);
	}


	// Hàm này có tác dụng thực hiện sửa tin tức, cập nhật vào CSDL
	public function thuc_hien_sua_san_pham()
	{
		// Sửa tin tức thông qua MODEL
		$this->m_san_pham->sua_san_pham();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/quan_tri_san_pham.html");
	}

	// Hàm này có tác dụng xóa tin tức
	public function xoa()
	{
		// Lấy ra ID của tin tức cần xóa
		$ma_sp = $this->uri->segment(4);

		// Xóa tin tức thông qua MODEL
		$this->m_san_pham->xoa_san_pham($ma_sp);
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/quan_tri_san_pham.html");
	}

}
