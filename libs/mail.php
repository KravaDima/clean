<?php
	class Mail{
		public static function send($email, $msgs){
			$header = "From: CleanDnipro <$email> \r\n".
				"Content-type: text/html; charset=UTF-8 \r\n";
			$title = "Вы получили новый заказ!";
			mail($email, $title, $msgs, $header);
		}
	}
?>