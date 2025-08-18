<?php
	//model 
	include '../model/homeModel.php';
	
	//global variable
	$page['page'] = 'home';
    $page['page'] = 'services';
    $page['page'] = 'contact';
    $page['page'] = 'footer';
    $page['page'] = 'login';
	$page['subpage'] = isset($_GET['subpage'])? $_GET['subpage']:'landing_page' ;
	
	//check for an action
	if (isset($_GET['function'])){
		//instanciate
		new ActiveHome($page);
	}else{
		//instanciate
		new Home($page);
	}
	
	#--------------------------------------------------------------#
	#--- CLASSES
	#--------------------------------------------------------------#
	//the default class
	class Home{
		//encapsulation
		private $page = '';
		private $subpage = '';
		protected $model = '';
		
		//constructor
		function __construct ($page){
			$this->page = $page['page']; //assigned the property value
			$this->subpage = $page['subpage']; //assigned the property value
			
			$this->model = new homeModel(); //instance/object
			
			//run the method/behaviour
			$this->{$page['subpage']}();
		}
		
		function landing_page(){
			include '../view/landing_page.php'; //get the views
		}
        function home(){
			//get all the carousel in the database
			$album = $this->model->homeAlbum();
			$feature = $this->model->homeFeature();
			$footer = $this->model->footer();
			//print_r($footer);
			
			include '../view/home_page.php'; //get the views
		}
        function services(){
			//get all the carousel in the database
			$services = $this->model->services();
			$footer = $this->model->footer();
			
			include '../view/services_page.php'; //get the views
		}
        function contact(){
			$footer = $this->model->footer();

			include '../view/contact_page.php'; //get the views
			
		}
        function login(){
			include '../view/login_page.php'; //get the views
		}

		
	}
	//if there is an action
	class ActiveHome{
		//encapsulation
		private $page = '';
		private $subpage = '';
		
        function __construct ($page){
			$this->page = $page['page']; //assigned the property value
			$this->subpage = $page['subpage']; //assigned the property value
        }
		public function clientmsg(){
			if ($_SERVER['REQUEST_METHOD'] === 'POST'){
				$clientmsg = $this->homeModel->clientmsg();
				$message_sent = $clientmsg ? "Message sent succesfully." : "Failed to send message.";
			}

			$footer = $this->homeModel->footer();

			include '../view/contact_page.php';
			header('Location: ../contact_page.php?msg=Message sent successfully');
			exit;
		}
    }    
        
?>