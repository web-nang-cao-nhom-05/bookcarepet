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

        public function phong_kham()
        {
            
            $query = $this->db->query("
				SELECT * 
				FROM phong_kham
			");

            // Trả kết quả truy vấn dữ liệu
            return $query->result();
        }
        public function lay_phong_kham_theo_ID($ma_phong_kham)
        {
            // Viết câu lệnh truy vấn SQL lấy các tin tức sự kiện (có mã loai_tin_id)
            $query = $this->db->query("
                SELECT * 
                FROM phong_kham
                WHERE ma_phong_kham=".$ma_phong_kham
            );

            // Trả kết quả truy vấn dữ liệu
            return  $query->row();
        }

       public function them_moi_phong_kham()
        {
            // Dữ liệu thu được từ FORM nhập dữ liệu
        
            $ten_phong_kham = $_POST['ten_phong_kham'];
            $sdt = $_POST['sdt'];
            $dia_chi = $_POST['dia_chi'];
            $email = $_POST['email'];
            

            // Đẩy dữ liệu này vào CSDL
            $data = array(
                'ten_phong_kham' => $ten_phong_kham,
                'sdt' => $sdt,
                'dia_chi' => $dia_chi,
                'email' => $email,
                
            );

            // Thực hiện chèn dữ liệu vào bảng 
            $this->db->insert('phong_kham', $data);

        }
        public function sua_phong_kham()
        {
            // Dữ liệu thu được từ FORM nhập dữ liệu
            $ma_phong_kham = $_POST['ma_phong_kham'];
            $ten_phong_kham = $_POST['ten_phong_kham'];
            $sdt = $_POST['sdt'];
            $dia_chi = $_POST['dia_chi'];
            $email = $_POST['email'];
           

            // Đẩy dữ liệu này vào CSDL
            $data = array(
                'ten_phong_kham' => $ten_phong_kham,
                'sdt' => $sdt,
                'dia_chi' => $dia_chi,
                'email' => $email
               
            );

            // Thực hiện cập nhật dữ liệu vào bảng TIN TỨC
            $this->db->where('ma_phong_kham', $ma_phong_kham);
            $this->db->update('phong_kham', $data);
        }

        public function xoa_phong_kham($ma_phong_kham)
        {
            // Thực hiện việc xóa dữ liệu
            $this->db->where('ma_phong_kham', $ma_phong_kham);
            $this->db->delete('phong_kham');
        }




	}

;?>
