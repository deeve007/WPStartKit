<?php
/**
 * Blank Theme
 * Functions
 * https://github.com/Lunarsu/WPStartKit
 * @package WordPress
 * @subpackage starter
 */

register_nav_menus(array(
    'top' => 'Top menu',
    'left' => 'Bottom menu'
));
add_theme_support('post-thumbnails');
set_post_thumbnail_size(254, 190);

if (function_exists('register_sidebar'))
    register_sidebar();

?>