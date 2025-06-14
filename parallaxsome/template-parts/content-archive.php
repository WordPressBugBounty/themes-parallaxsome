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
		<?php $img_option = get_theme_mod('archive_ft_image_option','show'); 
		if($img_option == 'show') {
			if( has_post_thumbnail() ){
				the_post_thumbnail( 'parallaxsome_single_thumb' );
			}
		}
	?>
	<div class="article-content-wrapper">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<?php $archive_metadata_option = get_theme_mod('archive_metadata_option','show'); 
		if($archive_metadata_option == 'show'){?>
		<div class="entry-meta">
			<?php parallaxsome_archive_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php } ?>
		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->
		<div class="arcitle-more-btn"><a href="<?php the_permalink(); ?>" class="btn archive-read-more"><?php esc_html_e( 'Read More', 'parallaxsome' ); ?></a></div><!-- .arcitle-more-btn -->
	</div><!-- .article-content-wrapper -->	
	
</article><!-- #post-## -->
