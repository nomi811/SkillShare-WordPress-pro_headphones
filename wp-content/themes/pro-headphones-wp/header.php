<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pro-headphones-wp
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pro-headphones-wp' ); ?></a>

  <!-- NAVBAR -->
  <header>
       <div class="row">
         <div class="large-12 columns">
             <div class="top-bar">
                 <div class="top-bar-left">
                     <ul class="menu">
                         <li class="menu-text"><a href="index.html">Pro Headphones</a></li>
                         <li><a href="/blog.html">Blog</a></li>
                         <li><a href="/about.html">About</a></li>
                     </ul>
                 </div>
                 <div class="top-bar-right">
                     <ul class="menu">
                         <li><input type="search" placeholder="Search"></li>
                         <li><button type="button" class="button">Search</button></li>
                     </ul>
                 </div>
             </div>
         </div>
       </div>
     </header>

   <section id="feature">
       <div class="row">
           <div class="large-12 columns">
               <img src="<?php bloginfo('template_directory'); ?>/images/headphones.jpeg" alt="headphones image">
           </div>
       </div>
   </section>

	<div id="content" class="site-content">
