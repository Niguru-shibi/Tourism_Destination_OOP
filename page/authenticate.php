<?php
	//model 
	include '../model/authModel.php';
	
	//global variable
	$page['page'] = 'Authenticate';
	$page['subpage'] = isset($_GET['subpage'])? $_GET['subpage']:'login' ;
	
	//check for an action
	if (isset($_GET['function'])){
		//instanciate
		new ActiveAuthenticate($page);
	}else{
		//instanciate
		new Authenticate($page);
	}
	
	#--------------------------------------------------------------#
	#--- CLASSES
	#--------------------------------------------------------------#
	//the default class
	class Authenticate{
		//encapsulation
		private $page = '';
		private $subpage = '';
		
		//constructor
		function __construct ($page){
			$this->page = $page['page']; //assigned the property value
			$this->subpage = $page['subpage']; //assigned the property value
			
			//run the method/behaviour
			$this->{$page['subpage']}();
		}
		
		function login(){
			include '../view/login_page.php'; //get the views
		}
	}
	
	
	//if there is an action
	class ActiveAuthenticate{
		//encapsulation
		private $page = '';
		private $subpage = '';
		protected $authModel = '';
		
		//constructor
		function __construct ($page){
			$this->page = $page['page']; //assigned the property value
			$this->subpage = $page['subpage']; //assigned the property value
			$this->authModel = new authModel();
			
			//run the method/behaviour
			$this->{$_GET['function']}();
		}
		
		function login(){
			
			//instantciate object
			$username = $this->authModel->getUsername($_POST['username']);
			//print_r($username);
			$pass = 0;
			foreach ($username as $uname){
				if (password_verify($_POST['password'], $uname['admin_password'])){
					header('location: ../page/admin.php');
					$pass = 1;
				}
			}
			
			//check for if pass value changed to 1, meaning username or password been found
			if ($pass == 0){
				echo "<script>alert('Invalid Username of Password!');</script>";
				/*echo "<script>window.history.back(-1);</script>";*/
			}
			
			include '../view/login_page.php'; //get the views
		}
	}
?>