<?php
/**
 * Header template
 *
 * @package luminio
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">
<head>
<meta charset="<?php bloginfo('charset') ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo( 'description' ) ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

    <meta property="og:title" content="<?php wp_title('|', true, 'right'); bloginfo('name'); ?>" />
<meta property="og:description" content="<?php bloginfo( 'description' ) ?>" />
<meta property="og:image" content="https://www.brandideon.com/wp-content/uploads/2023/07/Frame-131.jpg" />
	<?php wp_head() ?>
</head>
<body <?php body_class() ?> itemtype="https://schema.org/WebPage" itemscope>
	<?php if(function_exists('wp_body_open')) {
wp_body_open();
	} ?>
<header role="banner" itemtype="https://schema.org/WPHeader" itemscope>
<nav class="pc nav-menu" itemtype="https://schema.org/SiteNavigationElement" itemscope>
        	<section class="logoo section-padding"><?php if ( function_exists( 'the_custom_logo' ) ) {
        	the_custom_logo();
        	} ?> <span></span></section>
        	<div class="right-menu">
        	<section class="pc-nav section-padding"><ul>
        	<?php
    	wp_nav_menu(array('theme_location' => 'primary','menu_class'=>'menu',));
	?>
        	</ul></section>
        	<section class="tog" id="tog" onclick="myFunction()">
            	<div class="toggle">
                	<span class="line-toggle"></span>
                	<span class="line-toggle"></span>
                	<span class="line-toggle"></span>
              	</div>
        	</section>
        	<section class="kontakt section-padding">
        	<div class="button-border">
    	<a href="#" class="button-white border-outline-section-white">Napíšte nám</a>
	</div>
        	</section>
        	</div>
    	</nav>
    	<nav class="m-nav" itemtype="https://schema.org/SiteNavigationElement" itemscope><ul>
    	<?php
    	wp_nav_menu(array('theme_location' => 'primary','menu_class'=>'menu',));
	?>
        	</ul>
    	</nav>
</header>
<main>
