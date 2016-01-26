<?php
	class Admin_Model extends Model{
		function __construct(){
			parent::__construct();
		}

		public function orderlist(){
			$sth = $this->db->prepare("SELECT id, name, tel, address, type FROM orders");
			$sth->execute();
			$list = $sth->fetchAll();
			return $list;
		}

		public function title(){
			return "Админка";
		}
	}
?>