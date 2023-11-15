<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>
<header>
	<div class="nav_bar">
        <div class="header-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/media/Logo.png" alt="Logo de votre site">
            </a>
        </div>
        <nav class="header-navigation">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">ACCUEIL</a></li>
                <li><a href="<?php echo esc_url(home_url('/a-propos'));?>">À PROPOS</a></li>
                <li><a href='#' id="contactButton">CONTACT</a></li>
            </ul>
        </nav>
	</div>
</header>
	<div class="hero">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/media/hero_header/titre_header.png" alt="Title_hero" >
	</div>
