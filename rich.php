<?php
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();	
}


add_filter( 'theme_page_templates', 'child_theme_remove_page_template' );

function child_theme_remove_page_template( $page_templates ) {
	unset( $page_templates['template-about.php'] );
	unset( $page_templates['template-contact.php'] );
	unset( $page_templates['template-homepage.php'] );

	return $page_templates;
}

add_action( 'after_setup_theme', function() {
    add_theme_support( 'responsive-embeds' );
} );

?>