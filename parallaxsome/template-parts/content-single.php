<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package AccessPress Themes
 * @subpackage ParallaxSome
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
	$post_img = get_theme_mod('post_feat_image_option','show');
	if($post_img == 'show') { ?>
	<div class="blog-image-wrap">
		<?php

		if( has_post_thumbnail() ){
			the_post_thumbnail( 'parallaxsome_single_thumb' );
		}
		?>
	</div>
	<?php } ?>
	<div class="blog-content-wrap">
		<div class="entry-categories">
			<?php
			$post_cat = get_theme_mod('single_post_cat_option','show');
			if($post_cat == 'show') { 
				$categories_list = get_the_category_list( esc_html( ', ', 'parallaxsome' ) );
				if ( $categories_list && parallaxsome_categorized_blog() ) {
					printf( '<span class="cat-links">' . esc_html( '%1$s') . '</span>', $categories_list ); // WPCS: XSS OK.
				}
			}
			?>
		</div><!-- .entry-categories -->

		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php
		$metadata = get_theme_mod('single_post_metadata_option','show');
		if($metadata == 'show') { ?>
		<div class="entry-meta">
			<?php parallaxsome_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php } ?>
		
		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'parallaxsome' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'parallaxsome' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php parallaxsome_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>

</article><!-- #post-## -->
