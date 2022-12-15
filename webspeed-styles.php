<?php
/*
Plugin Name: Webspeed Styles
Version: 1.0
Plugin URI: https://www.web.dk
Description: Styling af HTML elementer
Author: Morten Andersen
Text Domain: webspeeed-styles-domain
Author URI: https://www.web.dk.dk
*/

// CSS file
add_action('wp_enqueue_scripts', 'webspeed_styles_register_plugin_styles');
  function webspeed_styles_register_plugin_styles() {
    wp_register_style('webspeed-styles', plugins_url('/css/webspeed-styles.css',__FILE__));
    wp_enqueue_style('webspeed-styles');
  }

/* -------------------------------------- */