
<?php 
	class Thanhvien_model extends MY_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->table = 'admin';
		}
	}
?>