<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<div id="contactPopup" class="pop-up" >
    <div class="contact">
        <div class="close-button" id="closeButton">
          <i class="fas fa-times"></i>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/media/contact_header.png" alt="Contact Header" class="contact_header">
        <div class="contact_form">
          <?php echo do_shortcode( '[contact-form-7 id="3a4c5b5" title="Pop-Up Form"]'); ?>
      </div>
  </div>
</div>