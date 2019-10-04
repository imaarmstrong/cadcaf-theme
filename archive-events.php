<?php
/* Template Name: Events/Activities */
get_header(); ?>

<div class="single-event__head" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>'); ">
    <div class="single-event__head-content">
        <h1 class="single-event__heading"><?php echo the_title(); ?></h1>
    </div>
</div>
<div class="archive-events__main-body">
    <div class="container">
        <?php echo the_content(); ?>
    </div>
</div>

<div class="archive-events">

    <?php
    $event = new WP_Query(
    array(
        'post_type'       => 'events',
        'posts_per_page'  => -1,
        'orderby'         => 'meta_value_num',
        'order'           => 'DESC',
        'meta_query'      => array(
            array(
                'key' => 'event_date',
                'type' => 'NUMERIC', // MySQL needs to treat date meta values as numbers
                'value' => current_time( 'Ymd' ), // Today in ACF datetime format
                'compare' => '>=', // Greater than or equal to value
            ),
        ),
    )
);

    ?>

    <div class="container">
        <div class="row">
        <?php while ( $event->have_posts() ) : $event->the_post(); ?>
            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card-img" style="background-image:url('<?php echo get_field('event_image'); ?>'); ">

                    </div>
                    <div class="card-body">
                    <h4><?php echo get_the_title(); ?></h4>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="archive-events__details">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder.svg" alt=""> <?php echo get_field('event_location'); ?>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="archive-events__details">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/calendar.svg" alt=""> <?php echo get_field('event_date'); ?>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary" href="<?php the_permalink(); ?>">View Event</a>
                    </div>
                </div>
            </div>

        <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
