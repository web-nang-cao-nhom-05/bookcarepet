<?php
	class m_phan_hoi extends CI_Model
	{
		
		
		public function lay_phan_hoi()
		{
			$query = $this->db->query("
				SELECT *
				FROM phan_hoi
				");
			return $query->result();
		}
		
		public function them_moi_phan_hoi()
        {

        // Dữ liệu thu được từ FORM nhập dữ liệu
			$ho_ten = $_POST['txtHoTen'];
			$sdt = $_POST['txtSDT'];
			$email = $_POST['txtEmail'];
			$gop_y = $_POST['txtGopY'];
			// Đẩy dữ liệu này vào CSDL
			$data = array(
				'ho_ten' => $ho_ten,
				'sdt' => $sdt,
				'email' => $email,
				'gop_y' => $gop_y
			);

			// Thực hiện chèn dữ liệu vào bảng TIN TỨC
			$this->db->insert('phan_hoi', $data);
		}
		public function xoa_phan_hoi($id)
        {
			// Thực hiện việc xóa dữ liệu
			$this->db->where('id', $id);
			$this->db->delete('phan_hoi');
        }
	}
;?>