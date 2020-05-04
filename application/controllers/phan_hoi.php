<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class phan_hoi extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('m_phan_hoi');
		//$this->load->model('m_loai_phan_hoi');

		// Load thư viện session
		$this->load->library('session');

		/*if ($this->session->userdata('email')=="") {
			redirect(base_url()."admin/dang_nhap.html");
		}*/
	}

	public function index()
	{


		// Lấy kết quả truy vấn dữ liệu
		$data['phan_hoi'] = $this->m_phan_hoi->lay_phan_hoi();

		// Hiển thị dữ liệu ra view
		$this->load->view('v_phan_hoi', $data);
	}

	public function thuc_hien_them_moi_phan_hoi()
	{
		// Kết nối đến CSDL
		$this->load->database();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến MODEL
		$this->load->model('m_phan_hoi');

		// Thên mới tin tức thông qua qua MODEL
		$this->m_phan_hoi->them_moi_phan_hoi();
	
		// Cho các bạn quay về trang Quản trị tin tức
		echo "<script type='text/javascript'>
			window.alert('Cảm ơn bạn đã phản hồi. Chúng tôi sẽ liên lạc lại sớm cho bạn.');
			</script>";

			echo "<script type='text/javascript'>
			window.location.href= '".base_url()."phan_hoi';
			</script>";
	}
}
