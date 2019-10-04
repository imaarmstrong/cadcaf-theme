<?php 
/**
 * This is main template file
 *
 * @package WordPress
 * @subpackage business-a
 * @since Business-A 1.1
 */
get_header();
?>
	<section class="rdn-main-content">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12">
					
					<?php if( have_posts() ): ?>
						<header class="page-header">
							<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
						</header><!-- .page-header -->
					<?php
						while( have_posts() ): the_post();
							get_template_part('content','');
						endwhile;
					else:
						get_template_part('content','none');
					endif;
										
					// Previous/next page navigation.
					the_posts_pagination( array(
					'prev_text'          => __('<i class="fa fa-angle-double-left"></i>','business-a' ),
					'next_text'          => __('<i class="fa fa-angle-double-right"></i>','business-a' ),
					'type'               => 'list'
					) );
					?>
				</div>
				
				
			</div>
		</div>
	</section><!-- .rdn-main-content -->
<?php get_footer(); ?>