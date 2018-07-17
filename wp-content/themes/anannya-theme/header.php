<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anannya
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
        <div class="header">
            <div class="menu_container container">
                <div class="top_bar" style="height: 100px;">
                    <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-8" style="text-align: center">
                            <img src="<?php echo get_template_directory_uri(); ?>/Images/logo2.png" alt="image not found">
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
                </div>
                <nav class="menu_bottom">
                    <div class="row">
                        <div class="col-lg-2 logo2" style="text-align: center;">
                            <img src="<?php echo get_template_directory_uri(); ?>/Images/logo2.png" style="height: 40px; width: 150px;">
                        </div>
                        <div class="menu_item col-lg-10">
                            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
