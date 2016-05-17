<?php
	
	// Connect Database
	include 'connect.php';
	// Routes
	$tpl = 'includes/templates/'; // Template Directory
	$css = 'layout/css/'; // CSS Directory
	$js = 'layout/js/'; // js Directory
	$lang = 'includes/languages/'; // Language Directory

	// Include The Important File
	if(!isset($noNavbar)) {include $lang . 'taskLanguages.php';}
	include $tpl . "header.php";

	// Include Navbar On All Pages Expect The One With $noNavbar Variable
	if(!isset($noNavbar)) {include $tpl . "navbar.php";}
	if(!isset($noNavbar)) {include $tpl . "content.php";}
