<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'portfolio' ); ?></a>

     <header class="header">

        <div class="header__group">
          <a class="header__logo" href="#">MY PROFILE</a>
          <div class="header__menu-icon"><i class="fa fa-navicon fa-2x" aria-hidden="true"></i></div>
          <ul class="header__nav1">
            <li><a href="#hero"><i class="fa fa-user" aria-hidden="true"></i></a></li>
            <li><a href="#education"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a></li>
            <li><a href="#experience"><i class="fa fa-briefcase" aria-hidden="true"></i></a></li>
            <li><a href="#skill"><i class="fa fa-level-up" aria-hidden="true"></i></a></li>
            <li><a href="#interest"><i class="fa fa-gratipay" aria-hidden="true"></i></a></li>
            <li><a href="#contact"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
          </ul>

          <ul class="header__nav">
            <li><a href="#education"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a></li>
            <li><a href="#experience"><i class="fa fa-briefcase" aria-hidden="true"></i></a></li>
            <li><a href="#skill"><i class="fa fa-level-up" aria-hidden="true"></i></a></li>
            <li><a href="#interest"><i class="fa fa-gratipay" aria-hidden="true"></i></a></li>
            <li><a href="#contact"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
          </ul>
        </div>

      </header>


