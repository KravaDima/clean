<?php
	class Login_Model extends Model{
		function __construct(){
			parent::__construct();
		}

		public function run(){
			$sth = $this->db->prepare("SELECT id, role FROM users WHERE login = :login AND pass = MD5(:pass)");
			$sth->execute(array(
								":login"=>"$_POST[login]",
								":pass"=>"$_POST[pass]"));
			$data = $sth->fetch();
			$count = $sth->rowCount();
			if($count > 0){
				Session::init();
				Session::set($data['role'], true);
				header("Location: ../admin");
			} else {
				header("Location: ../login");
			}
		}
	}
?>