<?php
	/**
	 * Lớp xử lý dữ liệu
	 */
	class database
	{
		protected $db_host = 'localhost';
		protected $db_user = 'root';
		protected $db_pass = '';
		protected $db_name = 'user_manager';

		protected $conn = NULL;
		protected $result = NULL;
		
		function connect()
		{
			$this->conn = @mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
			if ($this->conn) {
				$setLang = mysqli_query($this->conn, "SET NAMES 'utf8'");
			} else {
				die('Kết nối thaatts bại!'.mysqli_connect_error());
			}
		}

		public function query($sql)
		{
			$this->free_query();
			$this->result = mysqli_query($this->conn, $sql);
		}

		// Ham giai phong bo nho sau khi fetch du lieu xong
		public function free_query()
		{
			if ($this->result) {
				mysqli_free_result($this->result);
			}
		}

		// phuong thuc lay so ban ghi tra ve sau khi truy van
		public function num_row()
		{
			if ($this->result) {
				$rows = mysqli_num_rows($this->result);
				return $rows;
			}
		}

		// phuong thuc fetch du lieu
		public function fetch()
		{
			if ($this->result) {
				$row = mysqli_fetch_array($this->result);
				return $row;
			}
		}
	}
?>