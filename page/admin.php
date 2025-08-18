<?php
	//model 
	include '../model/homeModel.php';
	include '../model/adminModel.php';
	
	//global variable
	$page['page'] = 'inquiry';
    $page['page'] = 'admin_home';
    $page['page'] = 'admin_services';
    $page['page'] = 'admin_contact';
    $page['page'] = 'admin_footer';
	$page['subpage'] = isset($_GET['subpage'])? $_GET['subpage']:'dashboard' ;
	
	//check for an action
	if (isset($_GET['function'])){
		//instanciate
		new ActiveAdmin($page);
	}else{
		//instanciate
		new Admin($page);
	}
	
	#--------------------------------------------------------------#
	#--- CLASSES
	#--------------------------------------------------------------#
	//the default class
	class Admin{
		//encapsulation
		private $page = '';
		private $subpage = '';
		protected $adminModel = '';
		protected $homeModel = '';
		
		//constructor
		function __construct ($page){
			$this->page = $page['page']; //assigned the property value
			$this->subpage = $page['subpage']; //assigned the property value
			
			$this->adminModel = new adminModel(); //instance/object
			$this->homeModel = new homeModel(); //instance/object
			
			//run the method/behaviour
			$this->{$page['subpage']}();
		}
		
		function dashboard(){
		
			$notSeenMsg = $this->adminModel->getNotSeenMsg();
			$seenMsg = $this->adminModel->getSeenMsg();
			
			include '../adminview/dashboard.php'; //get the views
		}
        function inquiry(){
			
			//get all the message
			$notSeenMsg = $this->adminModel->getNotSeenMsg();
			$seenMsg = $this->adminModel->getSeenMsg();
			
			include '../adminview/inquiry.php'; //get the views
		}
        function admin_home(){
			
			//get all the message
			//$notSeenMsg = $this->adminModel->getNotSeenMsg();
			//$seenMsg = $this->adminModel->getSeenMsg();
            $album = $this->homeModel->homeAlbum();
            $feature = $this->homeModel->homeFeature();
			
			include '../adminview/admin_home.php'; //get the views
		}
        function admin_services(){
			
			//get all the message
			//$notSeenMsg = $this->adminModel->getNotSeenMsg();
			//$seenMsg = $this->adminModel->getSeenMsg();
            $services = $this->homeModel->services();
			
			include '../adminview/admin_services.php'; //get the views
		}
        function admin_contact(){
			
			//get all the message
			$notSeenMsg = $this->adminModel->getNotSeenMsg();
			$seenMsg = $this->adminModel->getSeenMsg();
			
			include '../adminview/admin_contact.php'; //get the views
		}
         function admin_footer(){
			
			//get all the message
			//$notSeenMsg = $this->adminModel->getNotSeenMsg();
			//$seenMsg = $this->adminModel->getSeenMsg();
            $footer = $this->homeModel->footer();
			
			include '../adminview/admin_footer.php'; //get the views
		}
    }
    //if there is an action
	class ActiveAdmin{
		//encapsulation
		private $page = '';
		private $subpage = '';
		protected $adminModel = '';
		protected $homeModel = '';

		function __construct ($page){
			$this->page = $page['page']; //assigned the property value
			$this->subpage = $page['subpage']; //assigned the property value
			
			$this->adminModel = new adminModel(); //instance/object
			$this->homeModel = new homeModel(); //instance/object
			
			//run the method/behaviour
			$this->{$_GET['function']}();
		}
		
		function viewmsg(){
			//get all the message
			$notSeenMsg = $this->adminModel->getNotSeenMsg();
			$seenMsg = $this->adminModel->getSeenMsg();
			
			//get the specified message
			$getMsg = $this->adminModel->viewmsg($_GET['msg_id']);
			
			include '../adminview/inquiry.php';
		}
		
		function deletemsg(){
			//get all the message
			$notSeenMsg = $this->adminModel->getNotSeenMsg();
			$seenMsg = $this->adminModel->getSeenMsg();
			
			//get all the message
			$deletemsg = $this->adminModel->deletemsg($_GET['delete_id']);
			
			include '../adminview/inquiry.php';
			echo '<script>alert("Message has been deleted!");</script>';
		}
		function viewcontact(){
			//get all the message
			$notSeenMsg = $this->adminModel->getNotSeenMsg();
			$seenMsg = $this->adminModel->getSeenMsg();
			
			//get the specified message
			$getMsg = $this->adminModel->viewmsg($_GET['msg_id']);
			
			include '../adminview/admin_contact.php';
		}
		
		function deletecontact(){
			//get all the message
			$notSeenMsg = $this->adminModel->getNotSeenMsg();
			$seenMsg = $this->adminModel->getSeenMsg();
			
			//get all the message
			$deletemsg = $this->adminModel->deletemsg($_GET['delete_id']);
			
			include '../adminview/admin_contact.php';
			echo '<script>alert("Message has been deleted!");</script>';
		}

		###########################################################
		#     		   send client message to database            #
		###########################################################

		/*public function clientmsg(){
			if ($_SERVER['REQUEST_METHOD'] === 'POST'){
				$clientmsg = $this->homeModel->clientmsg();
				$message_sent = $clientmsg ? "Message sent succesfully." : "Failed to send message.";
			}

			$footer = $this->homeModel->footer();

			include '../view/contact_page.php';
			//header('Location: ../contact_page.php?msg=Message sent successfully');
			//exit;
		} */
	}
    