<?php
/**
 * @package understrap-bs3
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
	<header class="entry-header">
        
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php understrap_bs3_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>
        
	</header><!-- .entry-header -->

       <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?> 
    
		<div class="entry-content">

	            <?php
	                the_excerpt();
	            ?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap-bs3' ),
					'after'  => '</div>',
				) );
			?>
	        
		</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_bs3_entry_footer(); ?>
		
	</footer><!-- .entry-footer -->
    
</article><!-- #post-## -->