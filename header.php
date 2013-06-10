<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]>  <html class="no-js" <?php language_attributes(); ?>> <![endif]-->

<html lang="en-GB" class="no-js">
<head>
<title><?php wp_title(); ?></title>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />

<?php 
 wp_enqueue_script('css3-mediaqueries', get_stylesheet_directory_uri() .'/js/bootstrap.min.js');
 wp_enqueue_script('modernizr', get_stylesheet_directory_uri() .'/js/modernizr.js');

?>

<?php wp_head(); ?>

</head> 

<body <?php body_class(); ?>>

<!-- wrap -->
<div id="wrapper" class="container">
   <header>  
      <div class="row" id="logo">   
         <div class="span8">
            <h1><a href="<?php echo home_url(); ?>" ><img src="<?php bloginfo( 'template_url' ); ?>/images/marbles-fd-logo.png" width="247" height="50" alt="Marbles FP" /></a></h1>
         </div>
         <div class="span4" id="phone">
            <ul id="social-links">
               <li><a class="facebook" href="">facebook</a></li>
               <li><a class="gplus" href="">google</a></li>
               <li><a class="linkedin" href="">linkedin</a></li>
            </ul>
            <p><a href="tel:0207123456">Call Us: 020 7123 4567</a><span><a href="mailto:<?php bloginfo('description'); ?>"><?php bloginfo('description'); ?></a></span></p>
         </div>
      </div>
   </header>
   
<!-- nav -->
<div class="navbar-wrapper">
    
         <div class="navbar">
            <div class="navbar-inner">
               
               <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               
               <div class="nav-collapse collapse">
                  <?php wp_nav_menu( array( 'theme_location' => 'topnav' ) ); ?>
               </div> <!--/.nav-collapse -->
            
            </div><!-- /.navbar-inner -->
         </div><!-- /.navbar -->
     
   </div><!-- /.navbar-wrapper -->   