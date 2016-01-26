<?php
	class Contract extends Controller{
		function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->view->render("contract/index", $this->model->title());
		}
	}
?>