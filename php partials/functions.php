<?php
  ## please the following lines in the appropriate location of your themes functions.php

  /* 
    conditional asset loading:
    if any of the following conditional arrays are met: page [id], [permalink], [page title]
    add an additional script to the queue for the condition instance
  */
  if ( is_page(array(8576, 'echo', 'Introducing Echo')) ) {
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('echo-lp-css', THEMEROOT.'/css/echo-lp.min.css');
  }

?>