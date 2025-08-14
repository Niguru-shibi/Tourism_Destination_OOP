<?php
	//import database
	require_once 'connect_db.php';
	
	//class
	class adminModel extends Connector{
		function __construct(){
			parent::__construct();
		}
		
		function getNotSeenMsg(){
			//getl the carousel featured destination
			$sql = "SELECT * FROM client_tb WHERE client_status = '0' ORDER BY client_id DESC";
			$query = $this->conn->prepare($sql); //prepare the query
			$query->execute(); //run the query
			return $query->fetchall(PDO::FETCH_ASSOC); //get all the data and return
			
		}
		
		function getSeenMsg(){
			//getl the carousel featured destination
			$sql = "SELECT * FROM client_tb WHERE client_status = '1' ORDER BY client_id DESC";
			$query = $this->conn->prepare($sql); //prepare the query
			$query->execute(); //run the query
			return $query->fetchall(PDO::FETCH_ASSOC); //get all the data and return
			
		}
    }
?>