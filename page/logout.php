<?php
//start session
session_start();
//destroy session
session_destroy();
//redirect to the homepage
header('Location: ../page/home.php?subpage=landing_page');
?>