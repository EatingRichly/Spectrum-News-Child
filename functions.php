<?php //Opening PHP tag

/*
 *  Add responsive container to embeds
 */
function er_embed_html( $html ) {
    return '<div class="video-container">' . $html . '</div>';
}
    add_filter( 'embed_oembed_html', 'er_embed_html', 10, 3 );
    add_filter( 'video_embed_html', 'er_embed_html' ); // Jetpack
/*
 *  End Add responsive container to embeds
 */
/**
 * Proper way to enqueue scripts and styles
 */
function custom_styles() {

    wp_register_style( 'er_child_theme', get_stylesheet_uri(), false, '1.5.33', 'all' );
    wp_enqueue_style( 'er_child_theme' );
}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'custom_styles' );
/**
 * End Proper way to enqueue scripts and styles
 */


?>
