<?php
	class m_tin_tuc extends CI_Model
	{
		
		
		public function lay_tin_tuc()
		{
			$query = $this->db->query("
				SELECT *
				FROM tin_tuc
				");
			return $query->result();
		}
		public function lay_tin_tuc_theo_ID($ma_tin_tuc)
        {
			// Viết câu lệnh truy vấn SQL lấy các tin tức sự kiện (có mã loai_tin_id)
			$query = $this->db->query("
				SELECT * 
				FROM tin_tuc
				WHERE ma_tin_tuc='".$ma_tin_tuc."'"
			);

			// Trả kết quả truy vấn dữ liệu
	        return  $query->row();
        }
        
		public function them_moi_tin_tuc()
        {
        	// Dữ liệu thu được từ FORM nhập dữ liệu
			$tieu_de = $_POST['txtTieuDe'];
			$nguoi_tao = $_POST['txtNguoiTao'];
			$mo_ta = $_POST['txtMoTa'];
			//$anh = $_POST['txtAnh'];
			$noi_dung = $_POST['txtNoiDung'];
			$noi_dung_1 = $_POST['txtNoiDung1'];
			$noi_dung_2 = $_POST['txtNoiDung2'];

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
				'tieu_de' => $tieu_de,
				'nguoi_tao' => $nguoi_tao,
				'mo_ta' => $mo_ta,
				'anh_minh_hoa' => $data["image"],
				'noi_dung' => $noi_dung,
				'noi_dung_1' => $noi_dung_1,
				'noi_dung_2' => $noi_dung_2
			);

			

			// Thực hiện chèn dữ liệu vào bảng TIN TỨC
			$this->db->insert('tin_tuc', $data);

        }

		
        public function sua_tin_tuc()
        {
        	// Dữ liệu thu được từ FORM nhập dữ liệu
			$ma_tin_tuc = $_POST['txtMaTinTuc'];
			$tieu_de = $_POST['txtTieuDe'];
			$nguoi_tao = $_POST['txtNguoiTao'];
			$mo_ta = $_POST['txtMoTa'];
			//$anh = $_POST['txtAnh'];
			$noi_dung = $_POST['txtNoiDung'];
			$noi_dung_1 = $_POST['txtNoiDung1'];
			$noi_dung_2 = $_POST['txtNoiDung2'];

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
				'tieu_de' => $tieu_de,
				'nguoi_tao' => $nguoi_tao,
				'mo_ta' => $mo_ta,
				'anh_minh_hoa' => $data["image"],
				'noi_dung' => $noi_dung,
				'noi_dung_1' => $noi_dung_1,
				'noi_dung_2' => $noi_dung_2
				);
			} else {
				
				$data = array(
				'tieu_de' => $tieu_de,
				'nguoi_tao' => $nguoi_tao,
				'mo_ta' => $mo_ta,
				'anh_minh_hoa' => $data["image"],
				'noi_dung' => $noi_dung,
				'noi_dung_1' => $noi_dung_1,
				'noi_dung_2' => $noi_dung_2
				);
			}
			
			

			// Thực hiện cập nhật dữ liệu vào bảng TIN TỨC
			$this->db->where('ma_tin_tuc', $ma_tin_tuc);
			$this->db->update('tin_tuc', $data);
        }


		public function xoa_tin_tuc($ma_tin_tuc)
        {
			// Thực hiện việc xóa dữ liệu
			$this->db->where('ma_tin_tuc', $ma_tin_tuc);
			$this->db->delete('tin_tuc');
        }
	}
;?>