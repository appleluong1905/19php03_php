<?php 
	include 'config/database.php';
	class Model extends ConnectDB {

		function getHomepage() {
			$homepageData = "Thong tin trang chu tai day";
			return $homepageData;
		}

		function getAbout() {
			$aboutData = "Thong tin trang about";
			return $aboutData;
		}

		function getNews() {
			$sql = "SELECT * FROM news";
			return mysqli_query($this->connect(), $sql);
		}

		function deleteNews($id) {
			$sql = "DELETE FROM news WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}
		function addNews($title, $description) {
			$sql = "INSERT INTO news(title, description) VALUES ('$title', '$description')";
			return mysqli_query($this->connect(), $sql);
		}

		function addUsers($username, $password) {
			$sql = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
			return mysqli_query($this->connect(), $sql);
		}
		function login($username, $password) {
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			return mysqli_query($this->connect(), $sql);
		}
	}
?>