<?php 
	/**
	 * 
	 */
	include 'config/database.php';
	class Model extends ConnectDB
	{
		
		function getNewsFromDatabase() {
			$sqlSelectNews = "SELECt * FROM news";

			$news = mysqli_query($this->connect(), $sqlSelectNews);
			return $news;
		}
	}
?>