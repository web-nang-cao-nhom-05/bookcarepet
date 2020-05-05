<?php 
	class m_san_pham extends CI_Model {
		// Mục đích lấy tin tức theo loại tin
		public function lay_san_pham_theo_ma_phong_kham($ma_phong_kham)
        {
			// Viết câu lệnh truy vấn SQL lấy các tin tức sự kiện (có mã loai_tin_id)
			$query = $this->db->query("
				SELECT * 
				FROM san_pham_pet
				WHERE ma_phong_kham='".$ma_phong_kham."'"
				);

			// Trả kết quả truy vấn dữ liệu
            return $query->result();
        }

        // Mục đích Lấy tin tức theo ID
		public function lay_san_pham_theo_ID($ma_sp)
        {
			// Viết câu lệnh truy vấn SQL lấy các tin tức sự kiện (có mã loai_tin_id)
			$query = $this->db->query("
				SELECT * 
				FROM san_pham_pet
				WHERE ma_sp='".$ma_sp."'"
			);

			// Trả kết quả truy vấn dữ liệu
	        return  $query->row();
        }

		public function them_moi_san_pham()
        {
			// Dữ liệu thu được từ FORM nhập dữ liệu
			$ma_phong_kham = $_POST['txtMaphongkham'];
			$ten_sp = $_POST['txtTensp'];
			$nguoi_tao = $_POST['txtNguoiTao'];

			// Xử lý đoạn UPLOAD ảnh minh họa
			if (!empty($_FILES['txtAnhMinhHoa']['name'])) {
		        $config['upload_path'] = 'assets\images';
		        $config['allowed_types'] = 'jpg|jpeg|png|gif';
		        $config['file_name'] = $_FILES['txtAnhMinhHoa']['name'];

		        $this->load->library('upload', $config);
		        $this->upload->initialize($config);

		        if ($this->upload->do_upload('txtAnhMinhHoa')) {
		          $uploadData = $this->upload->data();
		          $data["image"] = $uploadData['file_name'];
		        } else{
		          $data["image"] = '';
		        }
		      } else {
		        $data["image"] = '';
		      }

			// Đẩy dữ liệu này vào CSDL
			$data = array(
				'ma_phong_kham' => $ma_phong_kham,
				'ten_sp' => $ten_sp,
				'hinh_anh' => $data["image"],
				'nguoi_tao' => $nguoi_tao
				
			);

			// Thực hiện chèn dữ liệu vào bảng TIN TỨC
			$this->db->insert('san_pham', $data);
        }

		public function sua_san_pham()
        {
        	// Dữ liệu thu được từ FORM nhập dữ liệu
			$ma_sp = $_POST['txtID'];
			
			$ten_sp = $_POST['txtTensp'];
			$ma_phong_kham = $_POST['txtMaphongkham'];
			
			$nguoi_tao = $_POST['txtNguoiTao'];

			// Xử lý đoạn UPLOAD ảnh minh họa
			if (!empty($_FILES['txtAnhMinhHoa']['name'])) {
		        $config['upload_path'] = 'assets\images';
		        $config['allowed_types'] = 'jpg|jpeg|png|gif';
		        $config['file_name'] = $_FILES['txtAnhMinhHoa']['name'];

		        $this->load->library('upload', $config);
		        $this->upload->initialize($config);

		        if ($this->upload->do_upload('txtAnhMinhHoa')) {
		          $uploadData = $this->upload->data();
		          $data["image"] = $uploadData['file_name'];
		        } else{
		          $data["image"] = '';
		        }
		      } else {
		        $data["image"] = '';
		      }

			// Đẩy dữ liệu này vào CSDL

		    if($data["image"] == '')
		    {
				$data = array(
					'ma_phong_kham' => $ma_phong_kham,
					'ten_sp' => $ten_sp,
					'nguoi_tao' => $nguoi_tao
					
				);
			} else {
				$data = array(
					'ma_phong_kham' => $ma_phong_kham,
					'ten_sp' => $ten_sp,
					'hinh_anh' => $data["image"],
					'nguoi_tao' => $nguoi_tao
				
				);
			}

			// Thực hiện cập nhật dữ liệu vào bảng TIN TỨC
			$this->db->where('ma_sp', $ma_sp);
			$this->db->update('san_pham', $data);
        }

		public function xoa_san_pham($ma_sp)
        {
			// Thực hiện việc xóa dữ liệu
			$this->db->where('ma_sp', $ma_sp);
			$this->db->delete('san_pham');
        }

	}
;?>