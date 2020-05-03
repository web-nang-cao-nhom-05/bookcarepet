<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trang_quan_tri extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Load thư viện session
		$this->load->library('session');

		if ($this->session->userdata('tai_khoan')=="") {
			redirect(base_url()."admin/dang_nhap.html");
		}
	}
	public function index()
	{
		// Khai báo tiêu đề của trang
		$data['tieu_de'] = "Quản trị hệ thống | Bookcarepet";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_trang_quan_tri');
	}
	
}

