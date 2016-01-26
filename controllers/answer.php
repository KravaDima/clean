<?php
	class Answer extends Controller{
		function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->view->render("answer/index", $this->model->title());
		}
	}
?>