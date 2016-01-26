<?php
	class Login extends Controller{
		function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->view->render("login/index", $this->model->title());
		}

		public function run(){
			$this->model->run();
		}
	}
?>