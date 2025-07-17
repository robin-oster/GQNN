<?php 
function gqnn_files(){
    wp_enqueue_style('gqnn_main_style', get_template_directory_uri() . "output.css");
}


add_action('wp_enqueue_scripts', 'gqnn_files') ;


?>