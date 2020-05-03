<?php 
	class m_phong_kham extends CI_Model {
		// Mục đích lấy tin tức theo loại tin
		public function lay_danh_sach_phong_kham()
        {
			// Viết câu lệnh truy vấn SQL lấy ra được danh sách các loại tin tức
			$query = $this->db->query("
				SELECT * 
				FROM phong_kham
			");

			// Trả kết quả truy vấn dữ liệu
            return $query->result();
        }
	}
;?>