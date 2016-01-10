<?php
	class Price extends Controller{
		function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->view->render("price/index");
		}

		public function order(){
			if(!empty($_POST[name]) && !empty($_POST[tel]) && !empty($_POST[address]) && !empty($_POST[type])){
				$name = $_POST[name];
				$tel = $_POST[tel];
				$address = $_POST[address];
				$type = $_POST[type];
				// $date = $_POST[date];
				// $dop[] = $_POST[dop1];
				// $dop[] = $_POST[dop2];
				// $dop[] = $_POST[dop3];
				// $dop[] = $_POST[dop4];
				// $dop[] = $_POST[dop5];
				// $dop[] = $_POST[dop6];
				if($this->model->saveorder($name, $tel, $address, $type) == true){
					$this->view->render("price/order/index");
				} else{
					$this->view->render("price/order/error");
				} 
			}	else{
				$this->view->render("price/order/error");	
			}
		}
	}
?>