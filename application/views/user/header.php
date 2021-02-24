<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
	  <title>TicTacToe</title>
      <!--insert your title here-->  
      <meta name="description" content="Tic Tac Toe believes that positive fun filled learning experiences will lay the foundation for a self motivated life long learner. Our learning engagements are curated to ignite a passion for wonder, discovery, and experiential learning.">
      <!--insert your description here-->  
      <meta name="author" content="5TH Dimension Technologies">
      <!--insert your name here-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--meta responsive-->
      <!--START CSS--> 
      <link rel="stylesheet" href="<?php base_url(); ?>assets/web/css/nicdark_style.css">
      <!--style-->
      <link rel="stylesheet" href="<?php base_url(); ?>assets/web/css/nicdark_responsive.css">
      <!--nicdark_responsive-->
      <!--revslider-->
      <link rel="stylesheet" href="<?php base_url(); ?>assets/web/css/revslider/settings.css">
      <!--revslider-->
      <!--END CSS-->
      <!--[if lt IE 9]>  
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>  
      <![endif]-->  
      <!--FAVICONS-->
      <link rel="shortcut icon" href="<?php base_url(); ?>assets/web/img/logo/logo.png">
      <link rel="apple-touch-icon" href="<?php base_url(); ?>assets/web/img/logo/logo.png">
      <link rel="apple-touch-icon" sizes="72x72" href="<?php base_url(); ?>assets/web/img/logo/logo.png">
      <link rel="apple-touch-icon" sizes="114x114" href="<?php base_url(); ?>assets/web/img/logo/logo.png">
      <!--END FAVICONS-->
   </head>
   <body id="start_nicdark_framework">
      <div class="nicdark_site">
         <div class="nicdark_site_fullwidth nicdark_clearfix">
            <div class="nicdark_overlay"></div>
            <div class="nicdark_section nicdark_navigation fade-down">
               <div class="nicdark_menu_boxed">
                  <div class="nicdark_section nicdark_bg_greydark nicdark_displaynone_responsive">
                     <div class="nicdark_container nicdark_clearfix">
                        <div class="grid grid_6">
                           <div class="nicdark_focus">
                              <h6 class="white">
                                 <i class="icon-calendar-outlilne"></i>&nbsp;&nbsp;<a class="white" href="#">OUR EVENTS</a>
                                 &nbsp;&nbsp;&nbsp;&nbsp;<span class="grey">·</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                 <i class="icon-pencil-1"></i>&nbsp;&nbsp;<a class="white" href="#">NEWS</a>
                                 &nbsp;&nbsp;&nbsp;&nbsp;<span class="grey">·</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                 <i class="icon-phone-outline"></i>&nbsp;&nbsp;(+91) 808-710-8333
                              </h6>
                           </div>
                        </div>
                        <div class="grid grid_6 right">
                           <div class="nicdark_focus right">
                              <h6 class="white">
                                 <i class="icon-plus-outline"></i>&nbsp;&nbsp;<a class="white nicdark_mpopup_ajax" href="#">REGISTER</a>
                                 &nbsp;&nbsp;&nbsp;&nbsp;<span class="grey">·</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                 <i class="icon-lock-1"></i>&nbsp;&nbsp;<a class="white nicdark_mpopup_ajax" href="#">LOG IN</a>
                              </h6>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="nicdark_space3 nicdark_bg_gradient"></div>
                  <?php
				   		include("nav_view.php");
				   ?>
                  <!--end header-->
               </div>
            </div>
            <!--start-->