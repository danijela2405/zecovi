<?php 
// Adding customizer home page setting
function bluestreet_theme_style_customizer( $wp_customize ){
$wp_customize->remove_control('header_textcolor');
}
add_action( 'customize_register', 'bluestreet_theme_style_customizer' );