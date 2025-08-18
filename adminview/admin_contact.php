<?php
    /*require("connect_db.php");

    $getDataquery = mysqli_query($conn, "SELECT * FROM client_tb");

  
   
    if (isset($_GET['msg_client_id'])) {
        $msg_id = intval($_GET['msg_client_id']);
    
        // Set status to 1 (mark as read)
        $update_status = "UPDATE client_tb SET client_status = 1 WHERE client_id = $msg_id";
        mysqli_query($conn, $update_status);
    
        // Then fetch the message
        $msg_query = "SELECT * FROM client_tb WHERE client_id = $msg_id";
        $msg_result = mysqli_query($conn, $msg_query);
        $msg = mysqli_fetch_assoc($msg_result);
    }



   
    if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['client_id'])) {
        $client_id = intval($_GET['client_id']); // Always sanitize input
    
        // Delete query
        $deletesql = "DELETE FROM client_tb WHERE client_id = '$client_id'";
        $deletequery = mysqli_query($conn, $deletesql);
    
        if ($deletequery) {
            $msg = "<label style='color:green;'>Record successfully deleted.</label>";
        } else {
            $msg = "<label style='color:red;'>Failed to delete record.</label>";
        }
    
        // Redirect with message
        header('Location: inquiry.php?msg=' . urlencode($msg));
        exit(); 
    }*/
  
    
?>

