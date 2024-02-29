<?php 
function Luther_blue_files(){
  wp_enqueue_script('main_script', get_theme_file_uri('script.js'),NULL, '1.0', true);
  wp_enqueue_style('google_fonts','//fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap');
  wp_enqueue_style('Luther_blue_styles',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'Luther_blue_files');
?>