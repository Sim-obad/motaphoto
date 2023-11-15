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
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->
	<footer id="colophon" class="site-footer">
  <div class="footer-menu">
    <a href="#">MENTION LÉGALES</a>
    <a href="#">VIE PRIVÉE</a>
    <a href="#">TOUS DROITS RÉSERVÉS</a>
  </div>
	</footer><!-- #colophon -->
	<?php get_template_part( 'template-parts/pop-up/contact_pop-up' ); ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
