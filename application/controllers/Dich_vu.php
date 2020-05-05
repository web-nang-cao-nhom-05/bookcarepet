<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dich_vu extends CI_Controller {

	
	public function index()
	{
		// Load thư viện URL
		$this->load->helper('url');
		$this->load->database();

		$this->load->helper('url');

		//Viết câu lệnh truy vấn SQL
		$query = $this->db->query("
			SELECT *
			FROM dich_vu
			JOIN phong_kham
		ON dich_vu.ma_phong_kham = phong_kham.ma_phong_kham
		");
		

		$data['dich_vu'] = $query->result();
		
		$this->load->view('header');
		$this->load->view('v_dich_vu.php',$data);
		$this->load->view('footer');
	}
	public function hien_thi_dich_vu_chi_tiet()
    {
    	$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('m_dich_vu');
    	$ma_dv = $this->uri->segment(3);
    	$data['dich_vu'] = $this->m_dich_vu->lay_dich_vu_theo_ID($ma_dv);
    	$query = $this->db->query("
			SELECT *
			FROM dich_vu
			JOIN phong_kham
		ON dich_vu.ma_phong_kham = phong_kham.ma_phong_kham

		");
		$data['dich_vu'] = $query->result();
    //echo var_dump($data); exit();
		
		
		$this->load->view('v_dich_vu_chi_tiet', $data);
		
		
    }

	
}
