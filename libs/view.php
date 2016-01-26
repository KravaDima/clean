<?php
	class View{
		public function __construct(){
		}

		public function render($name, $title=false, $noInclude=false){
			if($noInclude == true){
				require "views/".$name.".php";
			} else {
				require "views/header.php";
				require "views/".$name.".php";
				require "views/footer.php";
			}
		}
	}
?>