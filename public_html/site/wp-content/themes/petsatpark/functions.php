<?php

	// Declare menu zone
	if (function_exists('register_nav_menus')) {

		register_nav_menus( array(
			'primary'   => __( 'Top primary menu', 'mrc' ),
		) );

	}

	// Declare widget zone	
	function logo_widget_init() {
		register_sidebar( array(
			'name' => 'Default Logo (Header)',
			'id' => 'logo',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}	
	add_action( 'widgets_init', 'logo_widget_init' );  
	

	function logo_angels_reiky_therapy_widget_init() {

		register_sidebar( array(

			'name' => 'Reiky Therapy Logo (Header)',
			'id' => 'logo_angels_reiky_therapy',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );

	}	
	add_action( 'widgets_init', 'logo_angels_reiky_therapy_widget_init' );  
	
	function appointment_widget_init() {
		register_sidebar( array(
			'name' => 'Appointment banner',
			'id' => 'appointment',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}		
	add_action( 'widgets_init', 'appointment_widget_init' );  
        
        function appointment_mobile_widget_init() {
		register_sidebar( array(
			'name' => 'Appointment banner (mobile)',
			'id' => 'appointment_mobile',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}		
	add_action( 'widgets_init', 'appointment_mobile_widget_init' );  

	function social_media_widget_init() {
		register_sidebar( array(
			'name' => 'Social media',
			'id' => 'social_media',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}		
	add_action( 'widgets_init', 'social_media_widget_init' );  

	function left_navigation_widget_init() {
		register_sidebar( array(
			'name' => 'Left navigation',
			'id' => 'left_navigation',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}		
	add_action( 'widgets_init', 'left_navigation_widget_init' ); 	
	
	function default_footer_logo_widget_init() {
		register_sidebar( array(
			'name' => 'Default Logo (Footer)',
			'id' => 'default_footer_logo',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}	
	add_action( 'widgets_init', 'default_footer_logo_widget_init' );  	
	
	function reiky_footer_logo_widget_init() {
		register_sidebar( array(
			'name' => 'Reiky Therapy Logo (Footer)',
			'id' => 'reiky_footer_logo',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}	
	add_action( 'widgets_init', 'reiky_footer_logo_widget_init' );  	

	function column1_footer_widget_init() {
		register_sidebar( array(
			'name' => 'Column 1 (Footer)',
			'id' => 'column1',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}		
	add_action( 'widgets_init', 'column1_footer_widget_init' ); 

	function column2_footer_widget_init() {
		register_sidebar( array(
			'name' => 'Column 2 (Footer)',
			'id' => 'column2',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}		
	add_action( 'widgets_init', 'column2_footer_widget_init' ); 

	function column3_footer_widget_init() {
		register_sidebar( array(
			'name' => 'Column 3 (Footer)',
			'id' => 'column3',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}		
	add_action( 'widgets_init', 'column3_footer_widget_init' ); 

	function copyright_widget_init() {
		register_sidebar( array(
			'name' => 'Copyright',
			'id' => 'copyright',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}	
	add_action( 'widgets_init', 'copyright_widget_init' );

// wpbootstrap	    

	function wpbootstrap_scripts_with_jquery()
	{
		// Register the script like this for a theme:
		wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ) );
		// For either a plugin or a theme, you can then enqueue the script:
		wp_enqueue_script( 'custom-script' );
	}
	add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
	

// Search for parent page (like Services)

function is_child($pageID) { 
	global $post; 
	if( is_page() && ($post->post_parent==$pageID) ) {
               return true;
	} else { 
               return false; 
	}	
}
?>