<?php
/**
 * _mbbasetheme functions and definitions
 *
 * @package _mbbasetheme
 */

/****************************************
Theme Setup
*****************************************/

/**
 * Theme initialization
 */
require get_template_directory() . '/lib/init.php';

/**
 * Custom theme functions definited in /lib/init.php
 */
require get_template_directory() . '/lib/theme-functions.php';

/**
 * Helper functions for use in other areas of the theme
 */
require get_template_directory() . '/lib/theme-helpers.php';

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/lib/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/lib/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/lib/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/lib/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/lib/inc/jetpack.php';


/****************************************
Require Plugins
*****************************************/

require get_template_directory() . '/lib/class-tgm-plugin-activation.php';
require get_template_directory() . '/lib/theme-require-plugins.php';

// add_action( 'tgmpa_register', 'mb_register_required_plugins' );


/****************************************
Misc Theme Functions
*****************************************/

/**
 * Define custom post type capabilities for use with Members
 */
add_action( 'admin_init', 'mb_add_post_type_caps' );
function mb_add_post_type_caps() {
	// mb_add_capabilities( 'portfolio' );
}

/**
 * Filter Yoast SEO Metabox Priority
 */
add_filter( 'wpseo_metabox_prio', 'mb_filter_yoast_seo_metabox' );
function mb_filter_yoast_seo_metabox() {
	return 'low';
}

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 150);

function alter_comment_form_fields($fields){
    $fields['author'] = '<p class="comment-form-author">' . ( '<span class="required">*</span>' ) .
                    '<input id="author" name="author" type="text" placeholder="Name" /></p>';
    $fields['email'] = '<p class="comment-form-author">' . '<input id="email" name="email" type="text" placeholder="Email"/></p>';
    $fields['url'] = '';  //removes website field
		$fields['comment'] = '<p class="comment-form-comment">' . '<textarea id="comment" name="comment" required="required" aria-required="true" aria describedby="form-allowed-tags" rows="8" placeholder="Comment" /></p>';
    return $fields;
}

add_filter('comment_form_default_fields','alter_comment_form_fields');