<!DOCTYPE html>
<html lang="en"><head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Hugo 0.101.0">
		<title>Phillipine Guide Tourist Services | Admin</title>
		<link rel="icon" type="image/x-icon" href="../images/logo.jpg">

		<link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">

		<!-- Bootstrap core CSS -->
		<link href="https://getbootstrap.com/docs/4.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

		<!-- Favicons -->
		<link rel="manifest" href="https://getbootstrap.com/docs/4.6/assets/img/favicons/manifest.json">
		<link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
		<meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
		<meta name="theme-color" content="#563d7c">

		<!-- Favicons for bootstrap 5 -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

		<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap4.css" rel="stylesheet">-->
		
		<style>
			.bd-placeholder-img {
				font-size: 1.125rem;
				text-anchor: middle;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}
	
			@media (min-width: 768px) {
				.bd-placeholder-img-lg {
				font-size: 3.5rem;
				}
			}
			.logo{
				height: 70px; 
				width: auto;
				border-radius:50%;
			}
		</style>

		
		<!-- Custom styles for this template -->
		<link href="../assets/dist/css/dashboard.css" rel="stylesheet">
		
		<!-- dataTable JS -->
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap4.js"></script>
	</head>
	<body>
    
	<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
		<a class="navbar-brand" href="../view/landing_page.php">
        <img class="logo" src="../images/logo.jpg" alt="logo">
        </a>
		<a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Phillipine Guide Tourist Services</a>
		<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<ul class="navbar-nav px-3">
			<li class="nav-item text-nowrap">
			<a class="nav-link" href="../view/landing_page.php">Sign out</a>
			</li>
		</ul>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
				<div class="sidebar-sticky pt-3">
					<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
						<span>MAIN</span>
					</h6>
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link active" href="?subpage=dashboard">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
								Dashboard <span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="?subpage=inquiry">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
								Inquiry
							</a>
						</li>
					</ul>
			
					<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
						<span>PAGES</span>
					</h6>
					
					<ul class="nav flex-column mb-2">
						<li class="nav-item">
							<a class="nav-link  "href="?subpage=admin_home">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
								Home
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?subpage=admin_services">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
								Services
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?subpage=admin_contact">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
								Contact
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?subpage=admin_footer">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
								Footer
							</a>
						</li>
					</ul>
				</div>
			</nav>
		
			<main role="main" class="col-md-9 ml-sm-10 col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Manage Contact Page</h1>
                        <?php
                            if (isset($_GET['msg'])) {
                                echo ($_GET['msg']);
                            }
                        ?>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group mr-2">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                This week
                            </button>
                        </div>
                    </div>

                    <!-- ✅ Row to hold both the table (left) and the message (right) -->
                    <div class="row">
                        <!-- Left side: Table -->
                        <div class="col-md-7">
                            <h2>Contact Page</h2>
                            <div class="bd-example-snippet bd-code-snippet" style="max-width: 100%;">
                                <div class="bd-example m-0 border-0">
                                    <table class="table table-sm table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    <tbody>
										<?php $n = 0;
											foreach ($notSeenMsg as $mssg): $n++ ?>
												<tr class="<?= (isset($_GET['msg_id']) && $_GET['msg_id'] == $mssg['inq_id']) ? 'table-success' : '' ?>"
													style="font-weight:<?= $mssg['client_status'] == 0 ? 'bold' : '' ?>;">
													<td align="center"><?= $n ?></td>
													<td><?= $mssg['client_name'] != null ? $mssg['client_name'] : 'Anonymous' ?></td>
													<td><?php
														$dateTime = $mssg['client_time'];
														$newDateTime = explode(' ', $dateTime);
														$date = $newDateTime[0];
														$time = $newDateTime[1];
														$newDate = str_replace('-', '/', $date);
														echo date('F d, Y', strtotime($newDate)) . " " . $time;
													?></td>
													<td align="center">
														<!-- VIEW BUTTON -->
														<a class="btn btn-info btn-sm" 
														href="../page/admin.php?function=viewcontact&msg_id=<?= $mssg['client_id'] ?>" 
														title="VIEW">
															<i class="bi bi-eye"></i>
														</a>

														<!-- DELETE BUTTON (always shown now) -->
														<a class="btn btn-warning btn-sm" 
														href="../page/admin.php?function=deletecontact&delete_id=<?= $mssg['client_id'] ?>" 
														title="DELETE"
														onclick="return confirm('Are you sure you want to delete this message?');">
															<i class="bi bi-trash"></i>
														</a>
													</td>
												</tr>
										<?php endforeach ?>
											<?php foreach ($seenMsg as $mssg): $n++ ?>
												<tr class="<?= (isset($_GET['msg_id']) && $_GET['msg_id'] == $mssg['client_id']) ? 'table-success' : '' ?>">
													<td align="center"><?= $n ?></td>
													<td><?= $mssg['client_name'] != null ? $mssg['client_name'] : 'Anonymous' ?></td>
													<td><?php
														//convert date from database to date and time
														//get the raw date value (yyyy-mm-dd hh:mm:ss)
														$dateTime = $mssg['client_time'];
														//use explode to get the time and date separated with space ( )
														$newDateTime = explode(' ', $dateTime);
														//the result will be an array, index 0 (yyyy-mm-dd)
														$date = $newDateTime[0];
														//the result will be an array (hh:mm:ss)
														$time = $newDateTime[1];
														$newDate = str_replace('-', '/', $date);
														echo date('F d, Y', strtotime($newDate)) . " " . $time;
														?></td>
													<td align="center">
														<!-- VIEW BUTTON -->
														<a class="btn btn-info btn-sm" 
														href="../page/admin.php?function=viewcontact&msg_id=<?= $mssg['client_id'] ?>" 
														title="VIEW">
															<i class="bi bi-eye"></i>
														</a>

														<!-- DELETE BUTTON (only shown if status is 1) -->
														<?php if ($mssg['client_status'] == 1): ?>
															<a class="btn btn-warning btn-sm" 
															href="../page/admin.php?function=deletecontact&delete_id=<?= $mssg['client_id'] ?>" 
															title="DELETE"
															onclick="return confirm('Are you sure you want to delete this message?');">
																<i class="bi bi-trash"></i>
															</a>
														<?php endif ?>
													</td>
												</tr>
											<?php endforeach ?>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Right side: Inquiry message details -->
                        <div class="col-md-5">
                            <div class="table-responsive">
                                <?php
                                if (isset($_GET['msg_client_id'])) {
                                    $msg_id = intval($_GET['msg_client_id']);
                                    $msg_query = "SELECT * FROM client_tb WHERE client_id = $msg_id";
                                    $msg_result = mysqli_query($conn, $msg_query);

                                    if (mysqli_num_rows($msg_result) > 0) {
                                        $msg = mysqli_fetch_assoc($msg_result);
                                        ?>
                                        <p><strong>From:</strong> <strong><?= htmlspecialchars($msg['client_name']) ?></strong></p>
                                        <hr>
                                        <p><?= nl2br(htmlspecialchars($msg['client_message'])) ?></p>
                                        <hr>
                                        <p>
                                            <strong>Email:</strong> <label><?= htmlspecialchars($msg['client_email']) ?></label><br>
                                            <strong>Contact Number:</strong> <label><?= htmlspecialchars($msg['client_contact']) ?></label><br>
                                            <strong>Date:</strong> <label><?= date("M d, Y  h:i:s A", strtotime($msg['client_time'])) ?></label>
                                        </p>
                                        <hr>
                                        <h6>Reply Client</h6>
                                        <p class="contact-client">
                                            <textarea type="text" class="form-control" placeholder="Write your message here..." id="reply-message"></textarea> <br>
                                            <button type="submit" class="btn-sm btn-primary style-bold">Send Message</button>
                                        </p>
                                        <?php
                                    } else {
                                        echo '<div class="alert alert-danger">Inquiry not found.</div>';
                                    }
                                } else {
                                    echo '<div class="alert alert-info" style="width:100%;">Please select an inquiry to view details.</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </main>


		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
		<script src="https://getbootstrap.com/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

      
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
		<script src="../assets/dist/js/dashboard.js"></script>
		
		<script>
			new DataTable('#table1');
			
			function underConstruction(){
				alert('Feature is underconstruction.');
			}
		</script>
		
		
	

</body>
</html>

