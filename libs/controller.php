<?php
	class Controller{
		function __construct(){
			$this->view = new View();
		}

		public function LoadModel($name){
			$path = "models/".$name."_model.php";
			if(file_exists($path)){
				require "models/".$name."_model.php";
				$modelName = $name."_Model";
				$this->model = new $modelName;
			}
		}

		public function index(){
			echo "It's Controller - method INDEX!";
		}
	}
?>