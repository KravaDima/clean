<?php
	class Bootstrap{
		public function __construct(){				// метод, который вызовется автоматом при создании класса
			if(isset($_GET[url])){
				$url = $_GET[url];
			} else {
				$url = NULL;
			}
			$url = rtrim($url, "/");				// убираем слеш в конце строки
			$url = explode("/", $url);				// разбиваем строку в массив, что потом делать запросы
			if(empty($url[0])){
				require "controllers/index.php";	// если  $url[0] не передается, то мы подклюаем индекс
				$controller = new Index();
				$controller->index();
				return false;
			}

			$file = "controllers/".$url[0].".php";	
			if(file_exists($file)){					// проверяем существование файла
				require $file;						// подключаем файл, если он сущесвует
			} else {
				require "controllers/error.php";	// если файла "controllers/".$url[0].".php" нету, то выдаем ошибку
				$controller = new Error();
				return false;
			}

			$controller = new $url[0];
			$controller->LoadModel($url[0]);	// загружаем модель и передаем в нее параметр

			if(isset($url[2])){					// проверяем наличие параметра метода
				if(method_exists($controller, $url[1])){	// проверяем наличие метода, и если он есть то передаем в него параметр, если нет, то выдаем ошибку
					$controller->{$url[1]}($url[2]);
				} else{
					echo "Ошибка при вызове метода";
				}
			} else {										// если второго параметра нет, то запускаем просто метод на выполнение
				if(method_exists($controller, $url[1])){  	
					$controller->{$url[1]}();
				} else {
					$controller->index();					// если и метода нет, то запускаем индексовый метод
				}
				
			}
		}
	}
?>