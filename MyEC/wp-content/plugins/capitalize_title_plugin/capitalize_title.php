<?php
/*
Plugin Name: Capitalize Title Plugin
Description: This plugin capitalizes the title of WordPress posts.
Version: 1.0
Author: ibrahim_salah
*/

function capitalize_title($title) {
  return ucwords($title);
}

add_filter('the_title', 'capitalize_title');
?>
