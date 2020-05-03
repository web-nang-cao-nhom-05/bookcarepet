<?php 
    class m_book_lich extends CI_Model {
       
        public function book_lich()
        {
            
            $query = $this->db->query("
                SELECT *
                FROM book_lich
                JOIN  dich_vu ON book_lich.ma_dv = dich_vu.ma_dv
                JOIN phong_kham ON book_lich.ma_phong_kham = phong_kham.ma_phong_kham
                ");

            // Trả kết quả truy vấn dữ liệu
            return $query->result();
        }
        public function lay_book_lich_theo_ID($ma_book_lich)
        {
            // Viết câu lệnh truy vấn SQL lấy các tin tức sự kiện (có mã loai_tin_id)
            $query = $this->db->query("
                SELECT * 
                FROM book_lich
                WHERE ma_book_lich=".$ma_book_lich
            );

            // Trả kết quả truy vấn dữ liệu
            return  $query->row();
        }

       public function them_moi_book_lich()
        {
            // Dữ liệu thu được từ FORM nhập dữ liệu
        
            $ho_ten = $_POST['ho_ten'];
            $sdt = $_POST['sdt'];
            $dia_chi = $_POST['dia_chi'];
            $email = $_POST['email'];
            $giong_thu_cung = $_POST['giong_thu_cung'];
             $ma_phong_kham = $_POST['ma_phong_kham'];
             $ma_dv = $_POST['ma_dv'];

            // Đẩy dữ liệu này vào CSDL
            $data = array(
                'ho_ten' => $ho_ten,
                'sdt' => $sdt,
                'dia_chi' => $dia_chi,
                'email' => $email,
                'giong_thu_cung' => $giong_thu_cung,
                'ma_phong_kham' => $ma_phong_kham,
                'ma_dv' => $ma_dv
            );

            // Thực hiện chèn dữ liệu vào bảng 
            $this->db->insert('book_lich', $data);

        }
        public function sua_book_lich()
        {
            // Dữ liệu thu được từ FORM nhập dữ liệu
            $ma_book_lich = $_POST['ma_book_lich'];
            $ho_ten = $_POST['ho_ten'];
            $sdt = $_POST['sdt'];
            $dia_chi = $_POST['dia_chi'];
            $email = $_POST['email'];
            $giong_thu_cung = $_POST['giong_thu_cung'];

            // Đẩy dữ liệu này vào CSDL
            $data = array(
                'ho_ten' => $ho_ten,
                'sdt' => $sdt,
                'dia_chi' => $dia_chi,
                'email' => $email,
                'giong_thu_cung' => $giong_thu_cung
            );

            // Thực hiện cập nhật dữ liệu vào bảng TIN TỨC
            $this->db->where('ma_book_lich', $ma_book_lich);
            $this->db->update('book_lich', $data);
        }

        public function xoa_book_lich($ma_book_lich)
        {
            // Thực hiện việc xóa dữ liệu
            $this->db->where('ma_book_lich', $ma_book_lich);
            $this->db->delete('book_lich');
        }

    }
;?>