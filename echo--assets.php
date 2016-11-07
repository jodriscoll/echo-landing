<?php
  function load_custom_scripts() {
    // wp_enqueue_script('loyalty-scripts', THEMEROOT . '/js/loyalty.js', array('jquery'), false, true);
    
    wp_enqueue_style('echo--landing-page', THEMEROOT.'/echo--landing-page/echo--landing-page.min.css');
  }
?>
