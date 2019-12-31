<?php 
	include 'model/model.php';
	class Controller {

		function handleRequest(){
			$action = isset($_GET['action'])?$_GET['action']:'home';
			$model = new Model;
			switch ($action) {
				case 'home':
					// lay thong tin trang chu ra
					$homeData = $model->getHomepage();
					include 'view/homepage.php';
					break;
				case 'about':
					// lay thong tin trang about ra
					$aboutData = $model->getAbout();
					include 'view/about.php';
					break;
				default:
					# code...
					break;
			}
		}
	}
?>