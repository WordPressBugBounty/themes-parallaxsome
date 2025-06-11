<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AccessPress Themes
 * @subpackage ParallaxSome
 * @since 1.0.0
 */
?>

		</div><!-- .ps-container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php get_sidebar( 'footer' ); ?>
		<div class="site-info">
			<div class="ps-section-container">
				<?php
				$ps_copyright_text = get_theme_mod('ps_copyright_text');

				if( !empty( $ps_copyright_text ) ) { ?>
						<?php echo  wp_kses_post($ps_copyright_text) ; ?>	
					<?php } else { ?>
						<?php echo ('&copy; ' . date_i18n( 'Y' ) ); ?>
					<?php }?>

				<?php /* translators: %s : theme page link */ printf( wp_kses(__( 'WordPress Theme : <a href="%s">Parallaxsome</a>', 'parallaxsome' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( 'https://accesspressthemes.com/wordpress-themes/parallaxsome/' ) ); ?>
			</div><!-- ps-section-container -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<a href="#masthead" id="scroll-up"><i class="fa fa-angle-up"></i></a>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
