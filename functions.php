<?php

//Laddar in CSS-filen
function getCSS() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'getCSS' );

//Hämtar huvudmenyn
function getMenu() {
    register_nav_menu('mainMenu', __('Huvudmeny'));
}
add_action('init', 'getMenu');

//Välja header
$logoAndText = array(
    'default-image' => get_template_directory_uri() . '/images/bannerWeb.jpg',
    'uploads'       => true,
);
add_theme_support('custom-header', $logoAndText);

add_theme_support( 'post-thumbnails' );


//Standardlängd ord excerpt()
function excerptLength($words) {
	return 30;
	//return wp_trim_words(get_the_excerpt(), $limit, '<a href="'.get_permalink(get_the_ID()).'"> […]</a>'); 

}
add_filter( 'excerpt_length', 'excerptLength', 999 );


//Anpassad längd excerpt()
function excerpt($limit) {
    return wp_trim_words(get_the_excerpt(), $limit);

    //Ger inramade punkter med länkar
    //return wp_trim_words(get_the_excerpt(), $limit, '<a href="'.get_permalink(get_the_ID()).'"> […]</a>'); 
}

function ellipsisLink($limit) {
    //Ger inramade punkter med länkar
    return wp_trim_words(get_the_excerpt(), $limit, '<a href="'.get_permalink(get_the_ID()).'"> […]</a>'); 
}

//Widgets
function theme_widgets_init() {

	//Bild startsidan dator
    register_sidebar( array(
		'name'          => 'Banner Web',
		'id'            => 'banner_web',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
    ) );

	//Bild startsidan tablet och mobil
    register_sidebar( array(
		'name'          => 'Banner Tablet and Mobile',
		'id'            => 'banner_tablet_and_mobile',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
    ) );

    register_sidebar( array(
		'name'          => 'Slogan',
		'id'            => 'slogan',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
    ) );

    register_sidebar( array(
		'name'          => 'Footer Phonenumber',
		'id'            => 'footer_phonenumber',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
    ) );

    register_sidebar( array(
		'name'          => 'Footer Address',
		'id'            => 'footer_address',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
    ) );

    register_sidebar( array(
		'name'          => 'Footer Email',
		'id'            => 'footer_email',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
    ) );

    register_sidebar( array(
		'name'          => 'Footer Copyright',
		'id'            => 'footer_copyright',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	/* Hade kunnat göra en för varje istället för att lägga in mellanrum i efterhand,
	men det hade blivit väldigt stökigt på widget-delen av WordPress-sidan i sådana fall */
	register_sidebar( array(
		'name'          => 'Social Media',
		'id'            => 'social_media',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'theme_widgets_init' );
