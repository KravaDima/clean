<?php
	class Model{
		public function __construct(){
			$this->db = new Database();	// создаем объект класса Database, который в свою очередь наследует PDO
		}
	}
?>