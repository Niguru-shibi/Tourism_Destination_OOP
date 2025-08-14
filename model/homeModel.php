<?php
	//import database
	require_once 'connect_db.php';
	
	//class
	class homeModel extends Connector{
		function __construct(){
			parent::__construct();
		}
		
		#--------------------------------------------------------------#
		#-- Carousel Featured destination							 --#
		#--------------------------------------------------------------#
		function homeAlbum(){
			//getl the album feature destination
			$sql = "SELECT * FROM `album_tb`";
			$query = $this->conn->prepare($sql); //prepare the query
			$query->execute(); //run the query
			
			return $query->fetchall(PDO::FETCH_ASSOC); //get all the data and return
			
		}
		#--------------------------------------------------------------#
		#-- Hero Featured destination								 --#
		#--------------------------------------------------------------#
		function homeFeature(){
			//get feature destination sql
			$sql = "SELECT * FROM feature_tb";
			$query = $this->conn->prepare($sql); //prepare the query
			$query->execute(); //run the query
			return $query->fetchall(PDO::FETCH_ASSOC); //get all the data and return
		}
		#--------------------------------------------------------------#
		#-- Services Featured destination							 --#
		#--------------------------------------------------------------#
		function services(){
			//get feature destination sql
			$sql = "SELECT * FROM services_tb";
			$query = $this->conn->prepare($sql); //prepare the query
			$query->execute(); //run the query
			return $query->fetchall(PDO::FETCH_ASSOC); //get all the data and return
		}
		#--------------------------------------------------------------#
		#-- Footer Featured destination							     --#
		#--------------------------------------------------------------#
		function footer(){
			//get feature destination sql
			$sql = "SELECT * FROM footer_tb";
			$query = $this->conn->prepare($sql); //prepare the query
			$query->execute(); //run the query
			return $query->fetchall(PDO::FETCH_ASSOC); //get all the data and return
		}
	}
	
	
	
?>