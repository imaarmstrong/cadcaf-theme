<?php 
/*
 * Display Blog details contents
 */
?>
<article id="<?php the_ID(); ?>" <?php post_class('post'); ?>>
		
		<?php if( has_post_thumbnail() ){ ?>
		<div class="rdn-featured-image">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php } ?>
		
		<header class="entry-header">
			<?php 	
				if ( is_single() ) :
					the_title('<h1 class="entry-title">', '</h2>' );
				else:
					the_title( sprintf( '<h1 class="entry-title">', esc_url( get_permalink() ) ), '</h1>' );
				endif; 
				?>
		</header>
		
		
		<div class="entry-content">
			<?php 
			
			the_content();
			
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'business-a' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'business-a' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
			
			?>
		</div>

</article>