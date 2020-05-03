<?php 
	class m_dich_vu extends CI_Model {
		// Mục đích lấy tin tức theo loại tin
		public function lay_danh_sach_dich_vu()
        {
			// Viết câu lệnh truy vấn SQL lấy ra được danh sách các loại tin tức
			$query = $this->db->query("
				SELECT * 
				FROM dich_vu
			");

			// Trả kết quả truy vấn dữ liệu
            return $query->result();
        }
	}
;?>