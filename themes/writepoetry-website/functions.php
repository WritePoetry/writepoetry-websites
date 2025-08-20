<?php
/**
 * This function modifies the theme JSON data by updating the theme's color
 * palette to just black or white and disables text color.
 *
 * @param object $theme_json The original theme JSON data.
 * @return object The modified theme JSON data.
 */
add_filter( 'wp_theme_json_data_theme', function ( $theme_json ) {
    
    $new_data = array(
        'version' => 3,
        'settings' => array(
            'custom' => array(
                'bannerImages' => array(
                    'github' => 'url(' . get_stylesheet_directory_uri() . '/assets/images/yancy-min-842ofHC6MaI-unsplash.jpg)',
                    'youtube' => 'url(' . get_stylesheet_directory_uri() . '/assets/images/youtube-background.png)',
                )
            )
        )
    );

    return $theme_json->update_with( $new_data );
} );
