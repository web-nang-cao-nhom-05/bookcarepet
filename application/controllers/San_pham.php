<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class San_pham extends CI_Controller {

	
	public function index()
	{
		// Load thư viện URL
		$this->load->helper('url');
		$this->load->database();

		$this->load->helper('url');

		//Viết câu lệnh truy vấn SQL
		$query = $this->db->query("
			SELECT *
			FROM san_pham
			JOIN phong_kham
		ON san_pham.ma_phong_kham = phong_kham.ma_phong_kham
		");
		

		$data['san_pham'] = $query->result();
		
		$this->load->view('header');
		$this->load->view('v_san_pham.php',$data);
		$this->load->view('footer');
	}
	public function hien_thi_san_pham_chi_tiet()
    {
    	$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('m_san_pham');
    	$ma_dv = $this->uri->segment(3);
    	$data['san_pham'] = $this->m_san_pham->lay_san_pham_theo_ID($ma_sp);
    	$query = $this->db->query("
			SELECT *
			FROM san_pham
			JOIN phong_kham
		ON san_pham.ma_phong_kham = phong_kham.ma_phong_kham

		");
		$data['san_pham'] = $query->result();
    //echo var_dump($data); exit();
		
		//$this->load->view('header');
		$this->load->view('v_san_pham_chi_tiet', $data);
		//$this->load->view('footer');
		
    }

	
}
