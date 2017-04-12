<?php

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'pceuropa' ),
) );


add_action("wp_enqueue_scripts", "my_jquery3", 11);
function my_jquery3() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "//code.jquery.com/jquery-3.1.1.min.js", false, null, true);
    wp_register_script('bootstrap', "//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", false, null, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
}



 register_sidebar([
            'name' => __( 'Right Sidebar', 'pceuropa' ),
			'id' => 'sidebar-1',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ]);
		
		
// Register Custom Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');
load_theme_textdomain( 'pceuropa', get_template_directory() . '/languages' );


function categoryLink() {
	$categories = get_the_category();
	if ( ! empty( $categories ) ) {
		echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
	}
}


?>
