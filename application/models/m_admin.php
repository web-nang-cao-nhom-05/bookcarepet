<?php 
    class m_admin extends CI_Model {
        public function dem_so_ban_ghi_thu_duoc($tai_khoan, $mat_khau)
        {
            // Viết câu lệnh truy vấn SQL check xem có người dùng có thông tin   như trên hay không?
            $query = $this->db->query("
                SELECT * 
                FROM admin
                WHERE tai_khoan='".$tai_khoan."' AND mat_khau='".md5($mat_khau)."'
            ");

            // Trả kết quả truy vấn dữ liệu
            return $query->num_rows();
        }

        public function dem_so_tai_khoan($tai_khoan, $email)
        {
            // Viết câu lệnh truy vấn SQL check xem có người dùng có thông tin Email & tai khoản như trên hay không?
            $query1 = $this->db->query("
                SELECT * 
                FROM admin
                WHERE tai_khoan='".$tai_khoan."' AND email='".$email."'
            ");

            // Trả kết quả truy vấn dữ liệu
            return $query1->num_rows();
        }

        


        public function them_moi_mat_khau()
        {
            // Dữ liệu thu được từ FORM nhập dữ liệu
        
           $tai_khoan = $_POST['tai_khoan'];
           $mat_khau = @md5($_POST['mat_khau']);
                   // Đẩy dữ liệu này vào CSDL
            $data = array(
                'tai_khoan' => $tai_khoan,
                'mat_khau' => $mat_khau
                
            );

            // Thực hiện chèn dữ liệu vào bảng 
            $this->db->insert('admin', $data);

        }


    }
;?>