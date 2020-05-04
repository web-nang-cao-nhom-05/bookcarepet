<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tin_tuc extends CI_Controller {

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
		$this->load->model('m_tin_tuc');
	}

	public function index()
	{
		$data['tin_tuc'] = $this->m_tin_tuc->lay_tin_tuc();
		$query = $this->db->query("
			SELECT anh_minh_hoa, tieu_de, date(thoi_gian) as thoi_gian
			FROM tin_tuc
			ORDER BY thoi_gian DESC limit 3

		");
		$data['bai_viet_gan_day'] = $query->result();
		$this->load->view('header');
		$this->load->view('v_tin_tuc',$data);
		$this->load->view('footer');
	}

	public function hien_thi_tin_tuc_chi_tiet()
    {
    	$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('m_tin_tuc');
    	$id = $this->uri->segment(3);
    	$data['tin_tuc_chi_tiet'] = $this->m_tin_tuc->lay_tin_tuc_theo_ID($id);
    	$query = $this->db->query("
			SELECT id, anh_minh_hoa, tieu_de, date(thoi_gian) as thoi_gian
			FROM tin_tuc
			ORDER BY thoi_gian DESC limit 3

		");
		$data['bai_viet_gan_day'] = $query->result();
    //echo var_dump($data); exit();
		$this->load->view('v_tin_tuc_chi_tiet', $data);
		
    }

   
}
