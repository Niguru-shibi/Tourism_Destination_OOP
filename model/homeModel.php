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
		#--------------------------------------------------------------#
		#-- Client Message destination							     --#
		#--------------------------------------------------------------#
		function clientmsg(){

			//retrieving snd optionally sanitize input
			$client_name = $_POST['client_name'] ?? '';
			$client_email = $_POST['client_email'] ?? '';
			$client_contact = $_POST['client_contact'] ?? '';
			$client_message = $_POST['client_message'] ?? '';

			//sql and placeholders
			$sql = "INSERT INTO client_tb (client_name, client_email, client_contact, client_message) 
					VALUES (:name, :email, :contact, :message)";

			//query
			$query = $this->conn->prepare($sql);

			//execute
			$success = $query->execute([
				':name'   => $client_name,
				':email'   => $client_email,
				':contact'   => $client_contact,
				':message'   => $client_message,
			]);

			//return
			return $success;

		}

	}
	
	
	
?>