<?php get_header();

$heading        = get_the_title();
$feat_image     = get_field('event_image');

?>

<div class="single-event">
    <div class="single-event__head" style="background-image:url('<?php echo $feat_image; ?>'); ">
        <div class="single-event__head-content">
            <h1 class="single-event__heading"><?php echo $heading; ?></h1>
        </div>
    </div>

    <div class="single-event__body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 col-md-push-4">
                    <h2 class="single-event__section-title"> <?php _e('About the event', 'cadcaf-theme'); ?> </h2>
                    <div class="single-event__body--content">
                        <?php echo get_field('event_content'); ?>
                    </div>
                </div>
                <div class="col-md-4 col-12 col-md-pull-8">
                    <h2 class="single-event__section-title"> <?php _e('Event details', 'cadcaf-theme'); ?> <h2>
                    <ul class="single-event__details">
                        <li class="single-event__details--location"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder.svg" alt=""> <?php echo get_field('event_location'); ?> </li>
                        <li class="single-event__details--date"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/calendar.svg" alt=""> <?php echo get_field('event_date'); ?> </li>
                    </ul>
                    <div class="single-event__form">
                        <h2 class="single-event__section-title"> <?php _e('Book your place', 'cadcaf-theme'); ?> <h2>
                        <?php echo do_shortcode('[ninja_form id=1]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
