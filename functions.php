<?php


function add_theme_scripts() {

  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script( 'uikit', get_template_directory_uri() . '/assets/js/uikit.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'uikit-icons', get_template_directory_uri() . '/assets/js/uikit-icons.min.js', array ( 'jquery' ), 1.1, true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );




register_nav_menus(array(
  'primary' => __('Primary Menu', 'THEMENAME'),
));

register_nav_menus(array(
  'mobile' => __('Mobile Menu', 'THEMENAME'),
));

function wp_nav_menu_no_ul() {
  $options = array(
    'echo' => false,
    'container'       => false,
    'items_wrap'      => '<ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>',
    'walker'         => new subeMenu,
    'theme_location' => 'primary'
  );

  $menu = wp_nav_menu($options);

  echo preg_replace(array(
    '#^<ul[^>]*>#',
    '#</ul>$#'
  ), '', $menu);
}

function new_submenu_class($menu) {
  $menu = preg_replace('/ class="sub-menu"/','/ class="uk-nav uk-navbar-dropdown-nav" /',$menu);
  return $menu;
}

function strip_empty_classes($menu) {
  $menu = preg_replace('/ id=(["\'])(?!active).*?\1/', '', $menu);
  return $menu;
}

function clear_nav_menu_item_class($classes, $item, $args) {
  return array();
}

function wp_nav_menu_remove_attributes($menu) {
  return $menu = preg_replace('/ id=\"(.*)\" class=\"(.*)\"/iU', '', $menu);
}

function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'nav-item';
  return $classes;
}

add_filter('wp_nav_menu','new_submenu_class');
add_filter('nav_menu_css_class','add_classes_on_li',1,3);
add_filter('wp_nav_menu', create_function('$t', 'return str_replace("<a ", "<a class=\"nav-link\" ", $t);'));

class subeMenu extends Walker_Nav_Menu {
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<div class='uk-navbar-dropdown'><ul class='uk-nav uk-navbar-dropdown-nav'>\n";
  }

  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul></div>\n";
  }
}
// End Custom navbar


function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
// End SVG Upload