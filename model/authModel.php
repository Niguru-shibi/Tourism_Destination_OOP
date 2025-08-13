<?php
	//import database
	require_once 'connect_db.php';
	
	//class
	class authModel extends Connector{
		function __construct(){
			parent::__construct();
		}
		
		#--------------------------------------------------------------#
		#--                                    						 --#
		#--------------------------------------------------------------#
		function getUsername($username){
			//getl the carousel featured destination
			$sql = "SELECT admin_username, admin_password FROM `admin_tb` WHERE admin_password = ?";
			
			$query = $this->conn->prepare($sql); //prepare the query
			//bind parameter
			$query->bindParam(1, $username);
			$query->execute(); //run the query
			
			return $query->fetchall(PDO::FETCH_ASSOC); //get all the data and return
			
		}
	}
	
	
	
?>