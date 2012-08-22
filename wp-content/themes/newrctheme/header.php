<!DOCTYPE html>







<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->



<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->



<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->



<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->



<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->



<head>



	<meta charset="<?php bloginfo( 'charset' ); ?>" />



	<base href="<?php bloginfo("url") ?>/" />

	<!-- <base href="http://10.32.210.85/rcblog/ " /> -->

	<!-- Set the viewport width to device width for mobile -->



	<meta name="viewport" content="width=device-width">







	<title><?php bloginfo("name") ?></title>



  



	<!-- Included CSS Files -->



	<!-- Combine and Compress These CSS Files -->



	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/stylesheets/foundation.css"/>

	<!-- <link rel="stylesheet" href="http://10.32.210.85/rcblog/wp-content/themes/newrctheme/stylesheets/foundation.css"/>	 -->

	<!-- End Combine and Compress These CSS Files -->



	<!-- <link rel="stylesheet" type="text/css"  href="http://10.32.210.85/rcblog/wp-content/themes/newrctheme/style.css" />
 -->

<link rel="stylesheet" type="text/css"  href="<?php bloginfo('template_directory') ?>/style.css" />




	<!--[if lt IE 9]>



		<link rel="stylesheet" href="wp-content/themes/newrctheme/stylesheets/ie.css">



	<![endif]-->



	



	<script src="javascripts/modernizr.foundation.js"></script>







	<!-- IE Fix for HTML5 Tags -->



	<!--[if lt IE 9]>



		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>



	<![endif]-->







</head>



<body>







	<!-- container -->



	<div class="container">



		<div class="row">



			<div class="orange"></div>



		</div>



		<!-- start of header -->



		<div class="row show-on-desktops" id="main-logo">



			<header>



				<h1 style="display: inline-block; margin:10px 0px;"><a href="#"><img src="wp-content/themes/newrctheme/images/logo.png" alt="RingCentral Connect, A blog for business" /></a></h1>



			</header>



		</div>



		<div class="row hide-on-desktops" style="height: 70px !important; margin-top: 10px; margin-bottom: 30px">



			<div id="logoq" style="float: left">



				<h1><a href=""><img src="wp-content/themes/newrctheme/images/logo.png" alt="RingCentral Connect, A blog for business" /></a></h1>



			</div> 



			<div id="newlogo" style="float: left;">



				<h1><a href=""><img src="wp-content/themes/newrctheme/images/newlogo.png" alt="RingCentral Connect, A blog for business" /></a></h1>



			</div>



			<div style="float: right">



				<div id="menu">



				</div>



				<div id="searchbut">



				</div>



			</div>



			<div style="clear: both"></div>



			<hr />



		</div>



		<div class="row"  id="nav-id">



			<nav>



					<ul>



						<!-- <li><a href="" class="firstnav">Customers</a></li>



						<li><a href="">Superfans</a></li>



						<li><a href="">About</a></li>



						<li><a href="">Contact us</a></li> -->



						



						<?php



						$args = array(



							'depth'        => 0,



							'show_date'    => '',



							'date_format'  => get_option('date_format'),



							'child_of'     => 0,



							'exclude'      => '',



							'include'      => '3',



							'title_li'     => "",



							'echo'         => 1,



							'authors'      => '',



							'sort_column'  => 'menu_order, post_title',



							'link_before'  => '',



							'link_after'   => '',



							'walker'       => '',



							'post_type'    => 'page',



						        'post_status'  => 'publish' 



						);



						 wp_list_pages($args) ?>



							 <li><a href="">RingCentral Tips</a></li>



						<?php 



							



							wp_list_pages('include=5,7&title_li=');



						 ?>



						<li class="search">



							<div id="search">



								<?php get_search_form(); ?>



							</div>



						</li>



					</ul>



			</nav>



		</div>



		<div class="row show-on-tablets"  id="reveal">



			<nav>



					<ul>



						<!-- <li><a href="" class="firstnav">Customers</a></li>



						<li><a href="">Superfans</a></li>



						<li><a href="">About</a></li>



						<li><a href="">Contact us</a></li> -->



						



						<?php



						$args = array(



							'depth'        => 0,



							'show_date'    => '',



							'date_format'  => get_option('date_format'),



							'child_of'     => 0,



							'exclude'      => '',



							'include'      => '3',



							'title_li'     => "",



							'echo'         => 1,



							'authors'      => '',



							'sort_column'  => 'menu_order, post_title',



							'link_before'  => '',



							'link_after'   => '',



							'walker'       => '',



							'post_type'    => 'page',



						        'post_status'  => 'publish' 



						);



						 wp_list_pages($args) ?>



							 <li><a href="">RingCentral Tips</a></li>



						<?php 



							



							wp_list_pages('include=5,7&title_li=');



						 ?>



						<li>

							<div id="rev-search"></div>

						</li>



					</ul>



			</nav>



		</div>



		<div id="tabnav" class="row">



			<ul>

<?php



						$args = array(



							'depth'        => 0,



							'show_date'    => '',



							'date_format'  => get_option('date_format'),



							'child_of'     => 0,



							'exclude'      => '',



							'include'      => '3',



							'title_li'     => "",



							'echo'         => 1,



							'authors'      => '',



							'sort_column'  => 'menu_order, post_title',



							'link_before'  => '',



							'link_after'   => '',



							'walker'       => '',



							'post_type'    => 'page',



						        'post_status'  => 'publish' 



						);



						 wp_list_pages($args) ?>



							 <li><a href="">RingCentral Tips</a></li>



						<?php 



							



							wp_list_pages('include=5,7&title_li=');



						 ?>



			<!-- 	<li class="search">



					<div id="search">



						<?php get_search_form(); ?>



					</div>



				</li> -->



			</ul>



		</div>

		<div id="tabnav-search" class="row search">

			<div class="search">

				<?php get_search_form(); ?>

			</div>

		</div>





<div id="myModal" class="reveal-modal">

  <h2>Awesome. I have it.</h2>

  <p class="lead">Your couch.  I it's mine.</p>

  <p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>

  <a class="close-reveal-modal">&#215;</a>

</div>













		<!-- end of header -->