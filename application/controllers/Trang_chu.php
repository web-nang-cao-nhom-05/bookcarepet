<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trang_chu extends CI_Controller {

	
	public function index()
	{
		$this->load->database();

		$this->load->helper('url');

		//Viết câu lệnh truy vấn SQL
		$query = $this->db->query("
			SELECT *
			FROM dich_vu
			JOIN phong_kham
		ON dich_vu.ma_phong_kham = phong_kham.ma_phong_kham
		");
		$query1 = $this->db->query("
			SELECT *
			FROM san_pham_pet
			JOIN phong_kham
		ON san_pham_pet.ma_phong_kham = phong_kham.ma_phong_kham
		");

		$data['dich_vu'] = $query->result();
		$data['san_pham_pet'] = $query1->result();
		$this->load->view('header');
		$this->load->view('index.php',$data);
		$this->load->view('footer');
	}

	
}
