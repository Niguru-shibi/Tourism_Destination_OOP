<?php
	//model 
	include '../model/homeModel.php';
	
	//global variable
	$page['page'] = 'Home';
	$page['subpage'] = isset($_GET['subpage'])? $_GET['subpage']:'home' ;
	
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
		
		function home(){
			//get all the feature in the database
			$album = $this->homeModel->homeAlbum();
			$feature = $this->homeModel->homeFeature();
			
			include '../view/home_page.php'; //get the views
		}
	}
	
	
	//if there is an action
	class ActiveHome{
		//encapsulation
		private $page = '';
		private $subpage = '';
		
	}
?>