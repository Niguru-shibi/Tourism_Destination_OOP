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
		function viewmsg($msg_id){
			//get hero featured destination sql
			$sql = "SELECT * FROM client_tb WHERE client_id = ?";
			
			$query = $this->conn->prepare($sql); //prepare the query
			$query->bindParam(1, $msg_id);
			$query->execute(); //run the query
			
			return $query->fetch(PDO::FETCH_ASSOC); //get all the data and return
		}
		
		function deletemsg($id){
			//get hero featured destination sql
			$sql = "DELETE FROM client_tb WHERE client_id = ?";
			
			$query = $this->conn->prepare($sql); //prepare the query
			$query->bindParam(1, $delete_id);
			$query->execute(); //run the query
			
			return $query->fetch(PDO::FETCH_ASSOC);//return
		}
		function viewcontact($msg_id){
			//get hero featured destination sql
			$sql = "SELECT * FROM client_tb WHERE client_id = ?";
			
			$query = $this->conn->prepare($sql); //prepare the query
			$query->bindParam(1, $msg_id);
			$query->execute(); //run the query
			
			return $query->fetch(PDO::FETCH_ASSOC); //get all the data and return
		}
		function deletecontact($id){
			$sql = "DELETE FROM client_tb WHERE client_id = ?";
			
			$query = $this->conn->prepare($sql);
			$query->bindParam(1, $id, PDO::PARAM_INT);
			$success = $query->execute();
			
			return $success;
		}



		function get_alb_query(){
			$sql = "SELECT * FROM album_tb";

			$query = $this->conn->prepare($sql);
			$query->execute();

			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		function get_ft_query(){
			$sql = "SELECT * FROM feature_tb";

			$query = $this->conn->prepare($sql);
			$query->execute();

			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		function get_serv_query(){
			$sql = "SELECT * FROM services_tb";

			$query = $this->conn->prepare($sql);
			$query->execute();

			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		function get_ftr_query(){
			$sql = "SELECT * FROM footer_tb";

			$query = $this->conn->prepare($sql);
			$query->execute();

			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		function albumBtn($post, $imgsql){
			$sql = "UPDATE  `album_tb`
                       SET  `alb_img`=?,
                            `alb_title`=?,
                            `alb_subtitle`=?,
                            `alb_description`=?,
                            `alb_view`=?,
                            `album_date`=?
                            ".$imgsql."
                    WHERE `alb_id`=?";

			$query = $this->conn->prepare($sql);
			$query->bindParam(1, $post['img']);
			$query->bindParam(2, $post['title']);
			$query->bindParam(3, $post['subtitle']);
			$query->bindParam(4, $post['description']);
			$query->bindParam(5, $post['view']);
			$query->bindParam(6, $date);
			$query->bindParam(7, $post['id']);
			$query->execute();

			return $this->conn->lastInsertId();
		}

		function featureBtn($post, $imgsql){
			$sql = "UPDATE  `feature_tb`
                       SET  `ft_img`=?,
                            `ft_title`=?,
                            `ft_subtitle`=?,
                            `ft_description`=?,
                            `ft_date`=?
                            " . $imgsql . "
                    WHERE `ft_id`=?";
			
			$query = $this->conn->prepare($sql);
			$query->bindParam(1, $post['img']);
			$query->bindParam(2, $post['title']);
			$query->bindParam(3, $post['subtitle']);
			$query->bindParam(4, $post['description']);
			$query->bindParam(5, $date);
			$query->bindParam(6, $post['id']);
			$query->execute();

			return $this->conn->lastInsertId();
		}
		function serveBtn($post){
			$sql = "UPDATE `services_tb`
                      SET   `serv_serve`=?,
                            `serv_price`=?,
                            `serv_detail`=?,
                            `serv_date`=?
                    WHERE `serv_id`=?
                    ";

			$query = $this->conn->prepare($sql);
			$query->bindParam(1, $post['serve']);
			$query->bindParam(2, $post['price']);
			$query->bindParam(3, $post['detail']);
			$query->bindParam(4, $date);
			$query->bindParam(5, $post['id']);
			$query->execute();

			return $this->conn->lastInsertId();
		}
		function ftrBtn($post, $set_img){
			$sql = "UPDATE footer_tb
				SET ftr_name = ?,
					ftr_position = ?,
					ftr_desc = ?
					".$set_img."
				WHERE ftr_id = ?
				";
			$query = $this->conn->prepare($sql);
			$query->bindParam(1, $post['name']);
			$query->bindParam(2, $post['position']);
			$query->bindParam(3, $post['desc']);
			$query->bindParam(4, $post['id']);
			$query->execute();

			return $this->conn->lastInsertId();
		}
    }
?>