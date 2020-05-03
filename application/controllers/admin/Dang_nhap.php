<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dang_nhap extends CI_Controller {
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

		$this->load->view('admin/v_dang_nhap');
	}

	public function kiem_tra_dang_nhap()
	{
		// Lấy được thông tin đăng nhập của người dùng
		$tai_khoan = $_POST["tai_khoan"];
		$mat_khau = $_POST["mat_khau"];

		// Kiểm tra xem thông tin đó có KHỚP với thông tin đã lưu trong CSDL hay không?
		if ($this->m_admin->dem_so_ban_ghi_thu_duoc($tai_khoan, $mat_khau)!=0) {
			// Tạo phiên làm việc (session); mục đích của việc tạo session giúp chúng ta xác minh 1 người có được phép truy cập vào các trang quản trị của chúng ta hay không - đảm bảo tính bảo an?
			$this->session->set_userdata('tai_khoan', $email);

			// Thông báo cho người dùng đăng nhập thành công
			echo 
			"
				<script type='text/javascript'>
					window.alert('Bạn đăng nhập thành công! Chào mừng bạn đến phần quản trị hệ thống');
				</script>
			";

			// Chuyển người dùng vào trang quản trị
			echo 
			"
				<script type='text/javascript'>
					window.location.href = '".base_url()."admin/trang_quan_tri.html'
				</script>
			";

			// redirect(base_url()."admin/quan_tri_he_thong.html");
		} else {
			// Thông báo cho người dùng đăng nhập không thành công
			echo 
			"
				<script type='text/javascript'>
					window.alert('Thông tin tài khoản bạn nhập không chính xác. Vui lòng kiểm tra lại.');
				</script>
			";

			// Chuyển người dùng ra trang đăng nhập
			echo 
			"
				<script type='text/javascript'>
					window.location.href = '".base_url()."admin/dang_nhap.html'
				</script>
			";

			// redirect(base_url()."admin/dang_nhap.html");
		}	
	}

	public function dang_xuat()
	{
		// Thực hiện xóa toàn bộ dữ liệu phiên làm việc của người dùng
		session_destroy();

		// Chuyển người dùng ra trang đăng nhập
		redirect(base_url()."admin/dang_nhap.html");
	}
} 