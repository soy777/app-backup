<?php
/**
 * Register custom post types
 */

function register_sample_post_type(){
    register_post_type('sample', [
        'label' => 'Sample',
        'public' => true,
        'has_archive' => true
    ]);
}
add_action('init', 'register_sample_post_type');
