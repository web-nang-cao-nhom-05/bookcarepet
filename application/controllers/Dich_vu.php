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
		
		//$this->load->view('header');
		$this->load->view('v_dich_vu.php',$data);
		//$this->load->view('footer');
	}

	
}
