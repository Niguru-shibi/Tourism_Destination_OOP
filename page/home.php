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
		protected $homeModel = '';
		
		//constructor
		function __construct ($page){
			$this->page = $page['page']; //assigned the property value
			$this->subpage = $page['subpage']; //assigned the property value
			
			$this->homeModel = new homeModel(); //instance/object
			
			//run the method/behaviour
			$this->{$page['subpage']}();
		}
		
		function landing_page(){
			include '../view/landing_page.php'; //get the views
		}
        function home(){
			//get all the carousel in the database
			$album = $this->homeModel->homeAlbum();
			$feature = $this->homeModel->homeFeature();
			
			include '../view/home_page.php'; //get the views
		}
        function services(){
			//get all the carousel in the database
			$services = $this->homeModel->services();
			
			include '../view/services_page.php'; //get the views
		}
        function contact(){
			include '../view/contact_page.php'; //get the views
		}
        function footer(){
            $footer = $this->homeModel->footer();
			include '../nav/footer.php.'; //get the views
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
    }    
        
?>