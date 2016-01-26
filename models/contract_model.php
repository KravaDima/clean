<?php
	class Contract_Model extends Model{
		function __construct(){
			parent::__construct();
		}

		public function title(){
			return "Договор на уборку подъезда";
		}
	}
?>