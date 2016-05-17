<?php

	function lang( $phrase ) {

		static $lang = array(

				// Dashboard Nav Bar phrase
				'HOME_ADMIN' 		    => 'الرئيسية',
				'CATEGORIES' 		    => 'الأقسام',
				'DROPDOWN' 			    => 'القائمة',
				'EDIT' 				      => 'تحرير',
				'SETTINGS' 			    => 'الاعدادات',
				'LOGOUT' 			      => 'تسجيل خروج',

				// Dashboard Content phrase
				'DIRECTION' 		    => 'rtl',
				'DOCUMENTATION' 	  => 'خطوات عمل كورس eCommerce',

				'INTRODUCTION' 		  => 'مقدمة الكورس :',
				'CREATEECOMMERCE' 	=> 'انشاء متجر الكتروني بيع منتجات اون لاين',
				'MULTILINGUAL' 		  => ' متعدد اللغات',
				'RESPONSIVE' 		    => ' متوافق مع الاجهزة المختلفه',
				'PLAINPHP' 			    => 'استخدام PHP [ بدون OOP و MVC و Design Pattern ]',
				'USEJQUERY' 		    => 'استخدام jQuery',
				'PHPDATAOBJECT' 	  => 'PDO وايضا﻿',

				'BASICS' 			      => 'اساسيات يجب تعلمها قبل البدأ في تعلم الكورس',

				'USEREDITOR' 		    => ' المحرر الذي يمكن ان نستخدمه في هذا الكورس',
				'OR' 				        => 'او',

				'SERVERUSED' 		    => 'السيرفر المستخدم :',

				'ACTIONSTEPS' 	  	=> 'خطوات العمل :',
				'REQUIREDFILES' 	  => 'تحضير فولدرات وملفات المشروع',
				'CALLLIBRARIES' 	  => 'استدعاء المكتبات :',
				'LANGUAGEFUNCTION' 	=> 'انشاء فانكشن اللغة',
				'CREATEDATABASE' 	  => 'انشاء قاعدة بيانات',
				'CONNECTDATABASE' 	=> 'انشاء ملف الاتصال بالداتابيز',
				'LOGINFORMDESIGN' 	=> 'انشاء فورم تسجيل الدخول',
				'JQUERYPLACEHOLDER' => 'انشاء فانكشن جيكوري لاخفاء واظهار بلايس هولدر',
				'INITIALIZED' 		  => 'Initialized انشاء ملف init.php لاستدعاء ملفات include',
				'SESSIONSTART' 		  => ' استخدام session_start();',
				'CALLNOTNONAVBAR' 	=> ' استدعاء النافبار في كل الصفحات الا الصفحه اللي فيها فاريابل معين ',
				'TASKLANGCHANGE' 	  => 'تمرين عن تغيير اللغه'
			);

		return $lang[$phrase];
	}
