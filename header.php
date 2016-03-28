<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />   
	<?php wp_head(); ?>
	<title><?php wp_title(''); ?> <?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
	<link href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" rel="shortcut icon" type="icon" />
	<!--Style-->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style-2.css" media="screen and (max-width: 959px) and (min-width: 640px)"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style-3.css" media="screen and (max-width: 639px) and (min-width: 460px)"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style-4.css" media="screen and (max-width: 459px)"/>
    </head>
<body <?php body_class(); ?>>
    <div id="canvas">
    
        <header id="header" class="header">
            <div id="header_wrap">
		<div class="menu-res-button"><a href="#" onclick="toggle_visibility('nav');tog_mar('wel');"><img onclick="changeImage(this)" id="menu_change" src="<?php bloginfo('template_directory'); ?>/img/menu.png"/></a></div>
        <nav id="nav" class="nav">
            
            <ul>
            <?php 
            $args = array(
                    'theme_location' => 'primary'
                );
            ?>
            <?php wp_nav_menu(  $args); ?>
            </ul>
            </nav><!--End Nav-->   
            <div id="search">
            <form id="search_form" class="row" action="<?php echo home_url('/'); ?>" method="GET">
                <input type="text" class="field" name="s" id="s" value="Search..." onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" autocomplete="off"/>
				<input type="submit" name="" style="display:none;"/> 
                </form>
                </div>
            </div>
        </header><!--End Header-->
            <div class="clr"></div><!--Clear-->
			<div class="cwrap">
            <div id="title">
            
			<a href="<?php echo get_home_url(); ?>
"><img style="width:320px;height:87px;" src="<?php bloginfo('template_directory'); ?>/img/logo.png"/></a>
            
            </div><!--End Title-->
            
            <div class="clr"></div><!--Clear-->
            