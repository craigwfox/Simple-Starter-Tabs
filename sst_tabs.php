<?php
   /*
   Plugin Name: Simple Starter Tabs
   Plugin URI: http://craigwfox.com
   Description: Just a simple jquery tabbed content plugin for Wordpress.
   Version: 1.0
   Author: Craig Fox
   Author URI: http://craigwfox.com
   License: GPL2
   */



/* ------------------------------------------------------------------------
  Admin Page Setup
------------------------------------------------------------------------ */
  function sstt_admin_page() {
    include('sstt_admin.php');
  }
  add_action('admin_menu', 'sstt_admin_page_actions');
  function sstt_admin_page_actions() {
    add_options_page('Simple Starter Tabs Admin', 'Simple Starter Tabs', 'manage_options', 'sst_Tab.php', 'sstt_admin_page');
  }

  function sstt_admin_styles($hook) {
    if ( 'sstt_admin.php' != $hook ) {
      wp_enqueue_style( 'sstt-styles', plugins_url( '/assets/css/sstt-admin.min.css', __FILE__ ) );
      return;
    }
  }
  add_action( 'admin_enqueue_scripts', 'sstt_admin_styles' );



/* ------------------------------------------------------------------------
  Styles and Js for Theme Front End
------------------------------------------------------------------------ */
  function sstt_styles() {
   if (!is_admin()) {
      wp_enqueue_script( 'sstt-scripts', plugins_url( '/assets/js/sstt.min.js', __FILE__ ), array( 'jquery' ), '1.0', true );
    }
    wp_enqueue_style( 'sstt-styles', plugins_url( '/assets/css/sstt.min.css', __FILE__ ) );     
  }
  add_action( 'wp_enqueue_scripts', 'sstt_styles' );

/* ------------------------------------------------------------------------
  Shortcodes for the Tab
------------------------------------------------------------------------ */
  // Tab Nav Shortcodes
    function sstt_nav_shortcode($atts, $content = null) {
      extract(shortcode_atts( array(
        'class_name' => '',
      ), $atts));
      return '<ul class="sstt__nav '.esc_attr($class_name).'">'.do_shortcode($content).'</ul>';}
    add_shortcode('sstt_nav', 'sstt_nav_shortcode');

    function sstt_nav_title_shortcode($atts, $content = null) {
      extract(shortcode_atts( array(
        'class_name' => '',
        'tab_text' => '',
        'tab_id' => '',
      ), $atts));
      return '<li class="sstt__nav__title '.esc_attr($class_name).'" data-tab_id="'.esc_attr($tab_id).'">'.esc_attr($tab_text).'</li>';}
    add_shortcode('sstt_nav_title', 'sstt_nav_title_shortcode');

  // Tab Content Area Shortcodes
    function sstt_content_wrapper_shortcode($atts, $content = null) {
      extract(shortcode_atts( array(
        'class_name' => '',
      ), $atts));
      return '<div class="sstt__content-wrapper '.esc_attr($class_name).'">'.do_shortcode($content).'</div>';}
    add_shortcode('sstt_content_wrapper', 'sstt_content_wrapper_shortcode');

    function sstt_content_shortcode($atts, $content = null) {
      extract(shortcode_atts( array(
        'class_name' => '',
        'tab_id' => '',
      ), $atts));
      return '<div class="sstt__content '.esc_attr($class_name).'" data-tab_id="'.esc_attr($tab_id).'">'.do_shortcode($content).'</div>';}
    add_shortcode('sstt_content', 'sstt_content_shortcode');












?>