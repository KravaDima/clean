<?php
	class Price_Model extends Model{
		function __construct(){
			parent::__construct();
		}

		public function saveorder($name, $tel, $address, $type){
			$sth = $this->db->prepare("INSERT INTO orders(name, tel, address, type) VALUES (:name, :tel, :address, :type)");
			if($sth->execute(array(":name"=>$name, ":tel"=>$tel, ":address"=>$address, ":type"=>$type))){
				$msgs = "$tel - $name - $address";
				Mail::send(EMAIL, $msgs);
				return true;
			} else {
				return false;
			}					
		}
	}
?>