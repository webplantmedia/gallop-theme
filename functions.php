<?php

add_action('enqueue_block_editor_assets', 'gallop_theme_enqueue_fonts');
add_action('wp_enqueue_scripts', 'gallop_theme_enqueue_fonts', 9);

function gallop_theme_enqueue_fonts()
{
	wp_enqueue_style('gallop-theme-google-fonts', 'https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap', array(), null); // null allows google fonts to have multiple family args in url
	wp_enqueue_style('gallop-theme-custom-fonts', 'https://use.typekit.net/hzf6wwv.css', array(), null);
}
