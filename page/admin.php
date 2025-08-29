<?php
	//Start the session
	session_start();
	
	if (!isset($_SESSION['admin_username'])){
		header("location: ../page/home.php?subpage=landing_page");
	}

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
			$deletemsg = $this->adminModel->deletemsg($_GET['delete_id']);
			
			include '../adminview/admin_contact.php';
			echo '<script>alert("Message has been deleted!");</script>';
		}

		function albumBtn(){
				$title = $_POST['title'];
				$subtitle = $_POST['subtitle'];
				$description = $_POST['description'];
				$img = $_POST['img'];
				$view = $_POST['view'];
				$id = $_POST['id'];

				$imgsql = "";
				$imgLink = "0";

				if (!empty($img)) {
					$imgLink = 1;
					$imgsql = ",alb_img = '$img'";
				}

				$albumBtn = $this->adminModel->albumBtn($_POST, $imgsql);

				header('location: ../page/admin.php?subpage=admin_home');
		}

		function featureBtn(){
				$img = $_POST['img'];
				$title = $_POST['title'];
				$subtitle = $_POST['subtitle'];
				$description = $_POST['description'];
				$id = $_POST['id'];

				$imgsql = "";
				$imgLink = "0";

				if (!empty($img)) {
					$imgLink = 1;
					$imgsql = ",ft_img = '$img'";
				}

				$featureBtn = $this->adminModel->featureBtn($_POST, $imgsql);

				header('location: ../page/admin.php?subpage=admin_home');
		}
		function serveBtn(){
				$serve = $_POST['serve'];
				$price = $_POST['price'];
				$detail = $_POST['detail'];
				$id = $_POST['id'];

				$serveBtn = $this->adminModel->serveBtn($_POST);

				header('location: ../page/admin.php?subpage=admin_services');
		}
		function ftrBtn(){
				$id = $_POST['id'];
				$name = $_POST['name'];
				$position = $_POST['position'];
				$desc = $_POST['desc'];
				$changeImageLink = $_POST['changeImageLink'];

				$imgLinkLoc = 0;
				$imgLinkOnl = 0;
				$imgLink = 0;
				$set_img = "";

				$changeImage = $_FILES['changeImage']['name'];

				if (!empty($changeImage)){
					$imgLinkLoc = 1;
					$set_img = ", ftr_img ='".$changeImage."', ftr_imgLink = '0'";
				}

				if (!empty($changeImageLink)){
					$term = substr($changeImageLink, 0, 8);

						if ($term == "https://"){
							$imgLinkOnl = 1;
							$set_img = ", ftr_img = '".$changeImageLink."', ftr_imgLink = '".$imgLinkOnl."'";
						}else{
							echo "<script>alert('Invalid online image link!\\r\\nOnline image link should start with https:// only.');</script>";
							echo "<script>window.history.back(-1);</script>";
							die();
						}
				}
				if ($imgLinkLoc == 1 && $imgLinkOnl == 0){
					$target_dir = "../images/";
					$filename = $_FILES['changeImage']['name'];
					$target_file = $target_dir.basename($filename);

					$allowed_ext = ['jpeg', 'jpg', 'png', 'webp', 'avif'];
					$ext = pathinfo($filename, PATHINFO_EXTENSION);
					if (in_array($ext, $allowed_ext)){
						if(move_uploaded_file($_FILES['changeImage']['tmp_name'], $target_file)){
							echo "uploading image successfully";
						}else{
							echo "error uploading image";
						}
					}else{
						echo "<script>alert('Invalid file updloaded.\\r\\nFile is not an image');</script>";
						echo "<script>window.history.back(-1);</script>";
						die();
					}
				}
				$ftrBtn = $this->adminModel->ftrBtn($_POST, $set_img);

				header('location: ../page/admin.php?subpage=admin_footer');

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
    