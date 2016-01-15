<?php
	class Admin extends Controller{
		function __construct(){
			parent::__construct();
			Session::init();
			$logged = Session::get("admin");
			if($logged == false){
				Session::destroy();
				header("Location: ../login");
				exit();
			}
		}

		public function index(){
			$this->view->orderlist = $this->model->orderlist();
			$this->view->render("admin/index");
		}

		public function logout(){
			Session::destroy();
			header("Location: ../login");
			exit();
		}
	}
?>