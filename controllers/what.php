<?php
	class What extends Controller{
		function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->view->render("what/index", $this->model->title());
		}
	}
?>