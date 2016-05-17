<?php

function lang( $phrase ) {

		static $lang = array(

				// Dashboard Nav Bar phrase
				'HOME_ADMIN' 		    => 'Home',
				'CATEGORIES' 		    => 'Categories',
				'DROPDOWN' 			    => 'Dropdown',
				'EDIT' 			  	    => 'Edit',
				'SETTINGS' 			    => 'Settings',
				'LOGOUT' 		  	    => 'Logout',

				// Dashboard Content phrase
				'DIRECTION' 		    => 'ltr',
				'DOCUMENTATION' 	  => 'Documentation The Steps eCommerce Course',

				'INTRODUCTION' 		  => 'Introduction About The Course:',
				'CREATEECOMMERCE' 	=> 'Create eCommerce',
				'MULTILINGUAL' 		  => 'Multilingual',
				'RESPONSIVE'		    => 'Responsive',
				'PLAINPHP' 			    => 'Plain PHP [ No OOP, No MVC, No Design Pattern ]',
				'USEJQUERY' 		    => 'Use jQuery',
				'PHPDATAOBJECT' 	  => 'Use PDO PHP Data Object﻿',

				'BASICS' 			      => 'The Basics Must Be Learned:',

				'USEREDITOR' 	    	=> 'User Code Editor:',
				'OR' 			        	=> 'Or',

				'SERVERUSED' 	    	=> 'Server used:',

				'ACTIONSTEPS' 	  	=> 'Action Steps:',
				'REQUIREDFILES' 	  => 'Include Required Files',
				'CALLLIBRARIES'   	=> 'Call Libraries',
				'LANGUAGEFUNCTION' 	=> 'Create Language Function',
				'CREATEDATABASE' 	  => 'Create The Main Database',
				'CONNECTDATABASE' 	=> 'Connect To Database',
				'LOGINFORMDESIGN' 	=> 'Login Form Design',
				'JQUERYPLACEHOLDER' => 'jQuery Function For Toggle Hide Placeholder',
				'INITIALIZED' 	  	=> 'Create File Initialized init.php For include Files',
				'SESSIONSTART' 	  	=> 'session_start();',
				'CALLNOTNONAVBAR' 	=> 'Call navbar.php For Each Files, But The File That Contains The $noNavbar Variable',
				'TASKLANGCHANGE'  	=> 'Task Languages Change﻿'
			);

		return $lang[$phrase];
	}
