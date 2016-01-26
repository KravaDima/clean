<?php
	class Answer_Model extends Model{
		function __construct(){
			parent::__construct();
		}

		public function title(){
			return "Ответы на вопросы";
		}
	}
?>