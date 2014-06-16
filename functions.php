<?php //Opening PHP tag

/*
 *  Add responsive container to embeds
 */ 
function er_embed_html( $html ) {
    return '<div class="video-container">' . $html . '</div>';
}
    add_filter( 'embed_oembed_html', 'er_embed_html', 10, 3 );
    add_filter( 'video_embed_html', 'er_embed_html' ); // Jetpack
?>