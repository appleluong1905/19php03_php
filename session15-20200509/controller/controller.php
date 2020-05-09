<?php 
	/**
	 * 
	 */
	include 'model/model.php';
	class Controller
	{
		// function xulyyeucau();
		function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					include 'views/home.php';
					break;
				case 'news':
					// gọi model xử lý lấy tin tức từ database ra?
					$model = new Model();
					$myNews = $model->getNewsFromDatabase();
					//var_dump($myNews); // giống console.log bên js

					include 'views/news.php';
					break;
				case 'products':
					include 'views/products.php';
					break;
				case 'login':
					include 'views/login.php';
					break;
				default:
					# code...
					break;
			}
		}
	}
?>