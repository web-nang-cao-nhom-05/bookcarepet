<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kiem_tra_tai_khoan extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Load thư viện session


		// Kết nối đến MODEL
		$this->load->model('m_admin');
	}

	public function index()
	{		

		$this->load->view('admin/v_kiem_tra_tai_khoan');
	}

	
	public function kiem_tra_tai_khoan_email()
	{
		// Lấy được thông tin đăng nhập của người dùng
		$tai_khoan = $_POST["tai_khoan"];
		$email = $_POST["email"];

		// Kiểm tra xem thông tin đó có KHỚP với thông tin đã lưu trong CSDL hay không?
		if ($this->m_admin->dem_so_tai_khoan($tai_khoan, $email)!=0) {
			

			// Thông báo cho người dùng đăng nhập thành công
			echo 
			"
				<script type='text/javascript'>
					window.alert('Hãy tạo tài khoản mới');
				</script>
			";
			
			$tai_khoan = $this->uri->segment(4);

			$this->db->where('tai_khoan', $tai_khoan);
            $this->db->delete('admin');
			// Chuyển người dùng vào trang quản trị
			echo 
			"
				<script type='text/javascript'>
					window.location.href = '".base_url()."admin/tao_tai_khoan_moi'
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
					window.location.href = '".base_url()."admin/kiem_tra_tai_khoan.html'
				</script>
			";

			// redirect(base_url()."admin/dang_nhap.html");
		}	
	}

	
} 